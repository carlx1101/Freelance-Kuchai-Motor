<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Accessory;
use App\Models\Motorcycle;
use App\Models\MotorImage;
// use Faker\Factory as Faker;
use Illuminate\Http\Request;
use App\Models\AccessoryImage;

class PageController extends Controller
{
    public function home()
    {
        $motors = Motorcycle::all();


        $usedMotors = Motorcycle::whereNotNull('mileage')
            ->whereNotNull('road_tax_expiry_date')
            ->whereNotNull('vehicle_registration_date')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        $motor = Motorcycle::inRandomOrder()->first();
        $stickyData = (object) [
            'customer_name' => 'Customer Name',
            'brand' => $motor->model ?? 'Motor',
            'motor_cover_url' => $motor->motor_cover_url ?? 'default_image_url.jpg'
        ];

        return view('guest.welcome', compact('motors', 'usedMotors', 'stickyData'));
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function usedMotors()
    {

        // Retrieve unique brands from the database
        $brands = Motorcycle::select('brand')->distinct()->pluck('brand');

        $usedMotors = Motorcycle::whereNotNull('mileage')
            ->whereNotNull('road_tax_expiry_date')
            ->whereNotNull('vehicle_registration_date')
            ->get();


        return view('guest.used-motors', compact('usedMotors', 'brands'));
    }



    public function newMotors()
    {

        // Retrieve unique brands from the database
        $brands = Motorcycle::select('brand')->distinct()->pluck('brand');

        $newMotors = Motorcycle::whereNull('mileage')
            ->whereNull('road_tax_expiry_date')
            ->whereNull('vehicle_registration_date')
            ->get();
        return view('guest.new-motors', compact('newMotors', 'brands'));
    }


    public function motor($id)
    {
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

    public function accessories(Request $request)
    {
        $category = $request->query('category');

        if ($category) {
            // Fetch the category first
            $categoryModel = Category::where('category_name', $category)->first();

            if ($categoryModel) {
                // Fetch subcategories for the category
                $subcategoryIds = $categoryModel->subcategories->pluck('id');

                // Fetch accessories for the subcategories
                $accessories = Accessory::whereIn('subcategory_id', $subcategoryIds)->get();

                // Debugging output
                // dd($categoryModel, $subcategoryIds, $accessories);
            } else {
                // If the category is not found
                dd("Category not found");
            }
        } else {
            $accessories = Accessory::all();
        }

        return view('guest.accessories', compact('accessories'));
    }



    public function accessory($accessoryId)
    {
        $accessory = Accessory::find($accessoryId);
        if (!$accessory) {
            abort(404);
        }

        $accessoryImages = AccessoryImage::where('accessory_id', $accessoryId)->get();

        return view('guest.accessory', compact('accessory', 'accessoryImages'));
    }

    public function branch()
    {
        return view('guest.branch');
    }
}
