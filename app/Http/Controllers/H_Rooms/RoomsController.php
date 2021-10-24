<?php

namespace App\Http\Controllers\H_Rooms;

use App\Http\Controllers\Controller;
use App\Models\H_rooms;
use App\Models\H_nurse;
use Illuminate\Http\Request;
class RoomsController extends Controller
{
    
    public function index()
    {
        $h_rooms=H_rooms::all();
        $h_nurses=H_nurse::all();
        return view('pages.backend.admins.h_rooms.index',compact('h_rooms','h_nurses'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'RoomId' => 'required|unique:h_rooms,room_number,',
            'FloorNumber'=>'required|string',
            'nurseId'=>'required|string',
         ]);
                 H_rooms::create([
            'room_number'=>$request->RoomId,
            'floor_no'=>$request->FloorNumber,
            'nurseId'=>$request->nurseId,
        ]);

        return redirect()->route('showerooms');
    }

    public function edit($id)
    {
        // return $id;
        $rooms=H_rooms::findorfail($id);
        // return $rooms;
        $nurses=H_nurse::all();
        return view('pages.backend.admins.h_rooms.edit',compact('rooms','nurses'));
    }
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'RoomId' => 'required|unique:h_rooms,room_number,'.$request->RoId,
            'FloorNumber'=>'required|string',
            'nurseId'=>'required|string',
         ]);
        H_rooms::findorfail($request->RoId)->update([
        'room_number'=>$request->RoomId,
        'floor_no'=>$request->FloorNumber,
        'nurseId'=>$request->nurseId,
       ]);
       return redirect()->route('showerooms');

    }

    public function destroy($id)
    {
         H_rooms::findorfail($id)->delete();
         return redirect()->route('showerooms');
    }
}
