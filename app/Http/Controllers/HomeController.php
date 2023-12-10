<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Accessory;
use App\Models\Motorcycle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function customerHome(){
        return view('dashboard');
    }

    public function adminHome()
    {
        // Retrieve all motorcycles
        $motorcycles = Motorcycle::all();

        // Retrieve all accessories
        $accessories = Accessory::all();

        // Retrieve all bookings
        $bookings = Booking::all();

        // Retrieve all users with a role of 2
        $users = User::where('role', 2)->get();

        // Return the view with the queried data
        return view('admin.dashboard', compact('motorcycles', 'accessories', 'bookings', 'users'));
    }


    public function salesmanHome(){

        // Retrieve all booking records
        $bookings = Booking::all();
        return view('salesman.dashboard',['bookings' => $bookings]);
    }

    

}
