
<div id="nurses">
        <form  method='POST' action="{{route('updatedoctor')}}" autocomplete="off">
        {{ method_field('patch') }}
        @csrf
             <table  border="1"  width="700px" height="auto">
               <tr>
                 <td>
                 <label>إسم المستخدم</label>
                  <input type="text" name="username" value="{{$hdoctors->username}}"  required />
                 </td>
                 <td>
                 <label>كلمة المرور</label><br/>
                  <input type="password" name="password" value="{{$hdoctors->password}}" required />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>إسم الطبيب</label>
                  <input type="text" name="name" value="{{$hdoctors->name}}" required />
                  <input type="hidden" name="doctorid" value="{{$hdoctors->id}}" required />

                 </td>
                 <td>
                 <label>التليفون</label><br/>
                  <input type="text" name="phone" value="{{$hdoctors->phone}}" required 
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                  />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>المسمي الوظيفي</label>
                  <input type="text" name="title" value="{{$hdoctors->title}}"  required />
                 </td>
                 <td>
                 <label>الراتب</label><br/>
                 <input type="text" name="salary" value="{{$hdoctors->salary}}" required 
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1',);"
                  />
                 </td>
               </tr>
               <tr>
                 <td>
                 <select name="dept_id" required>
                    <option selected  disabled>Choosed</option>
                    @foreach($hdepartments as $departments)
                        <option value="{{$departments->id}}" {{$departments->id==$hdoctors->dept_id?'selected':''}}>{{$departments->name}}</option>
                    @endforeach;
                  </select>
                 </td>
                 <td>
                <select name="room_id" required>
                    <option selected  disabled>Choosed</option>
                    @foreach($hrooms as $rooms)
                        <option value="{{$rooms->id}}" {{$rooms->id==$hdoctors->room_id?'selected':''}}>{{$rooms->room_number}}/{{$rooms->floor_no}}</option>
                    @endforeach;
                  </select>
                </td>
               </tr>
               <tr>
                 <td>
                    <label>من</label>
                     <input  type="text"  value="{{$hdoctors->from_date}}" name="from_date" />
                 </td>
                 <td>
                    <label>إلي</label>
                    <input type="text" value="{{$hdoctors->to_date}}" name="to_date" />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>الحالة</label>
                    <select class="form-control" name="status_id">
                        <option value="1" {{$hdoctors->status == '1' ? 'selected':''}}>نشط</option>
                        <option value="2" {{$hdoctors->status == '2' ? 'selected':''}}>غير نشط</option>
                    </select>
                 </td>
               </tr>
               <tr>
                <td>
                  <label>سعر الكشف</label>
                  <input type="text" value="{{$hdoctors->cost}}" placeholder="Enter Cost" name="cost"
                  oninput="this.value = this.value.replace(/[^0-9.]/, '.').replace(/(\..*)\./g, '$1',);" />
                </td>
               </tr>
             </table>
              <input type="submit" value="حفظ" >
        </form>
</div>