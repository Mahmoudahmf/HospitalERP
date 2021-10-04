<?php

namespace App\Http\Controllers\H_Departments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\H_Departments;
class DepartmentsController extends Controller
{
   
    public function index()
    {
        $departments=H_Departments::all();  
       // return $departments;
        return view('pages.backend.h_departments.index',compact('departments'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $depart=new H_Departments();
        $depart->name=$request->department;
        $depart->save();
        return redirect()->back();
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $depart=H_Departments::findorfail($id);
        return view('pages.backend.h_departments.edit',compact('depart'));
    }

    
    public function update(Request $request)
    {
      $depart=H_Departments::findorfail($request->departid);
      $depart->name=$request->departn;
      $depart->save();
      return redirect()->route('showdepartments');
    }

    public function destroy($id)
    {
    //    return $id;
      H_Departments::findorfail($id)->delete();
      return redirect()->route('showdepartments');

    }

}
