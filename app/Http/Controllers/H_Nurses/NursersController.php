<?php

namespace App\Http\Controllers\H_Nurses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\H_Departments;
use App\Models\H_nurse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\NursesRequest;

class NursersController extends Controller
{

    public function index()
    {
        $nurses = H_nurse::get();
       // return $nurses;
        $departments = H_Departments::all();
        return view('pages.backend.admins.h_nurses.index', compact('departments', 'nurses'));
    }


    public function create(Request $request)
    {
    // return $request;
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|starts_with:nr_|unique:h_nurses,username,',
            'password'=>'required|string|min:6|max:10',
            'title'=>'required|string',
            'department'=>'required',
         ]);
        H_nurse::create([
            'username' => $request->username,
            'password'=> Hash::make($request->password),
            'name'=>$request->name,
            'role' => 3,
            'phone' => $request->phone,
            'title' =>$request->title,
            'salary' => $request->salary,
            'dept_id' => $request->department,
            'from_date'=>$request->from_date,
            'to_date'=>$request->to_date,
        ]);
        return redirect()->back();



    }
    public function edit($id)
    {
        $data['nuress'] = H_nurse::findorfail($id);
        $data['departments'] = H_Departments::all();
        return view('pages.backend.admins.h_nurses.edit', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|starts_with:nr_|unique:h_nurses,username,'.$request->nurse_id,
            'password'=>'required|string|min:6|max:10',
            'title'=>'required|string',
            'department'=>'required',
         ]);
        H_nurse::findorfail($request->nurse_id)->update([
            'username' => $request->username,
            'password'=> $request->password,
            'name'=>$request->name,
            'role' => 3,
            'phone' => $request->phone,
            'title' =>$request->title,
            'salary' => $request->salary,
            'dept_id' => $request->department,
            'status'=>$request->status_id,
            'from_date'=>$request->from_date,
            'to_date'=>$request->to_date,
        ]);
        return redirect()->route('showNurses');
    }
   
    public function destroy($id)
    {
        H_nurse::findorfail($id)->delete();
        return redirect()->back();
    }


}
