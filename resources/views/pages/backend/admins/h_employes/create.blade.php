<div id="employes">
        <form  method='POST' action="{{route('createemployes')}}" autocomplete="off">
            @csrf
             <table border="1" width="600px" height="auto">
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
                 <label>إسم الموظف</label>
                  <input type="text" name="name" value="{{old('name')}}" required />
                 </td>
                 <td>
                 <select name="jobtitle">
                      <option value="" selected disabled>المسمى الوظيفي</option>
                      <option value="موظف استقبال">موظف استقبال</option>
                      <option value="امن">امن</option>
                      <option value="نظافة">نظافة</option>
                      <option value="سائق">سائق </option>
                   </select>
                 </td>
                
               </tr>
               <tr>
               <td>
                 <label>التليفون</label><br/>
                  <input type="text" name="phone" value="{{old('phone')}}" required 
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                  />
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
                 <select name="role">
                      <option value="" selected disabled>الصلاحيات</option>
                      <option value="4">استقبال</option>
                      <option value="5">امن</option>
                   </select>                
                 </td>
               </tr>
             </table>
              <input type="submit" value="حفظ" >
        </form>
</div>
