<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\CompanyPackage;
use App\WEvent;
use App\WEventInbox;
use App\WEventVendors;
use App\User;
use App\Http\Controllers\InboxController;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(){

        $wevent = new WEventVendors;
        $data_event = $wevent->where('company_id',Auth::user()->company_id)->get();

        $inbox = new WEventInbox;
        // $data_inbox = $inbox->where('i_recipient_id',Auth::user()->company_id)->where('i_status_id',0)->get();

        $count_inbox = $inbox->where(function($query){

                $query->where('i_recipient_id',Auth::user()->company_id)
                ->whereIn('i_type_id',[3,4,5,6])
                ->where('i_status_id',0);

            })->orWhere(function($query){

                $query->where('i_recipient_id',Auth::user()->user_id)
                ->whereIn('i_type_id',[2,7])
                ->where('i_status_id',0);

            })->count();

        $data_inbox = $inbox->where(function($query){

                    $query->where('i_recipient_id',Auth::user()->company_id)
                    ->whereIn('i_type_id',[3,4,5,6])
                    ->where('i_status_id',0);

                })->orWhere(function($query){

                    $query->where('i_recipient_id',Auth::user()->user_id)
                    ->whereIn('i_type_id',[2,7])
                    ->where('i_status_id',0);

                })->get();

        $i = 0;

        foreach($data_inbox as $inbox){

            if($inbox['i_type_id'] == '4' || $inbox['i_type_id'] == '5'){

                $company = new Company;
                $data_company = $company->where('company_id',$inbox['i_sender_id'])->first();

                $data_inbox[$i]['company'] = $data_company; 

            }elseif($inbox['i_type_id'] == '3'){

                $user = new User;
                $data_user = $user->where('id',$inbox['i_sender_id'])->first();

                $data_inbox[$i]['user'] = $data_user;
            }

            $i++;
        }

         // to list down all packages within this company in creating event form select option

        $package = new CompanyPackage;

        $package_data = $package->where('company_id', Auth::user()->company_id)->get();

        return view('internal.event',compact('data_event','data_inbox','count_inbox','package_data'));
    }

    public function bookingForm($package_id){

        $package = new CompanyPackage;

        $package_data = $package->where('package_id',$package_id)->first();

        //---------------------------------------------------------------------------

        // need to check either this user already book or not

        $event = new WEvent;

        $booking = $event->where('user_id',Auth::user()->id)->first();
        $booking_count = $event->where('user_id',Auth::user()->id)->count();

        return view('internal.bookingform',compact('package_data','booking','booking_count'));
    }

    public function newBooking(Request $request){

        $title = $request->input('title');
        $date = $request->input('date');
        $notes = $request->input('notes');
        $package_id = $request->input('package');
        $company_id = $request->input('company');

        $dt = Carbon::createFromFormat('d-m-Y', $date);

        $event = new WEvent;

        $event->we_title = $title;
        $event->we_date = $dt->toDateTimeString();
        $event->we_desc = $notes;
        $event->package_id = $package_id;
        $event->company_id = $company_id;
        $event->user_id = Auth::user()->id;
        $event->wes_id = '3';

        $event->save();

        $wevent_vendors = new WEventVendors;

        $wevent_vendors->company_id = $company_id;
        $wevent_vendors->we_id = $event->id;

        $wevent_vendors->save();

        return "Success";
    }

    public function actionBooking(Request $request){

        $action = $request->input('action');
        $we_id = $request->input('we_id');
        $remark = $request->input('remark');

        if($action == '1'){

            $event = new WEvent;

            $update = $event->where('we_id',$we_id)->update(['wes_id'=>'1']);

            return "0";

        }else{

            $event = new WEvent;

            $update = $event->where('we_id',$we_id)->update(['wes_id'=>'4','we_remark'=>$remark]);

            return "1";

        }
    }

    public function clearCart(Request $request){

        $we_id = $request->input('we_id');

        $event = new WEvent;

        $delete = $event->where('we_id',$we_id)->delete();

        return "Success";
    }

    public function newEvent(Request $request){

        $package_id = $request->input('package');
    	$title = $request->input('title');
    	$desc = $request->input('desc');
    	$address = $request->input('address');
    	$time1 = $request->input('time1');
    	$time2 = $request->input('time2');
    	$date = $request->input('date');
    	$company_id = Auth::user()->company_id;

    	$dt = Carbon::createFromFormat('d-m-Y H:i A', $date.' '.$time1);
    	$du = Carbon::createFromFormat('d-m-Y H:i A', $date.' '.$time2); 

    	$wevent = new WEvent;

    	$wevent->we_title = $title;
    	$wevent->we_date = $dt->toDateTimeString(); 
    	$wevent->we_time1 = $dt->toDateTimeString(); 
    	$wevent->we_time2 = $du->toDateTimeString(); 
    	$wevent->we_venue = $address;
        $wevent->package_id = $package_id;
    	$wevent->company_id = $company_id;
    	$wevent->we_desc = $desc;
    	$wevent->wes_id = '1';

    	$wevent->save();


        $wevent_vendors = new WEventVendors;

        $wevent_vendors->company_id = $company_id;
        $wevent_vendors->we_id = $wevent->id;

        $wevent_vendors->save();

    	return "success";
    }

    public function updateEvent(Request $request){

        $package_id = $request->input('package');
        $we_id = $request->input('we_id');
        $title = $request->input('title');
        $desc = $request->input('desc');
        $address = $request->input('address');
        $time1 = $request->input('time1');
        $time2 = $request->input('time2');
        $date = $request->input('date');
        $company_id = Auth::user()->company_id;

        $dt = Carbon::createFromFormat('d-m-Y H:i A', $date.' '.$time1);
        $du = Carbon::createFromFormat('d-m-Y H:i A', $date.' '.$time2); 

        $wevent = new WEvent;
        
        $update = $wevent->where('we_id',$we_id)
                ->update(
                    [
                        'we_title'=>$title,
                        'we_date'=>$dt->toDateTimeString(),
                        'we_time1'=>$du->toDateTimeString(),
                        'we_venue'=>$address,
                        'we_desc'=>$desc,
                        'package_id'=>$package_id
                    ]);        

        return "Success";
    }

    public function invite(Request $request){ 

        $user = $request->input('client');
        $vendors = $request->input('vendors');
        $item_id = $request->input('item_id');


        // if user is customer, can invite without approval
        if(Auth::user()->role_id == 5){

            $status_id = '0';

        }else{

            $status_id = '2';
        }

        $inboxcontroller = new InboxController;

        if($user <> null || $user <> ''){
            //v2c invitation
            $result = $inboxcontroller->newInbox(Auth::user()->company_id, $user,'2','','', $item_id, '0');
        }

        if($vendors == null || $vendors == ''){


        }else{
            
            foreach($vendors as $vendor){
                //v2v invitation
                $result = $inboxcontroller->newInbox(Auth::user()->company_id, $vendor,'4','','', $item_id, $status_id);
            }
        }

        return "Success";
    }

    public function approveinvite(Request $request){

        $i_id = $request->input('i_id');
        $action = $request->input('action');

        $inbox = new WEventInbox;

        if($action == 'app'){

            $update = $inbox->where('i_id', $i_id)->update(['i_status_id'=> '0']);

        }else{

            $update = $inbox->where('i_id', $i_id)->update(['i_status_id'=> '4']);
        }

    
        return "Success";
    }

    public function acceptInvitation(Request $request){

        $i_id = $request->input('id');
        $inbox = new WEventInbox;
        $update = $inbox->where('i_id',$i_id)->update(['i_status_id'=>'1']);

        $data = $inbox->where('i_id',$i_id)->first();

        $wevent = new WEvent;
        $update_wevent = $wevent->where('we_id',$data['i_item_id'])->update(['user_id' => Auth::user()->id]);

        return $data['i_item_id'];
    }

    public function declineInvitation(Request $request){

        $i_id = $request->input('id');

        $weventinbox = new WEventInbox;
        $data_inbox = $weventinbox->where('i_id',$i_id)->first();

        $inboxcontroller = new InboxController;

        //c2b declination
        $result = $inboxcontroller->newInbox(Auth::user()->id, $data_inbox['i_sender_id'],'3','','', $data_inbox['i_item_id']); 

        $update = $weventinbox->where('i_id',$i_id)->update(['i_status_id'=>'1']);

        return "Success";   
    }

    // V2V Invitaitoin
    public function acceptInvitationCompany(Request $request){

        $i_id = $request->input('id');

        $inbox = new WEventInbox;
        $update = $inbox->where('i_id',$i_id)->update(['i_status_id'=>'1']);

        $data = $inbox->where('i_id',$i_id)->first();

        $weventvendors = new WEventVendors;
        $weventvendors->company_id = Auth::user()->company_id;
        $weventvendors->we_id = $data['i_item_id'];

        $weventvendors->save();

        return $data['i_item_id'];
    }

    // v2v Declination
    public function declineInvitationCompany(Request $request){

        $i_id = $request->input('id');

        $weventinbox = new WEventInbox;
        $data_inbox = $weventinbox->where('i_id',$i_id)->first();

        $inboxcontroller = new InboxController;

        $result = $inboxcontroller->newInbox(Auth::user()->company_id, $data_inbox['i_sender_id'],'5','','', $data_inbox['i_item_id']);

        $update = $weventinbox->where('i_id',$i_id)->update(['i_status_id'=>'1']);

        return "Success";
    }

    public function ackDeclineInvitationCompany(Request $request){

        $i_id = $request->input('id');

        $weventinbox = new WEventInbox;

        $update = $weventinbox->where('i_id',$i_id)->update(['i_status_id'=>'1']);

        return "Success";
    }

    public function listAllCompanyEvent(){

        $weventvendors = new WEventVendors;
        $result = $weventvendors->where('company_id',Auth::user()->company_id)
        ->whereHas('event', function ($query) {
            $query->where('wes_id','1');
        })->get();

        return $result;
    }

    public function pastEvent(){

        $inbox = new WEventInbox;
        // $data_inbox = $inbox->where('i_recipient_id',Auth::user()->company_id)->where('i_status_id',0)->get();

        $count_inbox = $inbox->where(function($query){

                $query->where('i_recipient_id',Auth::user()->company_id)
                ->whereIn('i_type_id',[3,4,5,6])
                ->where('i_status_id',0);

            })->orWhere(function($query){

                $query->where('i_recipient_id',Auth::user()->user_id)
                ->whereIn('i_type_id',[2,7])
                ->where('i_status_id',0);

            })->count();

        // package data to list within create event form
        $package = new CompanyPackage;

        $package_data = $package->where('company_id', Auth::user()->company_id)->get();

        // all past events under this company_id
        $wevent = new WEventVendors;
        $data_event = $wevent
                        ->where('company_id',Auth::user()->company_id)
                        ->whereHas('event', function ($query) {
                            $query->whereIn('wes_id',[5]);
                        })
                        ->get();

        return view('internal.pastevent',compact('count_inbox','package_data','data_event'));
    }
}
