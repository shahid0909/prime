<?php

namespace App\Http\Controllers\IQAC;

use App\Http\Controllers\Controller;
use App\Models\IQAC\IqacWorkshop;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class IqacWorkshopController extends Controller
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
    public function index()
    {
        //
    }

    public function iqac_workshop()
    {

        $iqac_workshop =DB::table('iqac_workshops')
            ->join('departments','iqac_workshops.dept_id', '=','departments.id')
            ->select('departments.name','iqac_workshops.w_title','iqac_workshops.w_details','iqac_workshops.status','iqac_workshops.id')->get();

//        dd($iqac_workshop);

        return view('admin.iqac_workshop.index',compact('iqac_workshop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();

        return view('admin.iqac_workshop.add', compact('department'));
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
            'w_title' => 'required',
            'w_details' => 'required',
            'dept_id' => 'required',
            'status' => 'required',

        ],
            [
                'w_title.required' => 'Please Input field',
                'w_details.required' => 'Please Select field',
                'dept_id.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);

        IqacWorkshop::insert([
            'w_title' => $request->w_title,
            'w_details' => $request->w_details,
            'dept_id' => $request->dept_id,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/iqac_workshop/add')->with('status','IQAC Workshop Add successfully');
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
        $department = Department::all();


        $iqac_workshop = IqacWorkshop::find($id);
        $iqac_workshop['departments']=Department::where('id',$iqac_workshop->dept_id)->first();

        return view('admin.iqac_workshop.edit',compact(['department','iqac_workshop']));
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
            'w_title' => 'required',
            'w_details' => 'required',
            'dept_id' => 'required',
            'status' => 'required',

        ],
            [
                'w_title.required' => 'Please Input field',
                'w_details.required' => 'Please Select field',
                'dept_id.required' => 'Please Input field',
                'status.required' => 'Please Select Status',
            ]);


        $iqac_workshop = IqacWorkshop::find($id);

        $iqac_workshop->w_title = $request->w_title;
        $iqac_workshop->w_details = $request->w_details;
        $iqac_workshop->dept_id = $request->dept_id;
        $iqac_workshop->status = $request->status;
        $iqac_workshop->updated_at = Carbon::now();
        $iqac_workshop->save();


        return redirect('/admin/iqac_workshop')->with('status','IQAC Workshop updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iqac_workshop = IqacWorkshop::findOrFail($id);
        $iqac_workshop->delete();

        return redirect('/admin/iqac_workshop')->with('success', 'Delete Successfully');
    }
}
