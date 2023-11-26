<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function customerHome(){
        return view('dashboard');
    }

    public function adminHome(){
        return view('admin.dashboard');
    }

    public function salesmanHome(){
        return view('salesman.dashboard');
    }
}
