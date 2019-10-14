<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CompanyPackage;
use App\WEvent;
use App\WEventInbox;

class InboxController extends Controller
{
    public function index(){

        // to check if there is any inbox message such as event invitation or rejection from other vendors or client

        $inbox = new WEventInbox;

        $count_inbox = $inbox->where(function($query){

                $query->where('i_recipient_id',Auth::user()->company_id)
                ->whereIn('i_type_id',[3,4,5,6])
                ->where('i_status_id',0);

            })->orWhere(function($query){

                $query->where('i_recipient_id',Auth::user()->user_id)
                ->whereIn('i_type_id',[2,7])
                ->where('i_status_id',0);

            })->count();

        // to count if there is any booking from customer made

        $wevent = new WEvent;
        $count = $wevent->where('company_id',Auth::user()->company_id)->where('wes_id','3')->count();

        $count_inbox += $count;

        // to list down all packages within this company in creating event form select option

        $package = new CompanyPackage;
        $package_data = $package->where('company_id', Auth::user()->company_id)->get();

        //------------------------------------------------------------------------------------

        $mailbox = new WEventInbox;

        $mailbox_data = $mailbox
                        ->where('i_recipient_id',Auth::user()->company_id)
                        ->whereIn('i_type_id',[8])
                        ->get();


        return view('internal.mailbox',compact('count_inbox','package_data','mailbox_data'));
    }

    public function viewMail(Request $request){

        $i_id = $request->input('i_id');

        $mailbox = new WEventInbox;

        $mailbox_data = $mailbox->where('i_id',$i_id)->first()->toJson();

        $mark_read = $mailbox->where('i_id',$i_id)->update(['i_status_id'=>'1']);

        return $mailbox_data;
    }

    public function newInbox($i_sender_id, $i_recipient_id, $i_type_id, $i_subject,$i_content, $i_item_id){

    	$inbox = new WEventInbox;

        $inbox->i_sender_id = $i_sender_id;
        $inbox->i_recipient_id = $i_recipient_id;
        $inbox->i_type_id = $i_type_id;
        $inbox->i_subject = $i_subject;
        $inbox->i_content = $i_content;
        $inbox->i_item_id = $i_item_id;

        $inbox->save();

        return true;
    }

    public function markRead(Request $request){

        $checked = $request->input('checked');

        $inbox = new WEventInbox;

        foreach($checked as $id){

            $update = $inbox->where('i_id',$id)->update(['i_status_id'=>'1']);

        }

        return "success";
    }

    public function markUnread(Request $request){

        $checked = $request->input('checked');

        $inbox = new WEventInbox;

        foreach($checked as $id){

            $update = $inbox->where('i_id',$id)->update(['i_status_id'=>'0']);

        }

        return "success";
    }

    public function markDeleted(Request $request){

        $checked = $request->input('checked');

        $inbox = new WEventInbox;

        foreach($checked as $id){

            $update = $inbox->where('i_id',$id)->delete();

        }

        return "success";
    }

    public function contactUs(Request $request){

        $i_type_id = $request->input('iid');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $content = $request->input('content');
        $company_id = $request->input('company_id');

        $inbox = new WEventInbox;

        $inbox->i_sender_id = $email;
        $inbox->i_recipient_id = $company_id;
        $inbox->i_type_id = $i_type_id;
        $inbox->i_subject = $subject;
        $inbox->i_content = $content;
        $inbox->i_item_id = $i_type_id;

        $inbox->save();

        return "success";
    }

    public function companyMailbox(){

        $inbox = new WEventInbox;

        $data_inbox = $inbox->where('i_recipient_id', Auth::user()->company_id)->whereIn('i_type_id',[8,9])->get();
        $inbox_count = $inbox->where('i_recipient_id', Auth::user()->company_id)->whereIn('i_type_id',[8,9])->where('i_status_id',0)->count();

        $data['mailbox'] = $data_inbox;
        $data['count_mailbox'] = $inbox_count;

        return $data;
    }
}
