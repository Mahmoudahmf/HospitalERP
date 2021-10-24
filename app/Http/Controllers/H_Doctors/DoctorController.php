<?php

namespace App\Http\Controllers\H_Doctors;

use App\Http\Controllers\Controller;
use App\Models\H_departments;
use App\Models\H_doctors;
use App\Models\H_rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
   
    public function index()
    {
        $departments=H_departments::get();
        $h_doctors=H_doctors::get();
        $h_rooms=H_rooms::get();
        // return $h_doctors;
        return view('pages.backend.h_doctors.index',compact('departments','h_doctors','h_rooms'));
    }

    
    public function create(Request $request)
    {

    //  return $request;
        $validate=$request->validate([
        'name' => 'required',
        'username' => 'required|starts_with:dr_|unique:h_doctors,username,',
        'password'=>'required|string|min:6|max:10',
        'title'=>'required|string',
        'dept_id'=>'required',
        'room_id'=>'required',
        'from_date'=>'required|date_format:h:i',
        'cost'=>'required',

       ]);
        H_doctors::create([
          'username'=>$request->username,
          'password'=>Hash::make($request->password),
          'name'=>$request->name,
          'title'=>$request->title,
          'role'=>'2',
          'phone'=>$request->phone,
          'salary'=>$request->salary,
          'status'=>1,
          'dept_id'=>$request->dept_id,
          'room_id'=>$request->room_id,
         'from_date'=>$request->from_date,
          'to_date'=>$request->to_date,
          'cost'=>$request->cost,
        ]);
        return redirect()->route('showedoctors');
    }

    public function edit($id)
    {
        $hdoctors=H_doctors::findorfail($id);
        $hdepartments=H_departments::get();
        $hrooms=H_rooms::get();
        return view('pages.backend.h_doctors.edit',compact('hdoctors','hdepartments','hrooms'));
    }
  
    public function store(Request $request)
    {
        //return $request;
       H_doctors::findorfail($request->doctorid)->update([
           'username'=>$request->username,
           'name'=>$request->name,
           'title'=>$request->title,
           'role'=>'2',
           'phone'=>$request->phone,
           'salary'=>$request->salary,
           'dept_id'=>$request->dept_id,
           'room_id'=>$request->room_id,
           'from_date'=>$request->from_date,
           'to_date'=>$request->to_date,
           'status'=>$request->status_id,
           'cost'=>$request->cost,

       ]);
       return redirect()->route('showedoctors');
    }

  
    public function show($id)
    {
        //
    }

   
    

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        H_doctors::findorfail($id)->delete();
        return redirect()->route('showedoctors');
    }

    //get doctors by depatment id
    public function get_doctors($id)
    {
        $doctor_list=H_doctors::where('dept_id',$id)->where('status','1')->pluck('name','id');
        return $doctor_list;
    }

//get doctorprice 
public function getdoctorprice($id)
{
    $doctor_price=H_doctors::where('id',$id)->pluck('cost');
    return $doctor_price;
}

    //get doctorroomnumber
    public function getroom($id)
    {
        $roomid=H_doctors::where('id',$id)->pluck('room_id');
        $room_number=H_rooms::find($roomid)->pluck('room_number');
        return $room_number;
    }
}
