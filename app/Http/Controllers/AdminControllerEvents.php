<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllerEvents extends Controller
{
    public function index(Request $request){

    	return view('admin.events');
    }
}
