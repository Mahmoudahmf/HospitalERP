<h3>شاشة الموظفين </h3>
<hr>
@if ($errors->any())
     <div class="">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
           </ul>
    </div>
@endif
<table  border="1" width="100%" height="auto">
     <tr>
        <th>إسم المستخدم</th>
        <th>الإسم</th>
        <th>التليفون</th>
        <th>المسمى الوظيفي</th>
        <th>الراتب</th>
        <th>الحالة</th>
        <th>الصلاحية</th>
        <th>الحركات</th>

      </tr>
   </thead>
   <tbody>
      @foreach($employes as $employe)
      <tr>
         <td>{{$employe->username}}</td>
         <td>{{$employe->name}}</td>
         <td>{{$employe->phone}}</td>
         <td>{{$employe->title}}</td>
         <td>{{$employe->salary}}</td>
         <td>{{$employe->status==1?'نشط':'غير نشط'}}</td>
         <td>{{$employe->role==4?'استقبال':'امن'}}</td>
         <td>
          <a href="{{route('editemployes',$employe->id)}}">تعديل </a>
          <a href="{{route('deleteemployes',$employe->id)}}">حذف </a>
         </td>
      </tr>
      @endforeach;
   </tbody>
</table>
<hr/>
<hr><hr>
@include('pages.backend.admins.h_employes.create')