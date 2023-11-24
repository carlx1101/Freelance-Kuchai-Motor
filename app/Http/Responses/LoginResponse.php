<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $home = "/"; // Default value

        if (auth()->user()->role == 'admin'){
            $home = "/admin/dashboard";
        }
        else if(auth()->user()->role == 'customer'){
            $home = "/dashboard";
        }

        return redirect()->intended($home);
    }
}
