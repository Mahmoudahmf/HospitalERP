
<div id="nurses">
        <form  method='POST' action="{{route('createdoctor')}}" autocomplete="off">
            @csrf
             <table  border="1"  width="700px" height="auto">
               <tr>
                 <td>
                 <label>إسم المستخدم</label>
                  <input type="text" name="username" value="{{old('username')}}"  required />
                 </td>
                 <td>
                 <label>كلمة المرور</label><br/>
                  <input type="text" name="password" value="{{old('password')}}" required />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>إسم الطبيب</label>
                  <input type="text" name="name" value="{{old('name')}}" required />
                 </td>
                 <td>
                 <label>التليفون</label><br/>
                  <input type="text" name="phone" value="{{old('phone')}}" required 
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                  />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>المسمي الوظيفي</label>
                  <input type="text" name="title" value="{{old('title')}}"  required />
                 </td>
                 <td>
                 <label>الراتب</label><br/>
                 <input type="text" name="salary" value="{{old('salary')}}" required 
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1',);"
                  />
                 </td>
               </tr>
               <tr>
                 <td>
                  <select name="dept_id" required>
                    <option selected  disabled>اختر القسم</option>
                      @foreach($departments as $departments)
                          <option value="{{$departments->id}}">{{$departments->name}}</option>
                      @endforeach;
                  </select>
                 </td>
                 <td>
                <select name="room_id">
                   <option value="" selected disabled>أختر الغرفة</option>
                   @foreach($h_rooms as $room)
                    <option value="{{$room->id}}">{{$room->room_number}}/{{$room->floor_no}}</option>
                   @endforeach;
                </select>
                </td>
               </tr>
               <tr>
                 <td>
                    <label>من</label>
                     <input  type="text"  value="" name="from_date" />
                 </td>
                 <td>
                    <label>إلي</label>
                    <input type="text" value="" name="to_date" />
                 </td>
               </tr>
               <tr>
                <td>
                  <label>سعر الكشف</label>
                  <input type="text" value="" placeholder="Enter Cost" name="cost"
                  oninput="this.value = this.value.replace(/[^0-9.]/, '.').replace(/(\..*)\./g, '$1',);" />
                </td>
               </tr>
             </table>
             <hr>
              <input type="submit" value="حفظ" >

        </form>
</div>