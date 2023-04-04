<?php

namespace App\Http\Controllers;
use App\Models\Faq;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index() 
    {
        $faq = Faq::all();
        return view("admin.faq", compact("faq"));
    }

    public function index_display() 
    {
        $faq = Faq::all();
        return view("faq", compact("faq"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'FAQ.*.questions' => 'required',
            'FAQ.*.answears' => 'required',  
            'FAQ.*.category' => 'required',

        ]);
     
        foreach ($request->FAQ as $key => $value) {
            Faq::create($value);
        }
     
        return back()->with('success', 'Pytanie i odpowiedź zostały dodane');
    }
}
