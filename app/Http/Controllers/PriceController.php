<?php

namespace App\Http\Controllers;
use App\Models\Stops;
use App\Models\Districts;

class PriceController extends Controller
{
    public function index() 
    {
        $districts = Districts::all();
        $stops = Stops::all();
        return view("price", compact("districts", "stops"));
    }

}
