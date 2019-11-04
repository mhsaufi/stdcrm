<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\WEvent;
use App\WEventTimeline;
use App\User;

class AdminControllerHome extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	return view('admin.home');
    }

    public function dashboardData(Request $request){

    	$wevent = new WEvent;
    	$count_wevent = $wevent->count();

    	//-----------------------------------------------

    	$company = new Company;
    	$count_company = $company->count();

    	//-----------------------------------------------

    	$user = new User;
    	$count_user = $user->count();

    	//-----------------------------------------------

    	$timeline = new WEventTimeline;
    	$count_timeline = $timeline->count();

    	$data = ['wevent'=>$count_wevent, 'company' => $count_company, 'user' => $count_user, 'timeline' => $count_timeline];

    	return json_encode($data, JSON_FORCE_OBJECT);
    }
}
