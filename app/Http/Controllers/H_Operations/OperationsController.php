<?php

namespace App\Http\Controllers\H_Operations;

use App\Http\Controllers\Controller;
use App\Models\H_departments;
use App\Models\H_operations;
use App\Models\H_patients;
use App\Models\H_rays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// Use Carbon\Carbon;
class OperationsController extends Controller
{
    
    public function index($id)
    {
        // $examid=H_operations::
        $data['patient']=H_patients::findorfail($id);
        // return $data['patient'];
        $data['departments']=H_departments::get();
        $data['rays']=H_rays::where('type',1)->get();
        $data['Analytics']=H_rays::where('type',2)->get();
        return view('pages.backend.h_operations.create',$data);
    }

    public function create(Request $request)
    {
    //  return $request;
        $examid=H_operations::where('type',1)->where('doctor_id',$request->doctor_id)->where('created_at','LIKE',date('Y-m-d').'%')->get()->count()+1;
        H_operations::create([
          'type'=>$request->type,
          'cost'=>$request->cost,
          'patien_id'=>$request->patienid,
          'doctor_id'=>$request->doctor_id,
          'dept_id'=>$request->depart_id,
          'room_id'=>DB::table('h_rooms')->where('room_number', $request->room_no)->first()->id,
          'description'=>$request->description,
          'reversation_num'=>$examid,
          'emp_id'=>Auth::user()->id,
        ]);
        return redirect('/reservations')->with('msg','Success Add');
    }


    
    public function store(Request $request)
    {
        //
    }

    
    public function show()
    {
        $Operations=H_operations::all();
        // return $Operations;
        return view('pages.backend.h_operations.reservation',compact('Operations'));
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
