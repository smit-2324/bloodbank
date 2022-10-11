<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\UpdateProfileRequest;

class UpdateProfileController extends Controller
{
    //
    public function update(UpdateProfileRequest $request)
    {
        $stateID=$request->input('stateID');
        if (is_numeric($stateID)){
            $request->validate([
               'stateID' => 'exists:states,stateID'
            ]);
        }else{
            $request->validate([
                'stateID' => 'exists:states,stateName'
            ]);
            $stateID=State::where('stateName',$stateID)->first()->stateID;
        }
       $profileUpdate=auth()->user()->update([
           'email' => $request->email,
           'phoneNo' => $request->phoneNo,
           'zipCode' => $request->zipCode,
           'address' => $request->address,
           'stateID' => $stateID,
           'password' => bcrypt($request->password),
       ]);
        return redirect()->route('profile')->with('message', 'Profile saved successfully');
    }
}
