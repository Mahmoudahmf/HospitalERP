<?php

namespace App\Http\Controllers\H_Rays;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\H_rays;
class RaysController extends Controller
{
    
    public function index()
    {
        $rays=H_rays::get();
        // return $rays;
        return view('pages.backend.admins.h_rays.index',compact('rays'));
    }

    public function create(Request $request)
    {
        // return $request;
        $validate=$request->validate([
            'rayname' => 'required|unique:h_rays,name',
            'cost'=>'required',
             'type'=>'required',
        ]);
        H_rays::create([
           'name'=>$request->rayname,
           'cost'=>$request->cost,
           'type'=>$request->type,
        ]);

        // return redirect()->back();
        // return redirect()->route('showerays');
        return redirect('/showerays')->with('MSG','rays add Succesful');

    }

    public function edit($id)
    {
        $rays=H_rays::findorfail($id);
        return view('pages.backend.admins.h_rays.edit',compact('rays'));
    }
    public function store(Request $request)
    {
        $validate=$request->validate([
            'rayname' => 'required|unique:h_rays,name,'.$request->raysid,
            'cost'=>'required',
             'type'=>'required',
        ]);
        H_rays::findorfail($request->raysid)->update([
            'name'=>$request->rayname,
            'cost'=>$request->cost,
            'type'=>$request->type,
        ]);
        return redirect('/showerays')->with('MSG','rays add Succesful');

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
        H_rays::findorfail($id)->delete();
        return redirect()->route('showerays');
    }
}
