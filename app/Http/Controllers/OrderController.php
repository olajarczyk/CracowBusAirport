<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{

    public function index_checkout() 
    {
        return view("checkout");
    }

    public function index_display() 
    {
        $order = Order::all();
        return view('account', compact('order'));
    }
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'user_id' => 'nullable',
            'from' => 'nullable',
            'passengers' => 'nullable',
            'adult' => 'nullable',
            'child' => 'nullable',
            'to' => 'nullable',
            'date' => 'nullable',
            'hour' => 'nullable',
            'price' => 'nullable',
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
            'from' => $request->from,
            'passengers' => $request->passengers,
            'adult' => $request->adult,
            'child' => $request->child,
            'to' => $request->to,
            'date' => $request->date,
            'hour' => $request->hour,
            'price' => $request->price,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        foreach ($request->Order as $key => $value) {
            Order::create($value);
        }
         
        return response()->json(['success'=>'Twoje zamówienie zostało dodane.']);
    }

}
