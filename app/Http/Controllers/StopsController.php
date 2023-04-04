<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Stops;
 
 
class StopsController extends Controller
{
    public function index_stops() 
    {
        $stops = Stops::all();
        return view("admin.stops", compact("stops"));
    }
    public function store_stops(Request $request)
    {
        $request->validate([
            'moreFields.*.stops' => 'required', 
            'moreFields.*.price' => 'required', 

        ]);
     
        foreach ($request->moreFields as $key => $value) {
            Stops::create($value);
        }
     
        return back()->with('success', 'Przystanek został dodany.');
    }
 
}