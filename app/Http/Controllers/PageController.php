<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('guest.welcome');
    }

    public function contact(){
        return view('guest.contact');
    }

    public function usedMotors(){
        return view('guest.used-motors');
    }

    public function newMotors(){
        return view('guest.new-motors');
    }

}
