<?php

namespace App\Http\Controllers\Hospitals\Auth;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Hospitals;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('hospital')->get();
        return view('Hospitals.event.index', compact('events'));
    }

    public function create()
    {
        $hospitals = Hospitals::get(['id', 'hospitalName'])->toArray();
        return view('Hospitals.event.create', compact('hospitals'));
    }

    public function edit(Request $request)
    {
        $hospitals = Hospitals::get()->select('id', 'name');
        return view('Hospitals.event.create', compact('hospitals'));
    }

    public function submitEvent(Request $request)
    {
        $events = Event::with('hospital')->get();
        $destinationPath = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = 'Images/' . $fileName;
            $file->move($destinationPath, $fileName);
        }
        $data = [
            'hospital_id' => $request['hospital_id'],
            'type' => $request['type'],
            'name' => $request['name'],
            'description' => $request['description'],
            'image' => $destinationPath,
        ];
        Event::create($data);
        return view('Hospitals.event.index', compact('events'));
    }

    public function deleteEvent(Request $request, $id)
    {
        $hospitals = Hospitals::get()->select('id', 'name');
        return view('Hospitals.event.create', compact('hospitals'));
    }
}
