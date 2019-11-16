<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\CompanyContact;
use App\CompanyPackage;
use App\TimelineCategory;
use App\User;
use App\WEvent;
use App\WEventInbox;
use App\WEventTimeline;
use App\WEventVendors;
use App\Template;
use App\Http\Controllers\CRMController;
use Carbon\Carbon;

class TimelineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

    	$we_id = $request->input('ax');

        // current event information

    	$wevent = new WEvent;
    	$data_event = $wevent->where('we_id',$we_id)->first();

        // get all Timeline category

        $tcategory = new TimelineCategory;
        $categories = $tcategory->all();

    	// reformatting date and time format

    	$carbon = new Carbon($data_event['we_date']);
    	$data_event['we_date'] = $carbon->format('d M , Y');
        $data_event['we_date_airdatepicker'] = $carbon->format('d-m-Y');

    	$carbon = new Carbon($data_event['we_time1']);
    	$data_event['we_time1'] = $carbon->format('h a');
        $data_event['we_time1_timepicker'] = $carbon->format('h:i A');

    	$carbon = new Carbon($data_event['we_time2']);
    	$data_event['we_time2'] = $carbon->format('h a');
        $data_event['we_time2_timepicker'] = $carbon->format('h:i A');

        //--------------------------------------------------

        // get all if there is any invitation to approve

        if(Auth::user()->role_id == '5'){

            $inbox = new WEventInbox;

            $inbox_data = $inbox->where('i_item_id',$we_id)->where('i_type_id','4')->where('i_status_id','2')->get();

            // echo "ada";

        }else{

            $inbox_data = '';

            // echo "tiada";

        }

        // get all package under this event's company for editing purpose in case want to change package

        $package = new CompanyPackage;

        $package_data = $package->where('company_id', $data_event['company_id'])->get();

    	//--------------------------------------------------

        // get all company except own company, for invitation use

        $all_company = new Company;
        $all_company_data = $all_company->whereNotIN('company_id',[Auth::user()->company_id])->get();

        // get all users where role is client, for invitation use

        $all_users = new User;
        $all_users_data = $all_users->whereIn('role_id',[4,5])->get();

        //--------------------------------------------------

        // prepare data for timeline view filter (all vendors relate to this event)

        $vendors = new WEventVendors;
        $data_vendors = $vendors->where('we_id',$we_id)->get();

        $d_vendors = array();

        $i = 0;

        $contact_check = new CompanyContact;

        foreach($data_vendors as $dv){

                $count = $contact_check->where('contact_id',$dv['vendor']['company_id'])
                                        ->where('contact_type','1')->count();

                if($count == 0){

                    $data_vendors[$i]['contact'] = 'no';

                }else{

                    $data_vendors[$i]['contact'] = 'yes';

                }

                $d_vendors[$i]['id'] = $dv['vendor']['company_id'];
                $d_vendors[$i]['name'] = $dv['vendor']['company_name'];
                $d_vendors[$i]['_id'] = $dv['vendor']['company_id'];

                $i++;
        }

        if($data_event['user_id'] <> 0){

            $user = $all_users->where('id',$data_event['user_id'])->first();

            $count = $contact_check->where('contact_id',$data_event['user_id'])
                                        ->where('contact_type','2')->count();

            if($count == 0){

                $data_event['user_is_contact'] = 'no';

            }else{

                $data_event['user_is_contact'] = 'yes';

            }

            $d_vendors[$i+1]['id'] = 0;
            $d_vendors[$i+1]['name'] = $user['name'];
            $d_vendors[$i+1]['_id'] = $user['id'];
        }

        array_multisort($d_vendors);

        //--------------------------------------------------

        $timeline = new WEventTimeline;

        $data_noti = $timeline
                    ->where('we_id', $we_id)
                    ->where(function($query){

                        $query
                        ->where(function($query_){
                            $query_->where('ts_id',1)->where('user_id', Auth::user()->id);
                        })
                        ->orWhere(function($query_){

                            $query_->where('ts_id',3)->where('wet_owner', Auth::user()->id);
                        });

                    })
                    ->get();

        // --------------------------------------------------

        $i = 0;

        foreach($data_noti as $noti){

            if($noti['wet_owner'] == Auth::user()->id){

                $c_data = new User;
                $user_data = $c_data->where('id',$noti['user_id'])->first();

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $data_noti[$i]['assigned'] = "Client";

                }else{

                    $data_noti[$i]['assigned'] = $user_data['company']['company_name'];
                }

            }else if($noti['user_id'] == Auth::user()->id){

                $c_data = new User;
                $user_data = $c_data->where('id',$noti['wet_owner'])->first();

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $data_noti[$i]['assigned'] = "Client";

                }else{

                    $data_noti[$i]['assigned'] = $user_data['company']['company_name'];
                }

            }else{
                
                $data_noti[$i]['assigned'] = $noti['vendor']['company']['company_name'];
            }
            
            $data_noti[$i]['wet_desc'] = base64_decode($noti['wet_desc']);

            $i++;
        }

        // assign client first

        $u = new User;
        $u_data = $u->where('id',$data_event['user_id'])->first();

        $vendors_users = array();

        $vendors_users[0]['name'] = "Client";  
        $vendors_users[0]['users'][0] = $u_data;

        $i = 1;

        foreach($data_vendors as $vendor){

            if($vendor['vendor']['company_id'] <> Auth::user()->company_id){

                $users = new User;
                $data_users = $users->where('company_id',$vendor['vendor']['company_id'])->whereNotIn('id', [Auth::user()->id])->get();

                $vendors_users[$i]['name'] = $vendor['vendor']['company_name'];
                $vendors_users[$i]['users'] = $data_users;

                $i++;
            }
        }

        //--------------------------------------------------

        //info payment

        $crm = new CRMController;

        $payment_data = $crm->transactionGeneralInfo($we_id);

        //--------------------------------------------------

    	return view('internal.timeline', compact('data_event','d_vendors','data_vendors','data_noti','categories','vendors_users','all_users_data','all_company_data','package_data','payment_data','inbox_data'));
    }

    public function createTimeline(Request $request){

        $payment = $request->input('payment');
        $category = $request->input('category');
        $datetime = $request->input('datetime');
        $user = $request->input('user');
        $content = $request->input('content');
        $we_id = $request->input('we_id');
        $subject = $request->input('subject');

        if(!$payment){
            $payment = 0;
        }

        $dt = Carbon::createFromFormat('d-m-Y H:i A', $datetime);

        $wevent_timeline = new WEventTimeline;

        $wevent_timeline->wet_desc = base64_encode($content);
        $wevent_timeline->wet_datetime = $dt->format('Y-m-d H:i:s');
        $wevent_timeline->we_id = $we_id;
        $wevent_timeline->wet_subject = $subject;
        $wevent_timeline->wet_owner = Auth::user()->id;
        $wevent_timeline->wet_payment = $payment;
        $wevent_timeline->user_id = $user;
        $wevent_timeline->tc_id = $category;
        $wevent_timeline->ts_id = '1';

        $wevent_timeline->save();
    }

    public function singleTimeline(Request $request){

        $tid = $request->input('tid');

        $timeline = new WEventTimeline;

        $data_timeline = $timeline->where('wet_id', $tid)->first();

         if($data_timeline['wet_owner'] == Auth::user()->id){

                $c_data = new User;
                $user_data = $c_data->where('id',$data_timeline['user_id'])->first();

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $data_timeline['assignation'] = "Client";

                }else{

                    $data_timeline['assignation'] = $user_data['company']['company_name'];
                }

            }else if($data_timeline['user_id'] == Auth::user()->id){

                $c_data = new User;
                $user_data = $c_data->where('id',$data_timeline['wet_owner'])->first();

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $data_timeline['assignation'] = "Client";

                }else{

                    $data_timeline['assignation'] = $user_data['company']['company_name'];
                }

            }else{

                $c_data = new User;
                $user_data = $c_data->where('id',$data_timeline['wet_owner'])->first();

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $data_timeline['assignation'] = "Client";

                }else{

                    $data_timeline['assignation'] = $user_data['company']['company_name'];
                }
            
            }

        $carbon = new Carbon($data_timeline['wet_datetime']);
        $data_timeline['wet_datetime'] = $carbon->format('d M , h:i a');
        $data_timeline['wet_datetime_datepicker'] = $carbon->format('d-m-Y h:i a');

        return json_encode($data_timeline);
    }

    public function timelineMonthly($year, $month, $company_id){

        //------------------------------------------------------------------------------------

        // to call all events related to this company
        $weventvendors = new WEventVendors;
        $data_event_vendors = $weventvendors->where('company_id',Auth::user()->company_id)->get();

        $arr_we_id = array();

        foreach($data_event_vendors as $dev){
            array_push($arr_we_id, $dev['we_id']);
        }

        // to get all timeline under all events related to this company
        $timeline = new WEventTimeline;

        $datas = $timeline->whereIn('we_id',$arr_we_id)
                        ->whereMonth('wet_datetime',$month)
                        ->whereYear('wet_datetime',$year)
                        ->whereHas('event', function ($query) {
                            $query->whereNotIn('wes_id',[5]);
                        })
                        ->get();

        //------------------------------------------------------------------------------------

    	// initiate real array which will be returned to caller method
    	$real_data = array();

    	$i = 0;

    	foreach($datas as $data){

    		$carbon = new Carbon($data['event']['we_date']);
    		$new_date = $carbon->format('d M , Y');

    		$carbon = new Carbon($data['wet_datetime']);
    		$data['wet_datetime'] = $carbon->format('d M , h:i a');

            $real_data[$i]['subject'] = $data['wet_subject'];
    		$real_data[$i]['datetime'] = $data['wet_datetime'];
            $real_data[$i]['status'] = $data['ts_id'];
    		$real_data[$i]['we_id'] = $data['event']['we_id'];
    		$real_data[$i]['we_title'] = $data['event']['we_title'];
    		$real_data[$i]['we_date'] = $new_date;
    		$real_data[$i]['we_venue'] = $data['event']['we_venue'];
            $real_data[$i]['wet_payment'] = $data['wet_payment'];

    		$i++;
    	}

    	return $real_data;
    }

    public function timelineEvently(Request $request){

        $we_id = $request->input('we_id');
        $vid = $request->input('vid');
        $filter = $request->input('filter');

        // call all timeline by given event_id
        $timeline = new WEventTimeline;

        if($vid <> null){

            if($vid == 'all'){ // no filter specified

                $datas = $timeline->where('we_id',$we_id)->get();

            }elseif($vid == 0){ // client is selected

                $wevent = new WEvent;
                $ev = $wevent->where('we_id',$we_id)->first();

                if($filter == 'owner'){ // if selected client is owner of the timeline

                    $datas = $timeline->where('we_id',$we_id)->where('wet_owner',$ev['user_id'])->get();

                }else{

                    $datas = $timeline->where('we_id',$we_id)->where('user_id',$ev['user_id'])->get();

                }

            }else{

                if($filter == 'owner'){ // if selected vendor is owner of the timeline

                    $datas = $timeline->where('we_id',$we_id)->where('wet_owner',$vid)->get();

                }else{

                    $datas = $timeline->where('we_id',$we_id)->where('user_id',$vid)->get();

                }
            }

        }else{

            $datas = $timeline->where('we_id',$we_id)->get();
        }

        // initiate real array which will be returned to caller method
        $real_data = array();

        $i = 0;

        foreach($datas as $data){

            if($data['wet_owner'] == Auth::user()->id){

                // because he is the owner, look for assigned to person's name

                $c_data = new User;
                $user_data = $c_data->where('id',$data['user_id'])->first();

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $real_data[$i]['assignto'] = $user_data['name'];

                }else{

                    $real_data[$i]['assignto'] = $user_data['company']['company_name'];
                }

                $real_data[$i]['owner'] = "Me";

            }else if($data['user_id'] == Auth::user()->id){

                // because he is assigned to with this timeline, look for owner's name

                $c_data = new User;
                $user_data = $c_data->where('id',$data['wet_owner'])->first();

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $real_data[$i]['owner'] = $user_data['name'];

                }else{

                    $real_data[$i]['owner'] = $user_data['company']['company_name'];
                }

                 $real_data[$i]['assignto'] = "Me";

            }else{

                $c_data = new User;
                $user_data = $c_data->where('id',$data['wet_owner'])->first(); // owner data

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $real_data[$i]['owner'] = $user_data['name'];

                }else{

                    $real_data[$i]['owner'] = $user_data['company']['company_name'];
                }

                $user_data = $c_data->where('id',$data['user_id'])->first(); // assigned to  data

                if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                    $real_data[$i]['assignto'] = $user_data['name'];

                }else{

                    $real_data[$i]['assignto'] = $user_data['company']['company_name'];
                }

            }

            $carbon = new Carbon($data['event']['we_date']);
            $data['event']['we_date'] = $carbon->format('d M , Y');
            $real_data[$i]['tid'] = $data['wet_id'];
            $real_data[$i]['time'] = $data['wet_datetime'];
            $real_data[$i]['header'] = $data['category']['tc_title'];
            $real_data[$i]['status'] = $data['ts_id'];
            $real_data[$i]['payment'] = $data['wet_payment'];
            $real_data[$i]['body'][0] = ['tag'=>'div','content'=>$data['wet_subject']];

            $i++;
        }

        return json_encode($real_data);
    }

    public function approveTImeline(Request $request){

        $wet_id = $request->input('wet_id');

        $wet = new WEventTimeline;

        $update = $wet->where('wet_id',$wet_id)->update(['ts_id'=>2]);

        return "Success";        
    }   

    public function disapproveTImeline(Request $request){

        $wet_id = $request->input('wet_id');
        $remark = $request->input('remark');

        $wet = new WEventTimeline;

        $update = $wet->where('wet_id',$wet_id)->update(['ts_id'=>3,'wet_remark' => $remark]);

        return "Success";
    }

    public function updateTimeline(Request $request){

        $category = $request->input('category');
        $datetime = $request->input('datetime');
        $user = $request->input('user');
        $content = $request->input('content');
        $we_id = $request->input('we_id');
        $subject = $request->input('subject');
        $payment = $request->input('payment');

        $dt = Carbon::createFromFormat('d-m-Y H:i A', $datetime);

        $timeline = new WEventTimeline;

        $udpate = $timeline
                    ->where('wet_id', $we_id)
                    ->update(['wet_subject'=>$subject,'wet_payment' => $payment,'wet_desc'=>base64_encode($content),'wet_datetime'=>$dt->format('Y-m-d H:i:s'),'user_id'=>$user,'tc_id'=>$category,'ts_id'=>1]);

        return "Status 200 Ok";
    }

    public function deleteTimeline(Request $request){

        $we_id = $request->input('we_id');

        $timeline = new WEventTimeline;

        $delete = $timeline->where('wet_id',$we_id)->delete();
        
        return "Status 200 Ok";
    }

    public function printTimeline(Request $request){

        $wet_id = $request->input('stdt');

        return view('internal.printpage',compact('wet_id'));
    }

    public function printAPI(Request $request){

        $wet_id = $request->input('wet_id');

        $timeline = new WEventTimeline;

        $result = $timeline->where('wet_id',$wet_id)->first();

        $carbon = new Carbon($result['wet_datetime']);
        $result['wet_datetime_f'] = $carbon->format('d M Y, h:i a');

        if($result['wet_owner'] == Auth::user()->id){

            $c_data = new User;
            $user_data = $c_data->where('id',$result['user_id'])->first();

            if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                $result['pic'] = "Client";
                $result['picfull'] = $user_data['fullname'];

            }else{

                $result['pic'] = $user_data['company']['company_name'];
                $result['picfull'] = $user_data['fullname']." (".$user_data['company']['company_name'].")";
            }

        }else if($result['user_id'] == Auth::user()->id){

            $c_data = new User;
            $user_data = $c_data->where('id',$result['wet_owner'])->first();

            if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                $result['pic'] = "Client";
                $result['picfull'] = $user_data['fullname'];

            }else{

                $result['pic'] = $user_data['company']['company_name'];
                $result['picfull'] = $user_data['fullname']." (".$user_data['company']['company_name'].")";
            }

        }else{

            $c_data = new User;
            $user_data = $c_data->where('id',$result['wet_owner'])->first();

            if($user_data['role_id'] == '4' || $user_data['role_id'] == '5'){

                $result['pic'] = "Client";
                $result['picfull'] = $user_data['fullname'];

            }else{

                $result['pic'] = $user_data['company']['company_name'];
                $result['picfull'] = $user_data['fullname']." (".$user_data['company']['company_name'].")";
            }
        
        }

        $data['content'] = $result;

        $template = new Template;

        $tresult = $template->whereIn('template_id',[1,2])->get();

        $data['header'] = $tresult[0]['template_content'];
        $data['footer'] = $tresult[1]['template_content'];

        $carbon = new Carbon('','Asia/Kuala_Lumpur');
        $data['print_date'] = "Printed on ".$carbon->format('d M Y, h:i a')." by <b>".Auth::user()->name."</b>";
        $data['print_year'] = $carbon->format('Y');

        return json_encode($data);
    }

    public function getTotalTimelineCOunt(){

        //get total timeline count
        $weventvendors = new WEventVendors;
        $data_event_vendors = $weventvendors->where('company_id',Auth::user()->company_id)->get();

        $arr_we_id = array();

        foreach($data_event_vendors as $dev){
            array_push($arr_we_id, $dev['we_id']);
        }

        $timeline = new WEventTimeline;

        $datas = $timeline
                ->whereIn('we_id',$arr_we_id)
                ->whereHas('event', function ($query) {
                            $query->whereNotIn('wes_id',[5]);
                        })
                ->count();

        return $datas;
    }

}
