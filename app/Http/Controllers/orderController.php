<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(Request $request){
    	return view('showOrder');
    }
}
