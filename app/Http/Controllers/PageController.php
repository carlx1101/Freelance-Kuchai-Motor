<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use App\Models\MotorImage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('guest.welcome');
    }

    public function contact(){
        return view('guest.contact');
    }

    public function usedMotors() {

          // Retrieve unique brands from the database
        $brands = Motorcycle::select('brand')->distinct()->pluck('brand');

        $usedMotors = Motorcycle::whereNotNull('mileage')
                                ->whereNotNull('road_tax_expiry_date')
                                ->whereNotNull('vehicle_registration_date')
                                ->get();


        return view('guest.used-motors', compact('usedMotors', 'brands'));
    }



    public function newMotors() {

        // Retrieve unique brands from the database
        $brands = Motorcycle::select('brand')->distinct()->pluck('brand');

        $newMotors = Motorcycle::whereNull('mileage')
                               ->whereNull('road_tax_expiry_date')
                               ->whereNull('vehicle_registration_date')
                               ->get();
        return view('guest.new-motors', compact('newMotors','brands'));
    }


    public function motor($id) {
        $motor = Motorcycle::findOrFail($id);
        $motorImages = MotorImage::where('motorcycle_id', $id)->get();

        return view('guest.motor', compact('motor', 'motorImages'));
    }

    public function search(Request $request)
    {

        $selectedBrand = $request->input('brand');
        $query = Motorcycle::query();

        if ($selectedBrand) {
            $query->where('brand', $selectedBrand);
        }

        $results = $query->get();
        $brands = Motorcycle::select('brand')->distinct()->pluck('brand');

        return view('guest.used-motors', compact('results', 'brands'));
    }

    public function searchNewMotor(Request $request)
    {

        $selectedBrand = $request->input('brand');
        $query = Motorcycle::query();

        if ($selectedBrand) {
            $query->where('brand', $selectedBrand);
        }

        $results = $query->get();
        $brands = Motorcycle::select('brand')->distinct()->pluck('brand');

        return view('guest.new-motors', compact('results', 'brands'));
    }

}
