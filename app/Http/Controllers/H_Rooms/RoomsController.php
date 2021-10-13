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
        return view('pages.backend.h_rooms.index',compact('h_rooms','h_nurses'));
    }

    public function create(Request $request)
    {
        //return $request;
        // $m_nurseId=implode(',',$request->m_nurseId);
        //  return $m_nurseId;
        H_rooms::create([
            'room_number'=>$request->RoomId,
            'floor_no'=>$request->FloorNumber,
            // 'm_nurseId'=>implode(',',$request->m_nurseId),
            // 'm_nurseId'=>attach($request->teacher_id),

            'n_nurseId'=>$request->n_nurseId,
        ]);

        return redirect()->route('showerooms');
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

    }

    public function destroy($id)
    {

    }
}
