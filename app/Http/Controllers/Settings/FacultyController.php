<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Faculty;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function faculty(){
        $faculty = Faculty::all();

        return view('admin.settings.faculty',compact('faculty'));
    }

    public function add_faculty(){
        return view('admin.settings.add_faculty');
    }

    public function store_faculty(Request $request)
    {
        $request->validate([
            'faculty_name' => 'required',
        ]);

        Faculty::insert([
            'name' => $request->faculty_name,
            'establish_year' => $request->establish_year,
            'created_at' => Carbon::now()
        ]);

        return redirect('/admin/add_faculty')->with('status', 'Faculty Creat successfully');
    }

    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();

        return redirect('/admin/faculty')->with('success', 'Delete Successfully');
    }

    public function edit($id)
    {
        $faculty = Faculty::find($id);
        return view('admin.settings.edit_faculty',compact('faculty'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'faculty_name' => 'required',

        ]);

        Faculty::find($id)->update([
            'name' => $request->faculty_name,
            'establish_year' => $request->establish_year,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/admin/add_faculty')->with('status','Faculty updated successfully');
    }

}
