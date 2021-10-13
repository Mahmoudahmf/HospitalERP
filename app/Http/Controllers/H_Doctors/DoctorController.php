<?php

namespace App\Http\Controllers\H_Doctors;

use App\Http\Controllers\Controller;
use App\Models\H_departments;
use App\Models\H_doctors;
use App\Models\H_rooms;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
   
    public function index()
    {
        $departments=H_departments::get();
        $rooms=H_rooms::get();
        return view('pages.backend.h_doctors.index',compact('departments','rooms'));
    }

    
    public function create(Request $request)
    {

       $validate=$request->validate([
        'name' => 'required',
        'username' => 'required|starts_with:dr_|unique:h_doctors,username,',
        'password'=>'required|string|min:6|max:10',
        'title'=>'required|string',
        'dept_id'=>'required',
        'room_id'=>'required',

       ]);
        H_doctors::create([
          'username'=>$request->username,
          'password'=>$request->password,
          'name'=>$request->name,
          'title'=>$request->title,
          'role'=>'2',
          'phone'=>$request->phone,
          'salary'=>$request->salary,
          'status'=>1,
          'dept_id'=>$request->dept_id,
          'room_id'=>$request->room_id,
        ]);
        return redirect()->route('showedoctors');
    }

  
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
