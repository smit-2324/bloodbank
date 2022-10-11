<?php

namespace App\Http\Controllers\Hospitals\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class HospitalController extends Controller
{
    public function donarList(){
        $user = User::all()->with("bloodtype");
        dd($user);
      return view('Hospitals.manage.donar')
      ->withUser($user);
    }
}
