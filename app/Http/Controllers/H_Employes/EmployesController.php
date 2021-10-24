<?php

namespace App\Http\Controllers\H_Employes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\H_employees;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EmployesRequest;

class EmployesController extends Controller
{
    
    public function index()
    {
        $employes=H_employees::get();
        return view('pages.backend.admins.h_employes.index',compact('employes'));
    }

    
    public function create(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|starts_with:em_|unique:h_employees,username,',
            'password'=>'required|string|min:6|max:10',
            'jobtitle'=>'required|string',
            'role'=>'required|string',
         ]);

         H_employees::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'phone' => $request->phone,
            'title' => $request->jobtitle,
            'salary' => $request->salary,
            'role' => $request->role,
         ]);
         return redirect()->route('showemployes');
    }

    
    public function edit($id)
    {
        $employes = H_employees::findorfail($id);
        return view('pages.backend.admins.h_employes.edit', compact('employes'));
    }

    public function store(Request $request)
    {
       
       $validate=$request->validate([
        'name' => 'required',
        'username' => 'required|starts_with:em_|unique:h_employees,username,'.$request->emp_id,
        'password'=>'required|string|min:6|max:10',
        'title'=>'required|string',
        'status'=>'required|string',
        'role'=>'required|string',
       ]);

        H_employees::findorfail($request->emp_id)->update([
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'name' => $request->name,
        'phone' => $request->phone,
        'title' => $request->title,
        'salary' => $request->salary,
        'status' => $request->status,
        'role' => $request->role,
    ]);
       return redirect()->route('showemployes');
    }

    public function show($id)
    {
        //
    }

    
    

    
    public function update(EmployesRequest $request)
    {
        $empupdate = H_employees::findorfail($request->emp_id);
        $empupdate->username = $request->username;
        $empupdate->password = Hash::make($request->password);
        $empupdate->name = $request->name;
        $empupdate->role = '1';
        $empupdate->phone = $request->phone;
        $empupdate->title = $request->title;
        $empupdate->salary = $request->salary;
        $empupdate->status = $request->status_id;
        $empupdate->save();
        return redirect()->route('showemployes');

    }

    
    public function destroy($id)
    {
        // return $id;
        H_employees::findorfail($id)->delete();
        return redirect()->route('showemployes');
    
    }
}
