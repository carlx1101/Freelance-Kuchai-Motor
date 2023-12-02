<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Accessory;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AccessoryImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessories = Accessory::all();

        return view('admin.accessories.index', compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salesmen = User::where('role', 2)->get();
        $subcategories = Subcategory::select('id', 'subcategory_name')->get();

        return view('admin.accessories.create', compact('salesmen', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validateRequest($request);

        $data['availability'] =
            $request->has('availability');

        if (isset($request->accessory_cover)) {
            $file = substr(json_decode($request->accessory_cover)->dataURL, strpos(json_decode($request->accessory_cover)->dataURL, ',') + 1);
            $filename = json_decode($request->accessory_cover)->upload->filename;
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

            $fileStoreName = Str::uuid() . '_' . Carbon::now()->timestamp . '.' . $fileExtension; // Create unique name for cover picture

            Storage::put('public/accessory_covers/' . $fileStoreName, base64_decode($file),
            [
                'visibility' => 'public',
                'directory_visibility' => 'public'
            ]
        ); // Store image in motor_covers directory

            $data['accessory_cover_filename'] = $fileStoreName; // Assign to array for Database Storage
            $data['accessory_cover_url'] =
                url('storage/accessory_covers/' . $fileStoreName);
        }

        $accessory = Accessory::create($data);

        if (isset($request->accessory_images)) {
            $files = json_decode($request->accessory_images);
            $parentDirectoryName =
                Str::uuid() . '_' . Carbon::now()->timestamp; // Create a parent directory

            foreach ($files as $file) {
                $base64 =
                    substr($file->dataURL, strpos($file->dataURL, ',') + 1);
                $filename = $file->upload->filename;
                $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

                $fileStoreName = Str::uuid() . '_' . Carbon::now()->timestamp . '.' . $fileExtension;

                if (Storage::put('public/accessory_images/' . $accessory->id . '_' . $parentDirectoryName . '/' . $fileStoreName, base64_decode($base64),
                [
                    'visibility' => 'public',
                    'directory_visibility' => 'public'
                ]
                )) {
                    AccessoryImage::create([
                        'name' => $fileStoreName,
                        'url' => url('storage/accessory_images/' . $accessory->id . '_' . $parentDirectoryName . '/' . $fileStoreName),
                        'accessory_id' => $accessory->id,
                    ]);
                }
            }
        }

        if ($accessory) {
            return redirect()->route('accessories.index')->with('success', 'Accessory added successful');
        } else {
            return back()->with('error', 'Something went wrong, please try again later');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $accessory = Accessory::with('accessoryImages')->findOrFail($id);
        $salesmen = User::where('role', 2)->get();
        $subcategories = Subcategory::select('id', 'subcategory_name')->get();

        return view('admin.accessories.edit', compact('accessory', 'salesmen', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $this->validateRequest($request);

        $accessory_cover_json = json_decode($data['accessory_cover']);
        $accessory_images_json = json_decode($data['accessory_images']);

        $data['availability'] =
            $request->has('availability');

        $accessory = Accessory::with('accessoryImages')->findOrFail($id);

        if (count($accessory_cover_json->remove) > 0) {
            if (file_exists(public_path('storage/accessory_covers/' . $accessory_cover_json->remove[0]->name))) {
                Storage::delete('storage/accessory_covers/' . $accessory_cover_json->remove[0]->name);
                unlink(public_path('storage/accessory_covers/' . $accessory_cover_json->remove[0]->name));

                $data['accessory_cover_filename'] = null;
                $data['accessory_cover_url'] = null;
            }
        }

        if (count($accessory_cover_json->new_upload) > 0) { // Add New Cover Image
            $file = substr($accessory_cover_json->new_upload[0]->dataURL, strpos($accessory_cover_json->new_upload[0]->dataURL, ',') + 1);
            $fileStoreName = Str::uuid() . '_' . Carbon::now()->timestamp . '.' . pathinfo($accessory_cover_json->new_upload[0]->name, PATHINFO_EXTENSION); // Create unique name for cover picture

            Storage::put('public/accessory_covers/' . $fileStoreName, base64_decode($file),
            [
                'visibility' => 'public',
                'directory_visibility' => 'public'
            ]
        ); // Store image in accessory_covers directory

            $data['accessory_cover_filename'] = $fileStoreName; // Assign to array for Database Storage
            $data['accessory_cover_url'] =
                url('storage/accessory_covers/' . $fileStoreName);
        }

        if (count($accessory_images_json->remove) > 0) { // Remove Accessory Images
            $parentDirectoryName = preg_match('/\/([^\/]+)\/[^\/]+$/', $accessory->accessoryImages->first()->url, $matches) ? $matches[1] : '';
            foreach ($accessory_images_json->remove as $accessory_image) {
                if (file_exists(public_path('storage/accessory_images/' . $parentDirectoryName . '/' . $accessory_image->name))) {
                    foreach ($accessory->accessoryImages as $image) {
                        if ($image->name == $accessory_image->name) {
                            $image->delete();
                        }
                    }
                    Storage::delete('storage/accessory_images/' . $parentDirectoryName . '/' . $accessory_image->name);
                    unlink(public_path('storage/accessory_images/' . $parentDirectoryName . '/' . $accessory_image->name));
                }
            }
            count(File::files(public_path('storage/accessory_images/' . $parentDirectoryName))) == 0 ? File::deleteDirectory(public_path('storage/accessory_images/' . $parentDirectoryName)) : '';
        }

        if (count($accessory_images_json->new_upload) > 0) { // Add New Accessory Images
            if ($accessory->accessoryImages->isNotEmpty()) {
                $parentDirectoryName = preg_match('/\/([^\/]+)\/[^\/]+$/', $accessory->accessoryImages->first()->url, $matches) ? $matches[1] : '';
            } else {
                $parentDirectoryName = $accessory->id . '_' . Str::uuid() . '_' . Carbon::now()->timestamp;
            }
            foreach ($accessory_images_json->new_upload as $accessory_image) {
                $file = substr($accessory_image->dataURL, strpos($accessory_image->dataURL, ',') + 1);
                $fileStoreName = Str::uuid() . '_' . Carbon::now()->timestamp . '.' . pathinfo($accessory_image->name, PATHINFO_EXTENSION); // Create unique name for cover picture

                if (Storage::put('public/accessory_images/' . $parentDirectoryName . '/' . $fileStoreName, base64_decode($file),   [
                    'visibility' => 'public',
                    'directory_visibility' => 'public'
                ]
                )) {
                    AccessoryImage::create([
                        'name' => $fileStoreName,
                        'url' => url('storage/accessory_images/' . $parentDirectoryName . '/' . $fileStoreName),
                        'accessory_id' => $accessory->id,
                    ]);
                }
            }
        }

        if ($accessory->update($data)) {
            return redirect()->route('accessories.index')->with('success', 'Accessory updated successful');
        } else {
            return back()->with('error', 'Something went wrong, please try again later');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $accessory = Accessory::findOrFail($id);

        if (isset($accessory->accessory_cover_filename) && isset($accessory->accessory_cover_url)) {
            if (file_exists(public_path('storage/accessory_covers/' . $accessory->accessory_cover_filename))) {
                Storage::delete('storage/accessory_covers/' . $accessory->accessory_cover_filename);
                unlink(public_path('storage/accessory_covers/' . $accessory->accessory_cover_filename));
            }
        }

        if (count($accessory->accessoryImages) > 0) {
            $parentDirectoryName = preg_match('/\/([^\/]+)\/[^\/]+$/', $accessory->accessoryImages->first()->url, $matches) ? $matches[1] : abort(401);
            foreach ($accessory->accessoryImages as $accessory_image) {
                if (file_exists(public_path('storage/accessory_images/' . $parentDirectoryName . '/' . $accessory_image->name))) {
                    Storage::delete('storage/accessory_images/' . $parentDirectoryName . '/' . $accessory_image->name);
                    unlink(public_path('storage/accessory_images/' . $parentDirectoryName . '/' . $accessory_image->name));

                    // $accessory_image->delete(); Truncate from database
                }
            }
            count(File::files(public_path('storage/accessory_images/' . $parentDirectoryName))) == 0 ? File::deleteDirectory(public_path('storage/accessory_images/' . $parentDirectoryName)) : '';
        }

        if ($accessory->delete()) {
            return redirect()->route('accessories.index')->with('success', 'Accessory successful deleted');
        } else {
            return back()->with('error', 'Something went wrong, please try again later');
        }
    }

    /**
     * Validate Rule
     */
    public function validateRequest($request)
    {
        return $this->validate($request, [
            'name' => 'nullable|string',
            'description' => 'nullable|string',
            'pricing' => 'nullable|string',
            'availability' => 'nullable|in:on',

            'accessory_cover' => 'nullable|json',
            'accessory_images' => 'nullable|json',
            'salesman_id' => 'nullable|exists:users,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
        ]);
    }
}
