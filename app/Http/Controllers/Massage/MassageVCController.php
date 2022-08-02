<?php

namespace App\Http\Controllers\Massage;

use App\Http\Controllers\Controller;
use App\Models\Employ\Employ;
use App\Models\Massage\MassageVC;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MassageVCController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function massage_vc()
    {

        $vc_massage =DB::table('massage_v_c_s')
            ->join('employs','massage_v_c_s.e_id', '=','employs.id')
            ->select('employs.e_name','massage_v_c_s.short_massage','massage_v_c_s.long_massage',
                'massage_v_c_s.status', 'massage_v_c_s.id')->get();


       return view('admin.massage.vc_massage.index',compact('vc_massage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employ = Employ::where('e_designation','8')->get();

//        dd($employ);

        return view('admin.massage.vc_massage.add',compact('employ'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $request->validate([
            'e_id' => 'required',
            'short_massage' => 'required',
            'long_massage' => 'required',
            'status' => 'required',

        ],
            [
                'e_id.required' => 'Please Input field',
                'short_massage.required' => 'Please Select field',
                'long_massage.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);
//        dd($request);

//        $requirement =  MassageVC::find($id);
//
//        $requirement->schedule = $request->schedule;
//        $requirement->type = $request->type;
//        $requirement->a_l_date = $request->a_l_date;
//        $requirement->a_t_date = $request->a_t_date;
//        $requirement->a_requirement = $request->a_requirement;
//        $requirement->how_to_apply = $request->how_to_apply;
//        $requirement->admission_fee = $request->admission_fee;
//        $requirement->status = $request->status;
//        $requirement->save();


        MassageVC::insert([
            'e_id' => $request->e_id,
            'short_massage' => $request->short_massage,
            'long_massage' => $request->long_massage,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/massage_vc/add')->with('status','Vc Massage Creat successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employ = Employ::where('e_designation','8')->get();

        $massage_vc = MassageVC::find($id);
        $massage_vc['e_name'] = Employ::where('id',$massage_vc->e_id)->first();

        return view('admin.massage.vc_massage.edit',compact(['massage_vc','employ']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'e_id' => 'required',
            'short_massage' => 'required',
            'long_massage' => 'required',
            'status' => 'required',

        ],
            [
                'e_id.required' => 'Please Input field',
                'short_massage.required' => 'Please Select field',
                'long_massage.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);

        $requirement = MassageVC::find($id);

        $requirement->e_id = $request->e_id;
        $requirement->short_massage = $request->short_massage;
        $requirement->long_massage = $request->long_massage;
        $requirement->status = $request->status;
        $requirement->save();

        return redirect('/admin/massage_vc')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission_requirement = MassageVC::findOrFail($id);
        $admission_requirement->delete();

        return redirect('/admin/massage_vc')->with('success', 'Delete Successfully');
    }
}
