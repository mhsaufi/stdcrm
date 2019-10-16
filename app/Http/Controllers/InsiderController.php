<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsiderController extends Controller
{
    public function index(){

    	$company = new Company;

    	$company_info = $company->where('company_id', Auth::user()->company_id)->first();

    	//-------------------------------------------------------------------------------

    	$user = new User;

    	$users = $user->where('company_id', Auth::user()->company_id)->where('role_id','3')->get();

    	return view('internal.insider',compact('company_info','users'));
    }
}
