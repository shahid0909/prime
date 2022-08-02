<?php

namespace App\Http\Controllers\Massage;

use App\Http\Controllers\Controller;
use App\Models\Employ\Employ;
use App\Models\Massage\MassageChairman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MassageChairmanController extends Controller
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
    public function massage_Chairman()
    {

        $chairman_massage =DB::table('massage_chairmen')
            ->join('employs','massage_chairmen.e_id', '=','employs.id')
            ->select('employs.e_name','massage_chairmen.short_massage','massage_chairmen.long_massage',
                'massage_chairmen.status', 'massage_chairmen.id')->get();

        return view('admin.massage.chairman_massage.index',compact('chairman_massage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employ = Employ::where('e_designation','6')->get();

        return view('admin.massage.chairman_massage.add',compact('employ'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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


        MassageChairman::insert([
            'e_id' => $request->e_id,
            'short_massage' => $request->short_massage,
            'long_massage' => $request->long_massage,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/massage_Chairman/add')->with('status','Chairman Massage Creat successfully');

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

        $massage_vc = MassageChairman::find($id);
        $massage_vc['e_name'] = Employ::where('id',$massage_vc->e_id)->first();

        return view('admin.massage.chairman_massage.edit',compact(['massage_vc','employ']));
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

        $requirement = MassageChairman::find($id);

        $requirement->e_id = $request->e_id;
        $requirement->short_massage = $request->short_massage;
        $requirement->long_massage = $request->long_massage;
        $requirement->status = $request->status;
        $requirement->save();

        return redirect('/admin/massage_Chairman')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission_requirement = MassageChairman::findOrFail($id);
        $admission_requirement->delete();

        return redirect('/admin/massage_Chairman')->with('success', 'Delete Successfully');
    }
}
