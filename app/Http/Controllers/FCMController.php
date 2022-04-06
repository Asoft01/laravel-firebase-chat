<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FCMController extends Controller
{
    public function index(Request $req){
        // return response()->json(['data' => 'Hello World!']);
        $input = $req->all();
        return response()-json($input);
    }
}
