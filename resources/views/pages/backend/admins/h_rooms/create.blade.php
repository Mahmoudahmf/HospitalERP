 <!--<div class="adminRoomImage">
     <img src="{{asset('storage/images/users/5.jpg')}}">
 </div>-->

<!--   <img src="../../../../../storage/app/public/images/users/5.jpg">-->
 <section class="adminRoomForm">
    <div class="adminRoomFormContainer">





        <!--Form Content -->
       <div id="rooms">

            <form  method='POST' action="{{route('createrooms')}}" autocomplete="off"
                 enctype="multipart/form-data">
                @csrf
                <!--form text -->
                <div class="adminRoomFormHeader">
                    <h4>Rooms Page</h4>
                </div>

                 <table  border="1"  width="100%" height="auto">
                   <tr  class="adminTableTr">

                   <!--1 Row in form-->
                     <td class="adminTableTd">
                     <label>Room number </label>

                      <input type="text" name="RoomId" value="{{old('RoomId')}}"  required />
                     </td>

                   <!--2  Row in form-->
                     <td class="adminTableTd">
                        <label>Floor Number</label>
                        <input type="text" name="FloorNumber" value="{{old('FloorNumber')}}"  required />
                     </td>
                     <td class="adminTableTd">
                     <label>Duration</label>

                      <input type="text" name="duration" value="0{{old('duration')}}" required />
                     </td>

                   <!--3 Row in form-->
                   <td class="adminTableTdChoose">
                     <label> nurses's Name </label>

                        <select class="form-control"   name="nurseId"  id="select">
                             <option value="">Select a nurse...</option>
                            @foreach($h_nurses as $h_nurse)
                                <option value="{{$h_nurse->id}}">{{$h_nurse->name}} ({{$h_nurse->from_date}} To {{$h_nurse->to_date}})</option>
                            @endforeach
                        </select>

                     </td>

                   </tr>
                 </table>
                  <div class="adminFormButton">
                      <input type="submit" value="Submit" >
                  </div>
            </form>
       </div>
    </div>
 </section>





