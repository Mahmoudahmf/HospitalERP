@if ($errors->any())
     <div class="">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
           </ul>
    </div>
@endif
<form  method='POST' action="{{route('updatenurses','test')}}" autocomplete="off">
{{ method_field('patch') }}
   @csrf
             <table border="1" width="600px" height="auto">
               <tr>
                 <td>
                 <label>إسم المستخدم</label>
                  <input type="text" name="username" value="{{$nuress->username}}"  required />
                 </td>
                 <td>
                 <label>كلمة المرور</label><br/>
                  <input type="password" name="password" value="{{$nuress->password}}"  required />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>إسم الممرض</label>
                  <input type="text" name="name" value="{{$nuress->name}}"  />
                  <input type="hidden" name="nurse_id"   value="{{$nuress->id}}" />
                 </td>
                 <td>
                 <label>التليفون</label><br/>
                  <input type="text" name="phone" value="{{$nuress->phone}}" 
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                    required />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>المسمي الوظيفي</label>
                  <input type="text" name="title" value="{{$nuress->title}}" required />
                 </td>
                 <td>
                 <label>الراتب</label><br/>
                  <input type="text" name="salary" value="{{$nuress->salary}}"  
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1',);"
                  required />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>القسم التابع لها</label>
                  <select name="department" required>
                    <option selected  disabled>Choosed</option>

                    @foreach($departments as $departments)

                        <option value="{{$departments->id}}" {{$departments->id==$nuress->dept_id?'selected':''}}>{{$departments->name}}</option>
                    @endforeach;
                  </select>
                 </td>
                 <td>
                 <label>الحالة</label>
                    <select class="form-control" name="status_id">
                        <option value="1" {{$nuress->status == '1' ? 'selected':''}}>نشط</option>
                        <option value="2" {{$nuress->status == '2' ? 'selected':''}}>غير نشط</option>
                    </select>
                 </td>
               </tr>
               <tr>
                 <td>
                    <label>من</label>
                     <input  type="text"  value="{{$nuress->from_date}}" name="from_date" />
                 </td>
                 <td>
                    <label>إلي</label>
                    <input type="text" value="{{$nuress->to_date}}" name="to_date" />
                 </td>
               </tr>
             </table>
              <br>   
                <input type="submit" value="حفظ" >
              <hr>

        </form>