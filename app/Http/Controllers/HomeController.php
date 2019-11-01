<?php

namespace App\Http\Controllers;

use App\User;
use App\Company;
use App\CompanyCategoryTag;
use App\CompanyPackage;
use App\TimelineCategory;
use App\WEvent;
use App\WEventInbox;
use App\Http\Controllers\AdminControllerHome as Admin;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UtilitiesController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if(Auth::user()->role_id == '5'){

            $wevent = new WEvent;
            $count = $wevent->where('user_id',Auth::user()->id)->count();

            // if there is any event attached to this user

            if($count == 0){

                // check if there is invitations
                
                $inbox = new WEventInbox;
                $data_inbox = $inbox->where('i_recipient_id',Auth::user()->id)->where('i_type_id','2')->where('i_status_id','0')->get();

                $count_inbox = $inbox->where('i_recipient_id',Auth::user()->id)->where('i_type_id','2')->where('i_status_id','0')->count();

                return view('internal.clienttemp',compact('data_inbox','count','count_inbox'));

            }else{

                $event = new WEvent;
                $data_event = $event->where('user_id',Auth::user()->id)->first();

                $we_id = $data_event['we_id']; 

                // if wes_id 3, it means the event are still in pending booking mode. Need acceptance or approval from vendor
                // if wes_id 4, it means the event had been rejected by vendors

                if($data_event['wes_id'] == '3'){

                    return view('internal.clienttemp',compact('data_event','count'));

                }else if($data_event['wes_id'] == '4'){

                    return view('internal.clienttemp',compact('data_event','count'));

                }else{

                    return redirect()->action(
                        'TimelineController@index', ['ax' => $we_id]
                    );

                }

            }

        }else if(Auth::user()->role_id == '3'){

            if(Auth::user()->status_id == '1'){ // if active

                $dashboard = $this->vendorHome();

                return $dashboard;

            }else if(Auth::user()->status_id == '3'){ // if pending, need approval from company admin

                $temp_dashboard = $this->vendorPending();

                return $temp_dashboard;

            }else{ // if inactive..taking holiday leave maybe

                $temp_dashboard = $this->vendorInactive();

                return $temp_dashboard;
            }

        }else if(Auth::user()->role_id == '0'){

            $admin = new Admin;

            $admin_page = $admin->index();

            return $admin_page;
        }
    }

    public function profile(){

        if(Auth::user()->role_id == '3'){

            $company = new Company;

            $c_info = $company->where('company_id',Auth::user()->company_id)->get();

            $logo = $c_info[0]['company_logo'];

            $tag = new CompanyCategoryTag;

            $tag_list = $tag->where('company_id',Auth::user()->company_id)->get();

            $utilities = new UtilitiesController;

            $rate = $utilities->companyRating(Auth::user()->company_id);

            return view('internal.beta',compact('c_info','logo','tag_list','rate'));

        }else if(Auth::user()->role_id == '5' || Auth::user()->role_id == '4'){

            return view('internal.profile');
            // echo "No page yet";
        }
    }

    public function vendorHome(){

        $carbon = new Carbon;

        $this_month = $carbon->month;

        date_create();

        //---------------------------------------------------------------------------------------------

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

        return view('internal.home1',compact('this_month','count_inbox','package_data'));
    }

    public function vendorPending(){

        return view('internal.vendor.vendor_temp_page_pending');
    }

    public function vendorInactive(){

        return view('internal.vendor.vendor_temp_page_inactive');
    }

    public function updateProfile(Request $req){

        $fname = $req->input('fname');
        $phonenum = $req->input('phonenum');
        $dob = $req->input('dob');
        $addr = $req->input('addr');
        $state = $req->input('state');

        $users = new User;

        $update = $users
                    ->where('id', Auth::user()->id)
                    ->update(
                        [
                            'fullname'=>$fname,
                            'phone'=>$phonenum,
                            'dob'=>$dob,
                            'address'=>$addr,
                            'state'=>$state
                        ]);

        return "Successful update";
    }

}
