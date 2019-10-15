<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WEvent;
use App\WEventTimeline;

class CRMController extends Controller
{
    public function index(){

    }

    public function transactionGeneralInfo($we_id){

    	$event = new WEvent;
    	$event_data = $event->where('we_id',$we_id)->first();

    	$timeline = new WEventTimeline;
    	$timeline_data = $timeline->where('we_id',$we_id)->where('ts_id','2')->get();

    	//-----------------------------------------------------------------

    	$we_value = $event_data['package']['package_price'];

    	$total_payable = 0;

    	foreach($timeline_data as $data){

    		$total_payable += $data['wet_payment'];
    	}

    	$total_receivable = $we_value-$total_payable;

    	$main_data['total'] = $we_value;
    	$main_data['total_payable'] = $total_payable;
    	$main_data['total_receivable'] = $total_receivable;


    	return $main_data;
    }
}
