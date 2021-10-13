<h3>شاشة الأقسام </h3>
@if ($errors->any())
     <div class="">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
           </ul>
    </div>
@endif
<div id="department">
        <form  method='POST' action="{{route('createdepartments')}}" autocomplete="off">
            @csrf
              <label>إسم القسم</label><br/>
              <input type="text" name="department"  required />
              <br/><br/>
              <input type="submit" value="اضافة قسم" >
        </form>
</div>
<hr><hr>
<table  border="1" width="600px" height="auto">
   <thead>
     <tr>
     <th>م</th>
     <th>القسم</th>
     <th>العمليات</th>
     </tr>
   </thead>
    <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$department->name}}</td>
            <td>
              <a href="{{route('editdepatment',$department->id)}}">تعديل </a>
              <a href="{{route('deletedepatment',$department->id)}}">حذف </a>
             </td>
        </tr>
        @endforeach;
    </tbody>
</table>
<br/>
