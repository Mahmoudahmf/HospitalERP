<h3>شاشة الأقسام </h3>
<div id="department">
        <form  method='POST' action="{{route('storedepartments')}}" autocomplete="off">
            @csrf
              <label>إسم القسم</label><br/>
              <input type="text" name="department"  required />
              <br/><br/>
              <input type="submit" value="اضافة قسم" >
        </form>
</div>
<hr><hr>
<table>
   <thead>
     <tr>
     <th>م</th>
     <th>القسم</th>
     </tr>
   </thead>
    <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$department->name}}</td>
            <td><a href="{{route('editdepatment',$department->id)}}">تعديل </a></td>
            <td><a href="{{route('deletedepatment',$department->id)}}">حذف </a></td>
           
        </tr>
        @endforeach;
    </tbody>
</table>
<br/>
