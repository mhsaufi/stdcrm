<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class AdminControllerVendors extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){

    	return view('admin.vendors');
    }

    public function listAll(Request $request){

    	$length = $request->input('length'); // how many records per retrieve
    	$offset = $request->input('start'); // start retrieve from which row
    	$draw = $request->input('draw'); // for dataTables security reason
    	$order = $request->input('order'); // for dataTables sorting
    	$search = $request->input('search');
    	$search_value = $search['value'];

    	$sortBy = $order[0]['column'];
    	$sortDir = $order[0]['dir'];

    	$vendor = new Company;
    	$query = $vendor->skip($offset)->take($length);

    	// for search purpose --------------------------------------------

    	if($search_value <> ''){

    		// echo $search_value;

    		$query = $query->where('company_name','like', $search_value.'%')
    						->orWhere('company_name','like','%'.$search_value)
    						->orWhere('company_name','like','%'.$search_value.'%')
    						->orWhere('company_contact','like',$search_value.'%')
    						->orWhere('company_contact','like','%'.$search_value)
    						->orWhere('company_contact','like','%'.$search_value.'%')
    						->orWhere('company_email','like',$search_value.'%')
    						->orWhere('company_email','like','%'.$search_value)
    						->orWhere('company_email','like','%'.$search_value.'%')
    						->orWhere('company_ssm','like',$search_value.'%')
    						->orWhere('company_ssm','like','%'.$search_value)
    						->orWhere('company_ssm','like','%'.$search_value.'%')
    						->orWhere('company_address','like',$search_value.'%')
    						->orWhere('company_address','like','%'.$search_value)
    						->orWhere('company_address','like','%'.$search_value.'%')
    						->orWhere('created_at','like',$search_value.'%')
    						->orWhere('created_at','like','%'.$search_value)
    						->orWhere('created_at','like','%'.$search_value.'%');
    	}

    	// for sorting purpose -------------------------------------------

    	if($sortBy == '1'){

    		$query = $query->orderBy('company_contact',$sortDir);

    	}else if($sortBy == '2'){

    		$query = $query->orderBy('company_email',$sortDir);

    	}else if($sortBy == '3'){

    		$query = $query->orderBy('company_ssm',$sortDir);

    	}else if($sortBy == '4'){

    		$query = $query->orderBy('company_address',$sortDir);

    	}else if($sortBy == '5'){

    		$query = $query->orderBy('role_id',$sortDir);

    	}else if($sortBy == '7'){

    		$query = $query->orderBy('created_at',$sortDir);

    	}else{

    		$query = $query->orderBy('company_name',$sortDir);

    	}

    	$data = $query->get();

    	$total = $vendor->count();

    	$data_arr = array();

    	$i = 0;

    	foreach($data as $d){

    		$data_arr[$i] = [ 
    				'DT_RowId' => $d['company_id'],
    				'company_name' => $d['company_name'], 
    				'company_contact' => $d['company_contact'], 
    				'company_email' => $d['company_email'], 
    				'company_ssm' => $d['company_ssm'], 
    				'company_address' => $d['company_address'], 
    				'admin_name' => $d['user']['name'], 
    				'admin_email' => $d['user']['email'], 
    				'created_at' => $d['created_at']];

    		$i++;
    	}

    	$main_array = ['draw'=>$draw,'recordsTotal'=>$total,'recordsFiltered'=>$total,'data'=>$data_arr];

    	return json_encode($main_array);

    }
}
