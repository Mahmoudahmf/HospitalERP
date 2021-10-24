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
        <form  method='POST' action="{{route('createpatient')}}" autocomplete="off">
            @csrf
             <table  border="1"  width="700px" height="auto">
               <tr>
                 <td>
                 <label>إسم المريض</label>
                  <input type="text" name="name" value="{{old('name')}}" required />
                 </td>
                 <td>
                 <label>رقم البطاقة</label><br/>
                  <input type="text" name="nationality_id" size="16" maxlength="14" value="{{old('nationality_id')}}" required 
                  oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
                  />
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
                 <label>المهنة</label>
                  <input type="text" name="title" value="{{old('title')}}"  required />
                 </td>
               </tr>
               <tr>
                <td colspan="2">
                 <label>العنوان</label><br/>
                 <textarea type="text" name="address" required ></textarea>
                 </td>
               </tr>
               <tr>
                 <td>
                 <label>فصيلة الدم</label>
                  <select name="bloodtype" required>
                    <option selected  disabled>Choosed</option>
                    <option value="A">A</option>
                    <option value="O">O</option>
                    <option value="A+">A+</option>
                    <option value="B">B</option>
                  </select>
                 </td>
                 <td colspan="2">
                 <label>الملاحظات</label><br/>
                 <textarea type="text" name="description"></textarea>
                 </td>
               </tr>
             
             </table>
              <input type="submit" value="حفظ" >
        </form>
</div>