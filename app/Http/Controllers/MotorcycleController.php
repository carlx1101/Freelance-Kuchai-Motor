<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;

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
        return view('admin.motorcycles.create');
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

                'mileage' => 'nullable|integer',
                'vehicle_registration_date' => 'nullable|date',
                'road_tax_expiry_date' => 'nullable|date',
            ]);

        $data['availability'] =
            $request->has('availability');

        if (Motorcycle::create($data)) {
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
