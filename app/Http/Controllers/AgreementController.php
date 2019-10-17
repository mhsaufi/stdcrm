<?php

namespace App\Http\Controllers;

use App\WEvent;
use App\WEventAgreement;
use App\WEventVendors;
use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function read(Request $request){

    	$we_id = $request->input('we_id');

    	$vendor_info = array();

    	$agreement = new WEventAgreement;

    	$agreement_info_count = $agreement->where('we_id',$we_id)->count();

    	if($agreement_info_count > 0){

    		$data['agreement_data'] = $agreement->where('we_id',$we_id)->get();

    	}else{

    		$wevent_vendor = new WEventVendors;

    		$vendors = $wevent_vendor->where('we_id',$we_id)->get();

    		$i = 0;

    		foreach($vendors as $vendor){

    			$vendor_info[$i]['id'] = $vendor['vendor']['company_id'];
    			$vendor_info[$i]['name'] = $vendor['vendor']['company_name'];
    			$vendor_info[$i]['dp'] = $vendor['vendor']['company_logo'];
    			$vendor_info[$i]['type'] = 'company'; 

    			$i++;
    		}

    		$event = new WEvent;
    		$event_info = $event->where('we_id',$we_id)->first();

    		$vendor_info[$i+1]['id'] = $event_info['client']['id'];
    		$vendor_info[$i+1]['name'] = $event_info['client']['name'];
    		$vendor_info[$i+1]['dp'] = $event_info['client']['dp'];
    		$vendor_info[$i+1]['type'] = 'client';

    		$data['main_data'] = $vendor_info;
    		$data['count'] = $agreement_info_count;
    	}

    	return json_encode($data);
    }
}
