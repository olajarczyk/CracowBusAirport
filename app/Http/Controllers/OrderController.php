<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function index() 
    {
        return view("checkout");
    }
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'user_id' => 'nullable',
            'name' => 'nullable',
            'surname' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }

        Order::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
         
        return response()->json(['success'=>'Laravel ajax two example is being processed.']);
    }
}
