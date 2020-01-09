<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doctors;
class doctorsController extends Controller
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
          $var=doctors::orderBy('id' , 'DESC')->paginate(3);
          return view('doctors.doctors',compact('var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('doctors.add_doctor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



if($request->file('img')== ''){
 $fileNameToStore='';
}else{
  $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('img')->storeAs('public/', $fileNameToStore);
}


        $add_doctor = new doctors;
        $add_doctor->f_name=$request->input('fname');
        $add_doctor->l_name=$request->input('lname');
        $add_doctor->doctor_id=$request->input('id');
        $add_doctor->email=$request->input('email');
        $add_doctor->doctor_birth=$request->input('date');
        $add_doctor->Specialization=$request->input('fname');
        $add_doctor->gander=$request->input('gender');
        $add_doctor->Specialization=$request->input('specialization');
        $add_doctor->address=$request->input('address');
        $add_doctor->phone=$request->input('phone');
        $add_doctor->img=$fileNameToStore;
        $add_doctor->save();

        return redirect('/doctors')->with('success', 'Successfully Added'); 


        //return $request->input('specialization');
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
        return view('doctors.edit_doctors');
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
        //
    }
}
