<?php

namespace App\Http\Controllers;

use App\EventExternal;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminControllerEvents extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){

    	$event = new EventExternal;
    	$event_data = $event->get();
    	$event_count = $event->count();

    	return view('admin.events',compact('event_data','event_count'));
    }

    public function newevent(Request $request){

        $name = $request->input('title');
        $url = $request->input('eurl');
        $ds = $request->input('ds');
        $de = $request->input('de');
        $ts = $request->input('ts');
        $te = $request->input('te');
        $desc = $request->input('desc');
        $address = $request->input('address');

        $tstart = Carbon::createFromFormat('h:i A', $ts);
        $tend = Carbon::createFromFormat('h:i A', $te);

        $event = new EventExternal;

        $event->ee_title = $name;
        $event->description = $desc;
        $event->location = $address;
        $event->date_start = $ds;
        $event->date_end = $de;
        $event->time_start = $tstart->toDateTimeString(); 
        $event->time_end = $tend->toDateTimeString();
        $event->url = $url;
        $event->posted_by = Auth::user()->id;

        $event->save();

        return $event->id;
    }

    public function posterupload(Request $request){

        $eventid = $request->input('event');

        $path = $request->file('file')->store('public/admin/event/'.$eventid);

        $file_name = $request->file->getClientOriginalName();

        $path = ltrim($path,'public/');

        $event = new EventExternal;

        $update = $event->where('ee_id',$eventid)->update(['poster'=>$path]);
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

        $event = new EventExternal;
        $query = $event->skip($offset)->take($length);

        // for search purpose --------------------------------------------

        if($search_value <> ''){

            $query = $query->where('ee_title','like', $search_value.'%')
                            ->orWhere('ee_title','like','%'.$search_value)
                            ->orWhere('ee_title','like','%'.$search_value.'%')
                            ->orWhere('location','like',$search_value.'%')
                            ->orWhere('location','like','%'.$search_value)
                            ->orWhere('location','like','%'.$search_value.'%')
                            ->orWhere('description','like',$search_value.'%')
                            ->orWhere('description','like','%'.$search_value)
                            ->orWhere('description','like','%'.$search_value.'%')
                            ->orWhere('date_start','like',$search_value.'%')
                            ->orWhere('date_start','like','%'.$search_value)
                            ->orWhere('date_start','like','%'.$search_value.'%')
                            ->orWhere('date_end','like',$search_value.'%')
                            ->orWhere('date_end','like','%'.$search_value)
                            ->orWhere('date_end','like','%'.$search_value.'%')
                            ->orWhere('url','like',$search_value.'%')
                            ->orWhere('url','like','%'.$search_value)
                            ->orWhere('url','like','%'.$search_value.'%');
        }

        // for sorting purpose -------------------------------------------

        if($sortBy == '0'){

            $query = $query->orderBy('ee_title',$sortDir);

        }else if($sortBy == '1'){

            $query = $query->orderBy('date_start',$sortDir);

        }else if($sortBy == '2'){

            $query = $query->orderBy('date_end',$sortDir);

        }else if($sortBy == '3'){

            $query = $query->orderBy('time_start',$sortDir);

        }else if($sortBy == '4'){

            $query = $query->orderBy('location',$sortDir);

        }else if($sortBy == '5'){

            $query = $query->orderBy('created_at',$sortDir);

        }else{

            $query = $query->orderBy('created_at',$sortDir);
        }

        $data = $query->get();

        $total = $event->count();

        $data_arr = array();

        $i = 0;

        foreach($data as $d){

            $data_arr[$i] = [ 
                    'DT_RowId' => $d['ee_id'],
                    'ee_title' => $d['ee_title'], 
                    'date_start' => $d['date_start'], 
                    'date_end' => $d['date_end'], 
                    'time_start' => $d['time_start'], 
                    'location' => $d['location'], 
                    'url' => $d['url'], 
                    'created_at' => $d['created_at']];

            $i++;
        }

        $main_array = ['draw'=>$draw,'recordsTotal'=>$total,'recordsFiltered'=>$total,'data'=>$data_arr];

        return json_encode($main_array);

    }

    public function receive(Request $request){
        return "Terima KAsih";
    }
}
