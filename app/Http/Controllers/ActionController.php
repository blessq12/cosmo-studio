<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function send(Request $request){

        return response()->json([
            'status' => true,
            'data' => $request->all()
        ]);
        
    }
}
