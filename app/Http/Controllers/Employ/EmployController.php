<?php

namespace App\Http\Controllers\Employ;

use App\Http\Controllers\Controller;
use App\Models\Administrator\Administrator;
use App\Models\Employ\Employ;
use App\Models\FacultyMember\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class EmployController extends Controller
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

    public function employ()
    {
        $employ =DB::table('employs')
            ->join('administrators','employs.administrators_id', '=','administrators.id')
            ->join('designations','employs.e_designation', '=','designations.id')
            ->select('administrators.o_name','designations.designation','employs.image',
                'employs.status','employs.e_name','employs.id')->get();

        return view('admin.employ.index',compact('employ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designation = Designation::all();

        $administrator = Administrator::all();

        return view('admin.employ.add',compact(['designation','administrator']));
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
                'e_name' => 'required',
                'e_designation' => 'required',
                'email' => 'required',
                'about' => 'required',
                // 'administrators_id' => 'required',
                'parity' => 'required',
                'status' => 'required',
            ],
            [
                'e_name.required' => 'Please Input ',
                'e_designation.required' => 'Please Input',
                'email.required' => 'Please Input',
                'about.required' => 'Please Input',
                // 'administrators_id.required' => 'Please Input',
                'parity.required' => 'Please Input',
                'status.required' => 'Please Input',
            ]);


//        dd($request);

        if($request->hasFile('image')) {
            $image       = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(135, 165);
            $image_resize->save(public_path('image/employ/'.$name));
            $last_img ='image/employ/'.$name;

        }



        Employ::insert([
            'e_name' => $request->e_name,
            'image' => $last_img,
            'e_designation' => $request->e_designation,
            'email' => json_encode($request->email),
            'number' => json_encode($request->number),
            'about' => $request->about,
            'administrators_id' => $request->administrators_id,
            'parity' => $request->parity,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);


        return redirect('/admin/employ/add')->with('status', 'Employ Creat successfully');
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
        $designation = Designation::all();

        $administrator = Administrator::all();

        $employ = Employ::find($id);
        $employ['desig']=Designation::where('id',$employ->e_designation)->first();
        $employ['admin']=Administrator::where('id',$employ->administrators_id)->first();
        return view('admin.employ.edit',compact(['employ','designation','administrator']));
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
            'e_name' => 'required',
            'e_designation' => 'required',
            'email' => 'required',
            'about' => 'required',
            'parity' => 'required',
            // 'administrators_id' => 'required',
            'status' => 'required',
        ],
            [
                'e_name.required' => 'Please Input ',
                'e_designation.required' => 'Please Input',
                'email.required' => 'Please Input',
                'about.required' => 'Please Input',
                'parity.required' => 'Please Input',
                // 'administrators_id.required' => 'Please Input',
                'status.required' => 'Please Input',

            ]
        );


        $employ = Employ::find($id);


        if ($employ->email)
        {
            $previousEmail = json_decode($employ->email, true);

        }
        $requestEmail = $request->email;

        foreach ($requestEmail as $itememail){


            if($itememail !=null){
                array_push($previousEmail,$itememail);
            }

        }


        if ( $employ->number)
        {
            $previousphone = json_decode($employ->number, true);
        }
        $requestphoner = $request->number;



        foreach ($requestphoner as $item)
        {
            array_push($previousphone,$item);
        }

        $old_image = $employ->image;

            if($request->hasFile('image')) {

                if(!empty($old_image)) {
                    unlink($old_image);
                }

                $image       = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(135, 165);
                $image_resize->save(public_path('image/employ/'.$name));
                $last_img ='image/employ/'.$name;

            }

        if(empty($request->image)){
            $last_img =$employ->image;
        }


        $employ->e_name = $request->e_name;
        $employ->e_designation = $request->e_designation;
        $employ->image = $last_img;
        $employ->email = json_encode($previousEmail);
        $employ->number = json_encode($previousphone);
        $employ->about = $request->about;
        $employ->administrators_id = $request->administrators_id;
        $employ->parity = $request->parity;
        $employ->status = $request->status;
        $employ->save();

        return redirect('/admin/employ')->with('status', 'Employ Details Update successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Employ::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Employ::find($id)->delete();

        return redirect('/admin/employ')->with('status', 'Employ delete successfully');
    }


    public function destroy_email($id,$did)
    {


        $faculty = Employ::where('id', $did)->first();
        $oldemail = json_decode($faculty->email, true);
        $previesid =  $oldemail[$id];
        unset($oldemail[$id]);

        $ooldemail = json_encode($oldemail);
        $faculty->update(['email' => $ooldemail]);
        return back()->with('success','Email removed successfully.');
    }

    public function destroy_phone($id,$did)
    {

        $facultyy = Employ::find($did);
        $oldphone = json_decode($facultyy->number, true);
        unset($oldphone[$id]);
        $facultyy->number =json_encode($oldphone);
        if($facultyy->save()){
            return back()->with('success','Phone removed successfully.');
        }


    }


}
