<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department\ClubDetails;
use App\Models\Department\Clubs;
use App\Models\FacultyMember\FacultyMember;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Club_detailsController extends Controller
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

    public function club_details()
    {

        $club_details =DB::table('club_details')
            ->join('clubs','club_details.club_id', '=','clubs.id')
            ->join('faculty_members','club_details.faculty_member_id', '=','faculty_members.id')
            ->select('clubs.title','faculty_members.m_name','club_details.vision','club_details.activities'
                ,'club_details.description','club_details.status','club_details.id')->get();

        return view('admin.department.clubs_details.index',compact('club_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $clubs = Clubs::all();
//
//        $faculty = FacultyMember::all();
//
//
//        return view('admin.department.clubs_details.add',compact('clubs'));
    }

    public function club_details_creat()
    {
        $clubs = Clubs::all();

        $faculty = FacultyMember::all();


        return view('admin.department.clubs_details.add',compact(['clubs','faculty']));

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
            'vision' => 'required',
            'activities' => 'required',
            'faculty_member_id' => 'required',
            'description' => 'required',
            'club_id' => 'required',
            'status' => 'required',

        ],
            [
                'vision.required' => 'Please Input field ',
                'activities.required' => 'Please Input field',
                'faculty_member_id.required' => 'Please select ',
                'description.required' => 'Please Input description',
                'club_id.required' => 'Please select Club',
                'status.required' => 'Please Select Status',

            ]);

        ClubDetails::insert([
            'vision' => $request->vision,
            'activities' => $request->activities,
            'faculty_member_id' => $request->faculty_member_id,
            'description' => $request->description,
            'club_id' => $request->club_id,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        return redirect('/admin/club_details/add')->with('status', 'Club Details Creat successfully');


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

        $faculty = FacultyMember::all();

        $club_details = ClubDetails::find($id);
        $club_details['club']=Clubs::where('id',$club_details->club_id)->first();

        $club_details['faculty']=FacultyMember::where('id',$club_details->faculty_member_id)->first();

        return view('admin.department.clubs_details.edit',compact(['clubs','club_details','faculty']));
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
            'vision' => 'required',
            'activities' => 'required',
            'faculty_member_id' => 'required',
            'description' => 'required',
            'club_id' => 'required',
            'status' => 'required',

        ],
            [
                'vision.required' => 'Please Input field ',
                'activities.required' => 'Please Input field',
                'faculty_member_id.required' => 'Please select ',
                'description.required' => 'Please Input description',
                'club_id.required' => 'Please select Club',
                'status.required' => 'Please Select Status',

            ]);

        ClubDetails::find($id)->update([
            'vision' => $request->vision,
            'activities' => $request->activities,
            'faculty_member_id' => $request->faculty_member_id,
            'description' => $request->description,
            'club_id' => $request->club_id,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/club_details')->with('status','Club Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club_details = ClubDetails::findOrFail($id);
        $club_details->delete();

        return redirect('/admin/club_details')->with('success', 'Delete Successfully');
    }
}
