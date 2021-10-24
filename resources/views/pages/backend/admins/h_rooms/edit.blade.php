
<h4>اضافة غرفة</h4>
@if ($errors->any())
     <div class="">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
           </ul>
    </div>
@endif
<div id="rooms">
        <form  method='POST' action="{{route('updaterooms')}}" autocomplete="off"
        enctype="multipart/form-data">
        {{ method_field('patch') }}
           @csrf
               <table  border="1"  width="100%" height="auto">
               <tr>
                 <td>
                 <label>رقم الغرفة</label>
                  <br>
                  <input type="text" name="RoomId" value="{{$rooms->room_number}}"  required />
                  <input type="hidden" name="RoId" value="{{$rooms->id}}"  required />

                 </td>
                 <td>
                    <label>الطابق</label><br/>
                    <input type="text" name="FloorNumber" value="{{$rooms->floor_no}}"  required />
                 </td>
                 <td>
                 <label>المدة</label>
                 <br>
                  <input type="text" name="duration" value="{{$rooms->duration}}" required />
                 </td>
             
                 <td>
                 <label>الممرضات </label>
                 <br/>
                    <select class="form-control"   name="nurseId" >
                        <option selected  disabled>Choosed</option>
                        @foreach($nurses as $nurses)
                            <option value="{{$nurses->id}}" {{$nurses->id==$rooms->nurseId?'selected':''}}>{{$nurses->name}} ({{$nurses->from_date}} To {{$nurses->to_date}})</option>
                        @endforeach;
                    </select> 
                            
                 </td>
                
               </tr>
             </table>
             <br/>
              <input type="submit" value="حفظ" >
        </form>
</div>