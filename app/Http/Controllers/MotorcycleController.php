<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Motorcycle;
use App\Models\MotorImage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motorcycles = Motorcycle::all();

        return view('admin.motorcycles.index', compact('motorcycles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salesmen = User::where('role', 2)->get();
        return view('admin.motorcycles.create', compact('salesmen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validateRequest($request);

        $data['availability'] =
            $request->has('availability');

        if (isset($request->motor_cover)) {
            $file = substr(json_decode($request->motor_cover)->dataURL, strpos(json_decode($request->motor_cover)->dataURL, ',') + 1);
            $filename = json_decode($request->motor_cover)->upload->filename;
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

            $fileStoreName = Str::uuid() . '_' . Carbon::now()->timestamp . '.' . $fileExtension; // Create unique name for cover picture

            Storage::put('public/motor_covers/' . $fileStoreName, base64_decode($file)); // Store image in motor_covers directory

            $data['motor_cover_filename'] = $fileStoreName; // Assign to array for Database Storage
            $data['motor_cover_url'] =
                url('storage/motor_covers/' . $fileStoreName);
        }

        if ($motorcycle = Motorcycle::create($data)) {
            if (isset($request->motor_images)) {
                $files = json_decode($request->motor_images);
                $parentDirectoryName =
                    Str::uuid() . '_' . Carbon::now()->timestamp; // Create a parent directory

                foreach ($files as $file) {
                    $base64 =
                        substr($file->dataURL, strpos($file->dataURL, ',') + 1);
                    $filename = $file->upload->filename;
                    $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

                    $fileStoreName = Str::uuid() . '_' . Carbon::now()->timestamp . '.' . $fileExtension;

                    if (Storage::put('public/motor_images/' . $motorcycle->id . '_' . $parentDirectoryName . '/' . $fileStoreName, base64_decode($base64))) {
                        MotorImage::create([
                            'name' => $fileStoreName,
                            'url' => url('storage/motor_images/' . $motorcycle->id . '_' . $parentDirectoryName . '/' . $fileStoreName),
                            'motorcycle_id' => $motorcycle->id,
                        ]);
                    }
                }
            }

            return redirect()->route('motorcycles.index')->with('success', 'Motorcycle registration successful');
        } else {
            return back()->with('error', 'Motorcycle registration failed');
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
        $salesmen = User::where('role', 2)->get();
        $motorcycle = Motorcycle::with('motorcycleImages')->findorFail($id);

        return view('admin.motorcycles.edit', compact('motorcycle', 'salesmen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $this->validateRequest($request);

        $motor_cover_json = json_decode($data['motor_cover']);
        $motor_images_json = json_decode($data['motor_images']);

        $motorcycle = Motorcycle::with('motorcycleImages')->findOrFail($id);

        if (count($motor_cover_json->remove) > 0) {
            if (file_exists(public_path('storage/motor_covers/' . $motor_cover_json->remove[0]->name))) {
                Storage::delete('storage/motor_covers/' . $motor_cover_json->remove[0]->name);
                unlink(public_path('storage/motor_covers/' . $motor_cover_json->remove[0]->name));

                $data['motor_cover_filename'] = null;
                $data['motor_cover_url'] = null;
            }
        }

        if (count($motor_cover_json->new_upload) > 0) { // Add New Cover Image
            $file = substr($motor_cover_json->new_upload[0]->dataURL, strpos($motor_cover_json->new_upload[0]->dataURL, ',') + 1);
            $fileStoreName = Str::uuid() . '_' . Carbon::now()->timestamp . '.' . pathinfo($motor_cover_json->new_upload[0]->name, PATHINFO_EXTENSION); // Create unique name for cover picture

            Storage::put('public/motor_covers/' . $fileStoreName, base64_decode($file)); // Store image in motor_covers directory

            $data['motor_cover_filename'] = $fileStoreName; // Assign to array for Database Storage
            $data['motor_cover_url'] =
                url('storage/motor_covers/' . $fileStoreName);
        }

        if (count($motor_images_json->remove) > 0) { // Remove Motor Images
            $parentDirectoryName = preg_match('/\/([^\/]+)\/[^\/]+$/', $motorcycle->motorcycleImages->first()->url, $matches) ? $matches[1] : '';
            foreach ($motor_images_json->remove as $motor_image) {
                if (file_exists(public_path('storage/motor_images/' . $parentDirectoryName . '/' . $motor_image->name))) {
                    foreach ($motorcycle->motorcycleImages as $image) {
                        if ($image->name == $motor_image->name) {
                            $image->delete();
                        }
                    }
                    Storage::delete('storage/motor_images/' . $parentDirectoryName . '/' . $motor_image->name);
                    unlink(public_path('storage/motor_images/' . $parentDirectoryName . '/' . $motor_image->name));
                }
            }
        }

        if (count($motor_images_json->new_upload) > 0) { // Add New Cover Image
            $file = substr($motor_cover_json->new_upload[0]->dataURL, strpos($motor_cover_json->new_upload[0]->dataURL, ',') + 1);
            $fileStoreName = Str::uuid() . '_' . Carbon::now()->timestamp . '.' . pathinfo($motor_cover_json->new_upload[0]->name, PATHINFO_EXTENSION); // Create unique name for cover picture

            Storage::put('public/motor_covers/' . $fileStoreName, base64_decode($file)); // Store image in motor_covers directory

            $data['motor_cover_filename'] = $fileStoreName; // Assign to array for Database Storage
            $data['motor_cover_url'] =
                url('storage/motor_covers/' . $fileStoreName);
        }

        $data['availability'] =
            $request->has('availability');

        if ($motorcycle->update($data)) {
            return redirect()->route('motorcycles.index')->with('success', 'Motorcycle updated successful');
        } else {
            return back()->with('error', 'Something went wrong, please try again later');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Validate Rule
     */
    public function validateRequest($request)
    {
        return $this->validate($request, [
            'model' => 'nullable|string',
            'manufacture_year' => 'nullable|integer|digits:4',
            'capacity' => 'nullable|string',
            'colour' => 'nullable|string',
            'brand' => 'nullable|string',
            'description' => 'nullable|string',

            'engine_type' => 'nullable|string',
            'displacement' => 'nullable|string',
            'max_power' => 'nullable|string',
            'max_torque' => 'nullable|string',
            'transmission' => 'nullable|string',
            'fuel_system' => 'nullable|string',
            'ignition_system' => 'nullable|string',

            'frame_type' => 'nullable|string',
            'front_suspension' => 'nullable|string',
            'rear_suspension' => 'nullable|string',
            'fuel_capacity' => 'nullable|string',
            'battery' => 'nullable|string',

            'pricing' => 'nullable|string',
            'availability' => 'nullable|in:on',

            'salesman_id' => 'nullable|exists:users,id',
            'motor_cover' => 'nullable|json',
            'motor_images' => 'nullable|json',

            'mileage' => 'nullable|integer',
            'vehicle_registration_date' => 'nullable|date',
            'road_tax_expiry_date' => 'nullable|date',
        ]);
    }
}
