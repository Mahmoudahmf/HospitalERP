<?php

namespace App\Http\Controllers\H_Patients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\H_patients;
class PatientsController extends Controller
{
   
    public function index()
    {
        $patients=H_patients::get();
        return view('pages.backend.h_patients.index',compact('patients'));
    }

    public function create(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'name' => 'required',
            'nationality_id'=>'required|string|min:14|max:14',
            'phone'=>'required|string',
         ]);
        H_patients::create([
            'name'=>$request->name,
            'nationality_id'=>$request->nationality_id,
            'phone'=>$request->phone,
            'title'=>$request->title,
            'address'=>$request->address,
            'bloodtype'=>$request->bloodtype,
            'description'=>$request->description,
        ]);
        return redirect()->route('patients');
    }

    public function edit($id)
    {
        $patient=H_patients::findorfail($id);
        return view('pages.backend.h_patients.edit',compact('patient'));
    }

    public function store(Request $request)
    {
        // return $request;
        H_patients::findorfail($request->id)->update([
            'name'=>$request->name,
            'nationality_id'=>$request->nationality_id,
            'phone'=>$request->phone,
            'title'=>$request->title,
            'address'=>$request->address,
            'bloodtype'=>$request->bloodtype,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        return redirect()->route('patients');
    }

    
    public function destroy($id)
    {
        H_patients::findorfail($id)->delete();
        return redirect()->route('patients');
    }
}
