<?php

namespace App\Http\Controllers\Appointments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Donor\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($status = '')
    {
        $min_date =Carbon::now()->addDays(2)->format('Y-m-d');
        $appointments=Auth::user()->appointmentsSpecific($status);
        return view('Appointments.index',compact('appointments','status','min_date'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $appointments=auth()->user()->appointments;
        return view('Appointments.create',compact('appointments',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AppointmentRequest $request)
    {
        Appointment::create([
            'userID'=>auth()->user()->id,
             'appointmentDate' => $request->appointmentDate,
              'appointmentTime' => $request->appointmentTime,
            ]
        );
        $appointments=auth()->user()->appointments;
        return to_route('appointment.index')->with(['appointments'=>$appointments,'message'=> 'Appointment Created Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::where('id',$id)->delete();
        $appointments=auth()->user()->appointments;
        return to_route('appointment.index',compact('appointments'));
    }
}
