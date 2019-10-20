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

        // count agreement info if any

    	$agreement = new WEventAgreement;

    	$agreement_info_count = $agreement->where('we_id',$we_id)->count();

        // get list of all vendos within this event

        $wevent_vendor = new WEventVendors;

        $vendors = $wevent_vendor->where('we_id',$we_id)->get();

        // to iterate through all the vendors

    	if($agreement_info_count > 0){

            $i = 0;

            foreach($vendors as $vendor){

                $vendor_info[$i]['id'] = $vendor['vendor']['company_id'];
                $vendor_info[$i]['name'] = $vendor['vendor']['company_name'];
                $vendor_info[$i]['dp'] = $vendor['vendor']['company_logo'];
                $vendor_info[$i]['type'] = 'company';

                $agreement3 = new WEventAgreement;

                $data_agreement = $agreement3->where('we_id',$we_id)
                                    ->where('party_id',$vendor['vendor']['company_id'])
                                    ->where('party_type','company')
                                    ->first();

                $vendor_info[$i]['agreement_data'] = $data_agreement;

                $i++; 

            }

            $event = new WEvent;
            $event_info = $event->where('we_id',$we_id)->first();

            $vendor_info[$i+1]['id'] = $event_info['client']['id'];
            $vendor_info[$i+1]['name'] = $event_info['client']['name'];
            $vendor_info[$i+1]['dp'] = $event_info['client']['dp'];
            $vendor_info[$i+1]['type'] = 'client';

             $agreement4 = new WEventAgreement;

            $data_agreement = $agreement4->where('we_id',$we_id)
                    ->where('party_id',$event_info['client']['id'])
                    ->where('party_type','client')
                    ->first();

            $vendor_info[$i+1]['agreement_data'] = $data_agreement;

            $data['main_data'] = $vendor_info;
            $data['count'] = $agreement_info_count;

    	}else{

    		$i = 0;

    		foreach($vendors as $vendor){

    			$vendor_info[$i]['id'] = $vendor['vendor']['company_id'];
    			$vendor_info[$i]['name'] = $vendor['vendor']['company_name'];
    			$vendor_info[$i]['dp'] = $vendor['vendor']['company_logo'];
    			$vendor_info[$i]['type'] = 'company'; 

                $agreement1 = new WEventAgreement;

                $agreement1->we_id = $we_id;
                $agreement1->party_id = $vendor['vendor']['company_id'];
                $agreement1->party_type = "company";
                $agreement1->party_agree = '0';

                $agreement1->save();

                $data_agreement = $agreement1->where('a_id',$agreement1->id)->first();

                $vendor_info[$i]['agreement_data'] = $data_agreement;

    			$i++;
    		}

    		$event = new WEvent;
    		$event_info = $event->where('we_id',$we_id)->first();

    		$vendor_info[$i+1]['id'] = $event_info['client']['id'];
    		$vendor_info[$i+1]['name'] = $event_info['client']['name'];
    		$vendor_info[$i+1]['dp'] = $event_info['client']['dp'];
    		$vendor_info[$i+1]['type'] = 'client';

            $agreement2 = new WEventAgreement;

            $agreement2->we_id = $we_id;
            $agreement2->party_id = $event_info['client']['id'];
            $agreement2->party_type = "client";
            $agreement2->party_agree = '0';

            $agreement2->save();

            $data_agreement = $agreement2->where('a_id',$agreement2->id)->first();

            $vendor_info[$i+1]['agreement_data'] = $data_agreement;

    		$data['main_data'] = $vendor_info;
    		$data['count'] = $agreement_info_count;
    	}

    	return json_encode($data);
    }

    public function end(Request $request){

        $party_id = $request->input('id');
        $party_type = $request->input('vote_type');
        $we_id = $request->input('we_id');
        $remark = $request->input('remark');

        $agreement = new WEventAgreement;

        $update = $agreement->where('we_id',$we_id)->where('party_type',$party_type)->where('party_id',$party_id)->update(['party_agree'=>'1','remark'=>$remark]);

        $result = $this->majorityCount($we_id);

        return $result;
    }

    public function majorityCount($we_id){

        $wevent_vendor = new WEventVendors;

        $vendors = $wevent_vendor->where('we_id',$we_id)->count();

        //--------------------------------------------------------------------

        $total_participant = $vendors+1; // plus client

        $agreement = new WEventAgreement;

        $agreement_info_count = $agreement->where('we_id',$we_id)->where('party_agree','1')->count();

        $votes_count = $agreement_info_count;

        $half_of_total = $total_participant/2;

        if($votes_count > $half_of_total){

            $result = 0;

        }else{

            $result = 1;

        }

        return $result;
    }
}
