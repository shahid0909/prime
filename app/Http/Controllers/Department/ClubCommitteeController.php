<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department\Club_Committee;
use App\Models\Department\Clubs;
use App\Models\FacultyMember\FacultyMember;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ClubCommitteeController extends Controller
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

    public function club_committee()
    {
//        $club_committee = Club_Committee::all();

        $club_committee =DB::table('club__committees')
            ->join('clubs','club__committees.club_id', '=','clubs.id')
            ->select('clubs.title','club__committees.designation','club__committees.name',
                'club__committees.batch','club__committees.status','club__committees.id')->get();

        return view('admin.department.club_committee.index',compact('club_committee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $club = Clubs::all();

        return view('admin.department.club_committee.add',compact('club'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Club_Committee::insert([
            'designation' => $request->designation,
            'name' => $request->name,
            'batch' => $request->batch,
            'club_id' => $request->club_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        return redirect('/admin/club_committee/add')->with('status', 'Club Committee Creat successfully');
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
        $clubs = Clubs::all();

        $club_committee = Club_Committee::find($id);
        $club_committee['club']=Clubs::where('id',$club_committee->club_id)->first();

        return view('admin.department.club_committee.edit',compact(['clubs','club_committee']));
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
        Club_Committee::find($id)->update([
            'designation' => $request->designation,
            'name' => $request->name,
            'batch' => $request->batch,
            'club_id' => $request->club_id,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/club_committee')->with('status','Club Committee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club_committee = Club_Committee::findOrFail($id);
        $club_committee->delete();

        return redirect('/admin/club_committee')->with('success', 'Delete Successfully');
    }
}
