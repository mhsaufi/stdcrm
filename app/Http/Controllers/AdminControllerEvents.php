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
}
