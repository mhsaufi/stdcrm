<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\WEvent;
use App\WEventTimeline;
use App\WEventVendors;
use App\User;

class AdminControllerHome extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $wevent = new WEvent;
        $count_wevent = $wevent->count();

        //-----------------------------------------------

        $company = new Company;
        $count_company = $company->count();

        //-----------------------------------------------

        $user = new User;
        $count_user = $user->count();

    	return view('admin.home',compact('count_wevent','count_company','count_user'));
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

    public function companyEventsTimeline(Request $request){

        $main_data = array();

        $company = new Company;
        $list_company = $company->get();

        $i = 0;

        foreach($list_company as $co){

            // get how many events does this company handle
            $wevent = new WEventVendors;
            $count_wevent = $wevent->where('company_id', $co['company_id'])->count();

            $main_data[$i]['y'] = $co['company_name'];
            $main_data[$i]['a'] = $count_wevent; 

            $i++;
        }

        return json_encode($main_data);

    }
}
