<?php

namespace App\Http\Controllers\Hospitals\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BloodType;
use Illuminate\Http\Request;
use Auth;


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

    public function bloodQty(){
        $bloodType = BloodType::all();
        return view('Hospitals.manage.bloodqty')
        ->withbloodType($bloodType);
      }

      public function bloodQtyStore(Request $request){

      $data = [
        'hospital_id' => Auth::user()->id,
        'bloodtype_id' => $request['blood_type_id'],
        'qty' => $request['qty']
      ];
      BloodtypeHospitalsQty::create($data);
      }


}
