<?php

namespace App\Http\Controllers\Hospitals\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class HospitalController extends Controller
{
    public function donarList(){
        $user = User::with("bloodTypes")->get();

      return view('Hospitals.manage.donar')
      ->withUser($user);
    }
    public function dashboard(){

      return view('Hospitals.manage.dashboard');
    }

}
