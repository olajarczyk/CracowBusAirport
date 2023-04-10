<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\DetailOrder;

class OrderDetailsController extends Controller
{
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'from' => 'nullable',
            'passengers' => 'nullable',
            'adult' => 'nullable',
            'child' => 'nullable',
            'to' => 'nullable',
            'date' => 'nullable',
            'hour' => 'nullable',
            'price' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }

        DetailOrder::create([
            'from' => $request->from,
            'passengers' => $request->passengers,
            'adult' => $request->adult,
            'child' => $request->child,
            'to' => $request->to,
            'date' => $request->date,
            'hour' => $request->hour,
            'price' => $request->price,
        ]);
         
        return response()->json(['success'=>'Laravel ajax example is being processed.']);
    }
}
