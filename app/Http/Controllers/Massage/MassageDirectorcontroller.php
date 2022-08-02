<?php

namespace App\Http\Controllers\Massage;

use App\Http\Controllers\Controller;
use App\Models\Employ\Employ;
use App\Models\Massage\MassageDirector;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MassageDirectorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function massage_director()
    {
        $director_massage =DB::table('massage_directors')
            ->join('employs','massage_directors.e_id', '=','employs.id')
            ->select('employs.e_name','massage_directors.short_massage','massage_directors.long_massage',
                'massage_directors.status','massage_directors.s_facilities', 'massage_directors.id')->get();

        return view('admin.massage.director_massage.index',compact('director_massage'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employ = Employ::where('e_designation','13')->get();

        return view("admin.massage.director_massage.add",compact('employ'));
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
            's_facilities' => 'required',
            'status' => 'required',

        ],
            [
                'e_id.required' => 'Please Input field',
                'short_massage.required' => 'Please Select field',
                'long_massage.required' => 'Please Input field',
                's_facilities.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);


        MassageDirector::insert([
            'e_id' => $request->e_id,
            'short_massage' => $request->short_massage,
            'long_massage' => $request->long_massage,
            's_facilities' => $request->s_facilities,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/massage_director/add')->with('status','Director Massage Creat successfully');

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
        $employ = Employ::where('e_designation','13')->get();

        $massage_vc = MassageDirector::find($id);
        $massage_vc['e_name'] = Employ::where('id',$massage_vc->e_id)->first();

        return view('admin.massage.director_massage.edit',compact(['massage_vc','employ']));
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
            's_facilities' => 'required',
            'status' => 'required',

        ],
            [
                'e_id.required' => 'Please Input field',
                'short_massage.required' => 'Please Select field',
                'long_massage.required' => 'Please Input field',
                's_facilities.required' => 'Please Input field',
                'status.required' => 'Please Select Status',

            ]);

        $requirement = MassageDirector::find($id);

        $requirement->e_id = $request->e_id;
        $requirement->short_massage = $request->short_massage;
        $requirement->long_massage = $request->long_massage;
        $requirement->s_facilities = $request->s_facilities;
        $requirement->status = $request->status;
        $requirement->save();

        return redirect('/admin/massage_director')->with('status','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admission_requirement = MassageDirector::findOrFail($id);
        $admission_requirement->delete();

        return redirect('/admin/massage_director')->with('success', 'Delete Successfully');
    }
}
