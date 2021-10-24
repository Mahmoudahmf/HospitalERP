
<h4>اضافة غرفة</h4>
<div id="rooms">
        <form  method='POST' action="{{route('createrooms')}}" autocomplete="off"
        enctype="multipart/form-data">
            @csrf
             <table  border="1"  width="100%" height="auto">
               <tr>
                 <td>
                 <label>رقم الغرفة</label>
                  <br>
                  <input type="text" name="RoomId" value="{{old('RoomId')}}"  required />
                 </td>
                 <td>
                    <label>الطابق</label><br/>
                    <input type="text" name="FloorNumber" value="{{old('FloorNumber')}}"  required />
                 </td>
                 <td>
                 <label>المدة</label>
                 <br>
                  <input type="text" name="duration" value="0{{old('duration')}}" required />
                 </td>
             
                 <td>
                 <label>الممرضات </label>
                 <br/>
                    <select class="form-control"   name="nurseId" >
                        <option selected  disabled>Choosed</option>
                        @foreach($h_nurses as $h_nurse)
                            <option value="{{$h_nurse->id}}">{{$h_nurse->name}} ({{$h_nurse->from_date}} To {{$h_nurse->to_date}})</option>
                        @endforeach;
                    </select> 
                            
                 </td>
                
               </tr>
             </table>
             <br/>
              <input type="submit" value="حفظ" >
        </form>
</div>