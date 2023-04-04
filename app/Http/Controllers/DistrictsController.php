<?php

namespace App\Http\Controllers;
use App\Models\Stops;
use App\Models\Districts;
use Illuminate\Http\Request;

class DistrictsController extends Controller
{
    public function index() 
    {
        $districts = Districts::all();
        $stops = Stops::all();
        return view("admin.stops", compact("districts", "stops"));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'Fields.*.districts' => 'required', 
            'Fields.*.price' => 'required',
        ]);
     
        foreach ($request->Fields as $key => $value) {
            Districts::create($value);
        }
     
        return back()->with('success', 'Dzielnica została dodana.');
    }
}
