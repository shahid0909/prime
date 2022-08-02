<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\StartSession;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function startsession(){
      $startsession = StartSession::all();
//      dd($startsession);
      return view('settings.start_session',['sartsessions'=>$startsession]);
    }

    public function creat(){
        return view('settings.add_session');
    }

    public function store(Request $request)
    {

//        dd($request);

        $request->validate([
            'startsession' => 'required',
            'status' => 'required',

        ],
            [
                'startsession.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);


        StartSession::insert([
            'startsession' => $request->startsession,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('startsession/add')->with('status', 'Session Creat successfully');

    }

    public function startsessiondelete($id){
        $session=StartSession::find($id);
        if($session->delete()){
            Session::flash('message','Delete has been successfull');
            return redirect()->back();
        }else{
            Session::flash('error','Something went wrong');
            return redirect()->back();
        }
    }
}
