@if ($errors->any())
     <div class="">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
           </ul>
    </div>
@endif
<form  method='POST' action="{{route('updateemployes','test')}}" autocomplete="off">
{{ method_field('patch') }}
   @csrf
             <table border="1" width="600px" height="auto">
               <tr>
                 <td>
                 <label>إسم المستخدم</label>
                  <input type="text" name="username" value="{{$employes->username}}"  required />
                 </td>
                 <td>
                 <label>كلمة المرور</label><br/>
                  <input type="password" name="password" value="{{$employes->password}}"  required />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>إسم الممرض</label>
                  <input type="text" name="name" value="{{$employes->name}}"  />
                  <input type="hidden" name="emp_id"   value="{{$employes->id}}" />
                 </td>
                 <td>
                 <label>التليفون</label><br/>
                  <input type="text" name="phone" value="{{$employes->phone}}" 
                    oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                    required />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>المسمي الوظيفي</label>
                  <input type="text" name="title" value="{{$employes->title}}" required />
                 </td>
                 <td>
                 <label>الراتب</label><br/>
                  <input type="text" name="salary" value="{{$employes->salary}}"  
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1',);"
                  required />
                 </td>
               </tr>
               <tr>
                
                 <td>
                 <label>الحالة</label>
                    <select class="form-control" name="status">
                        <option value="1" {{$employes->status == '1' ? 'selected':''}}>نشط</option>
                        <option value="2" {{$employes->status == '2' ? 'selected':''}}>غير نشط</option>
                    </select>
                 </td>
                 <td>
                 <label>الصلاحية</label>
                    <select class="form-control" name="role">
                        <option value="3" {{$employes->role == '3' ? 'selected':''}}>استقبال</option>
                        <option value="4" {{$employes->role == '4' ? 'selected':''}}>امن</option>
                    </select>
                 </td>
               </tr>
             </table>
              <br>   
                <input type="submit" value="حفظ" >
              <hr>

        </form>