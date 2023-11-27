<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class SalesmanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesmans = User::where('role', 2)->get();
        $totalSalesman = $salesmans->count(); // Count the total number of salesmen

        return view('admin.salesman.index', compact('salesmans', 'totalSalesman'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        $user = new User($request->all());
        $user->password = Hash::make($request->password);
        $user->role = 2; // Set role to Salesman
        $user->save();

        return redirect()->route('salesman.index');
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
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id)],
            'phone_number' => 'required|string',
            'password' => 'nullable|string|min:8',
        ]);

        $data['password'] = empty($data['password']) ? User::findOrFail($id)->password : (Hash::check($data['password'], User::findOrFail($id)->password) ? User::findOrFail($id)->password : $data['password']);


        if (User::findOrFail($id)->update($data)) {
            return back()->with('success', $data['name'] . " has been updated.");
        } else {
            abort(500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return back()->with('success', $user->name . " has been removed!");
        } else {
            abort(500);
        }
    }
}
