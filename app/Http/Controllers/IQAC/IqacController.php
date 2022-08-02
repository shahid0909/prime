<?php

namespace App\Http\Controllers\IQAC;

use App\Http\Controllers\Controller;
use App\Models\IQAC\Iqac;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IqacController extends Controller
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
    public function iqac()
    {
        $iqac = Iqac::all();

        return view('admin.iqac.index',compact('iqac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.iqac.add');
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


        Iqac::insert([
            'about' => $request->about,
            'vision' => $request->vision,
            'mission' => $request->mission,
            'responsibilities' => $request->responsibilities,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/iqac/add')->with('status', 'IQAC Creat successfully');


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
        $iqac = Iqac::find($id);

        return view('admin.iqac.edit',compact('iqac'));
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

//        dd($request);

        $iqac = Iqac::find($id);

//        Iqac::find($id)->update([
//            'about' => $request->about,
//            'vision' => $request->vision,
//            'mission' => $request->mission,
//            'responsibilities' => $request->responsibilities,
//            'status' => $request->status,
//            'updated_at' => Carbon::now()
//        ]);

        $iqac->about = $request->about;
        $iqac->vision = $request->vision;
        $iqac->mission = $request->mission;
        $iqac->responsibilities = $request->responsibilities;
        $iqac->status = $request->status;
        $iqac->updated_at = Carbon::now();
        $iqac->save();


        return redirect('/admin/iqac')->with('status','IQAC updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iqac = Iqac::findOrFail($id);
        $iqac->delete();

        return redirect('/admin/iqac')->with('success', 'Delete Successfully');
    }
}
