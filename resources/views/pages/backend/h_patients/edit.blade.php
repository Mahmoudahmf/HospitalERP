@if ($errors->any())
     <div class="">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
           </ul>
    </div>
@endif
<h3>اضافة مريض </h3>
<div id="patients">
        <form  method='POST' action="{{route('updatepatient')}}" autocomplete="off">
        {{ method_field('patch') }}
          @csrf
             <table  border="1"  width="700px" height="auto">
               <tr>
                 <td>
                 <label>إسم المريض</label>
                  <input type="text" name="name" value="{{$patient->name}}" required />
                  <input type="hidden" name="id" value="{{$patient->id}}" required />

                 </td>
                 <td>
                 <label>رقم البطاقة</label><br/>
                  <input type="text" name="nationality_id" size="16" maxlength="14" value="{{$patient->nationality_id}}" required 
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                  />
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>التليفون</label><br/>
                  <input type="text" name="phone" value="{{$patient->phone}}" required 
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                  />
                 </td>
                 <td>
                 <label>الوظيفة</label>
                  <input type="text" name="title" value="{{$patient->title}}"  required />
                 </td>
               </tr>
               <tr>
                <td colspan="2">
                 <label>العنوان</label><br/>
                 <textarea type="text" name="address" required >{{$patient->address}}</textarea>
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>فصيلة الدم</label>
                  <select name="bloodtype" required>
                    <option selected  disabled>Choosed</option>
                    <option value="A" {{$patient->bloodtype=='A'?'selected':''}}>A</option>
                    <option value="O" {{$patient->bloodtype=='O'?'selected':''}}>O</option>
                    <option value="A+" {{$patient->bloodtype=='A+'?'selected':''}}>A+</option>
                    <option value="B" {{$patient->bloodtype=='B'?'selected':''}}>B</option>
                  </select>
                 </td>
                 <td colspan="2">
                 <label>الملاحظات</label><br/>
                 <textarea type="text" name="description">{{$patient->description}}</textarea>
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>الحالة</label><br/>
                 <select name="status" required>
                    <option selected  disabled>Choosed</option>
                    <option value="0" {{$patient->status=='0'?'selected':''}}>غير نشط</option>
                    <option value="1" {{$patient->status=='1'?'selected':''}}>نشط</option>
                  </select>
                 </td>
               </tr>
             
             </table>
              <input type="submit" value="حفظ" >
        </form>
</div>