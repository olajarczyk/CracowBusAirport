<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Route;

class LocalizationController extends Controller
{
    public function index()
    {
        return redirect('index');
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        return redirect()->back();
    }
}
