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
        return view('admin.motorcycles.index');
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
        $data =
            $request->validate([
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
