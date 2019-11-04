<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllerVendors extends Controller
{
    public function index(Request $request){

    	return view('admin.vendors');
    }
}
