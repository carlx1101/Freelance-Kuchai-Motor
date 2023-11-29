<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;

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

        $accessory = Accessory::create($data);

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
