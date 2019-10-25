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

    	$users = $user->where('company_id', Auth::user()->company_id)->where('status_id','1')->whereNotIn('id',[Auth::user()->id])->get();

    	$users_inactive = $user->where('company_id', Auth::user()->company_id)->where('status_id','2')->whereNotIn('id',[Auth::user()->id])->get();

    	return view('internal.insider',compact('company_info','users','users_inactive'));
    }

    public function activationStaff(Request $request){

    	$staff = $request->input('staff_id');
    	$action = $request->input('action');

    	if($action == 'activate'){
    		$status_id = '1';
    	}else{
    		$status_id = '2';
    	}

    	$user = new User;

    	$udpate = $user->where('id',$staff)->update(['status_id'=>$status_id]);

    }
}
