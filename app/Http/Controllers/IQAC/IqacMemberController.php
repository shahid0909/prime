<?php

namespace App\Http\Controllers\IQAC;

use App\Http\Controllers\Controller;
use App\Models\Employ\Employ;
use App\Models\FacultyMember\FacultyMember;
use App\Models\IQAC\IqacMember;
use App\Models\Settings\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IqacMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employ_member = IqacMember::where([
            ['type', '=',"1"]
        ])->with('employ')->get();

        $faculty_member = IqacMember::where([
            ['type', '=',"2"]
        ])->with('faculty_member')->get();


//        dd($faculty_member);


        return view('admin.iqac_member.index',compact(['employ_member','faculty_member']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.iqac_member.search');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search_member(Request $request)
    {
        $type = $request->type;

        if ($request->type == 1)
        {
            $member = Employ::where('e_name', 'LIKE', "%$request->member_name%")->orderBy('e_name')->get();
        }
        elseif ($request->type == 2)
        {
            $member = FacultyMember::where('m_name', 'LIKE', "%$request->member_name%")->orderBy('m_name')->get();
        }

        if ($member->count() != 0 )
        {
            return view('admin.iqac_member.search',compact(['type','member']));
        }else{
            dd('Error');
        }

    }

    public function create_iqac($id,$tid)
    {
        $type = $tid;

        if ($type == 1)
        {
            $member = Employ::where('id',$id)->first();
        }
        else
        {
            $member = FacultyMember::where('id',$id)->first();
        }

        $department = Department::all();

        return view('admin.iqac_member.add',compact(['member','type','department']));

    }


    public function store(Request $request)
    {
//        dd($request);

        $request->validate([
            'ext' => 'required',
            'status' => 'required',
            'parity' => 'required',
        ]);

        $member = new IqacMember();
        $member->type = $request->type;
        if ($request->type == 1)
        {
            $member->employ_id = $request->member_id;
        }
        else
        {
            $member->faculty_member_id = $request->member_id;
        }
        $member->administrator_type = $request->administrator_type;
        $member->iqac_designation = $request->iqac_designation;
        $member->dept_id = $request->dept_id;
        $member->ext = $request->ext;
        $member->status = $request->status;
        $member->parity = $request->parity;
        if ($member->save())
        {
            return redirect('/admin/iqac_member/add')->with('status','IQAC Member Insert Successfully');
        } else {
            return redirect()->back();
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        IqacMember::find($id)->delete();

        return redirect('/admin/iqac_member')->with('status', 'delete successfully');
    }
}
