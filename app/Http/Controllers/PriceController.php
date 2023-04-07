<?php

namespace App\Http\Controllers;
use App\Models\Stops;
use App\Models\Districts;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() 
    {
        $districts = Districts::all();
        $stops = Stops::all();
        return view("price", compact("districts", "stops"));
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        return view('price');
    }

}
