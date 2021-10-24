<?php

namespace App\Http\Controllers\H_Departments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\H_Departments;
use Illuminate\Support\Facades\DB;

class DepartmentsController extends Controller
{
   
    public function index()
    {
        $departments=H_Departments::all();  
        return view('pages.backend.admins.h_departments.index',compact('departments'));
    }

   
    public function create(Request $request)
    {
        $validated = $request->validate([
            'department' => "required|unique:h_departments,name,",
         ]);
            H_Departments::Create([
                'name'=>$request->department
            ]);
            return redirect()->back();
    }

    public function edit($id)
    {
        $depart=H_Departments::findorfail($id);
        return view('pages.backend.admins.h_departments.edit',compact('depart'));
    }


    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'department' => "required|unique:h_departments,name,".$request->departid,
         ]);
    
        H_Departments::findorfail($request->departid)->update([
                'name'=>$request->department,
        ]);
            return redirect()->route('showdepartments');
    }


    public function destroy($id)
    {
      H_Departments::findorfail($id)->delete();
      return redirect()->route('showdepartments');
    }

    

}
