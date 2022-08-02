<?php

namespace App\Http\Controllers\CRHP;

use App\Http\Controllers\Controller;
use App\Models\CRHP\Crhp;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CrhpController extends Controller
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

    public function crhp()
    {
        $crhp = Crhp::all();

        return view('admin.crhp.index',compact('crhp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crhp.add');
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
            'about' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'responsibilities' => 'required',
            'status' => 'required',

        ],
            [
                'about.required' => 'Please Input field',
                'vision.required' => 'Please Select field',
                'mission.required' => 'Please Select field',
                'responsibilities.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);

//        dd($request);


        Crhp::insert([
            'about' => $request->about,
            'vision' => $request->vision,
            'mission' => $request->mission,
            'responsibilities' => $request->responsibilities,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/crhp/add')->with('status', 'CRHP Creat successfully');


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
        $crhp = Crhp::find($id);

        return view('admin.crhp.edit',compact('crhp'));
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
            'about' => 'required',
            'vision' => 'required',
            'mission' => 'required',
            'responsibilities' => 'required',
            'status' => 'required',

        ],
            [
                'about.required' => 'Please Input field',
                'vision.required' => 'Please Select field',
                'mission.required' => 'Please Select field',
                'responsibilities.required' => 'Please Input field ',
                'status.required' => 'Please Select Status',

            ]);

        Crhp::find($id)->update([
            'about' => $request->about,
            'vision' => $request->vision,
            'mission' => $request->mission,
            'responsibilities' => $request->responsibilities,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/crhp')->with('status','CRHP updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iqac = Crhp::findOrFail($id);
        $iqac->delete();

        return redirect('/admin/crhp')->with('success', 'Delete Successfully');
    }
}
