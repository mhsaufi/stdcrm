<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyContact;
use App\User;
use App\WEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
	public function index(){

		$company_contact = new CompanyContact;

		// ------------------------------------------------------------------------------------------------------------------

		$company_data = $company_contact->where('company_id', Auth::user()->company_id)->where('contact_type',1)->get();

		$i = 0;

		$company = new Company;
		$companies = array();

		foreach($company_data as $cd){

			$companies[$i] = $company->where('company_id',$cd['contact_id'])->first();

			$i++;
		}

		// ------------------------------------------------------------------------------------------------------------------

		$company_data = $company_contact->where('company_id', Auth::user()->company_id)->where('contact_type',2)->get();

		$j = 0;

		$user = new User;
		$users = array();

		$event = new WEvent;

		foreach($company_data as $cd){

			$users[$j] = $user->where('id',$cd['contact_id'])->first();
			$current = $event->where('company_id', Auth::user()->id)->where('wes_id','1')->count();

			if($current <> 0){
				$users[$j]['status'] = '1';
			}else{
				$users[$j]['status'] = '2';
			}

			$j++;
		}

		return view('internal.contact',compact('users','companies'));
	}

    public function addContact(Request $request){

    	$contact_id = $request->input('contact_id');
    	$contact_type = $request->input('contact_type');

    	if($contact_type == 'company'){

    		$type_id = 1;

    	}else{

    		$type_id = 2;
    	}

    	$contact = new CompanyContact;

    	$contact->company_id = Auth::user()->company_id;
    	$contact->contact_id = $contact_id;
    	$contact->contact_type = $type_id;

    	$contact->save();

    	return "success";
    }

    public function infoUser(Request $request){

    	$id = $request->input('id');

    	$user = new User;

    	$data = $user->where('id',$id)->first();

    	return json_encode($data);
    }
}
