<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InsiderController extends Controller
{
    public function index(){

    	$company = new Company;

    	$company_info = $company->where('company_id', Auth::user()->company_id)->first();

    	//-------------------------------------------------------------------------------

    	$user = new User;

    	$users = $user->where('company_id', Auth::user()->company_id)->where('status_id','1')->whereNotIn('id',[Auth::user()->id])->get();

    	$users_inactive = $user->where('company_id', Auth::user()->company_id)->where('status_id','2')->whereNotIn('id',[Auth::user()->id])->get();

        $users_pending = $user->where('company_id', Auth::user()->company_id)->where('status_id','3')->whereNotIn('id',[Auth::user()->id])->get();

    	return view('internal.insider',compact('company_info','users','users_inactive','users_pending'));
    }

    public function activationStaff(Request $request){

    	$staff = $request->input('staff_id');
    	$action = $request->input('action');

    	if($action == 'activate'){
    		$status_id = '1';
    	}else if($action == 'deactivate'){
    		$status_id = '2';
    	}else if($action == 'approve'){
            $status_id = '1';
        }else{
            $status_id = '4';
        }

        // echo "LALAL";

    	$user = new User;

    	$udpate = $user->where('id',$staff)->update(['status_id'=>$status_id]);

        if($action == 'approve'){

            $dashboard_url = url('/home');

            $company = new Company;
            $data = $company->where('company_id',Auth::user()->company_id)->first();

            $info = $user->where('id',$staff)->first();

            // echo $info['email'];

            Mail::send('emails.application_approval_mail',['dashboard_url' => $dashboard_url,'company_name' => $data['company_name'],'name' => $info['name']],function($m) use ($info){

                $m->to($info['email'], $info['name'])->subject('Account Application');

            });
        }

        if($action == 'reject'){

            $company = new Company;
            $data = $company->where('company_id',Auth::user()->company_id)->first();

            $info = $user->where('id',$staff)->first();

            Mail::send('emails.application_rejection_mail',['company_name' => $data['company_name'],'name' => $info['name']],function($m) use ($info){

                $m->to($info['email'], $info['name'])->subject('Account Application');

            });
        }
    }
}
