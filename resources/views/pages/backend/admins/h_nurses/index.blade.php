<h3>شاشة الممرضات </h3>
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
<table border="1" width="100%" height="auto">
   <thead>
     <tr>
        <th>إسم المستخدم</th>
        <th>الإسم</th>
        <th>التليفون</th>
        <th>المسمى الوظيفي</th>
        <th>الراتب</th>
        <th>القسم التابع لها</th>
        <th>الحالة</th>
        <th>الصلاحية</th>
        <th>ميعاد العمل</th>
        <th>العمليات</th>
      </tr>
   </thead>
   <tbody>
      @foreach($nurses as $nurses)
      <tr>
         <td>{{$nurses->username}}</td>
         <td>{{$nurses->name}}</td>
         <td>{{$nurses->phone}}</td>
         <td>{{$nurses->title}}</td>
         <td>{{$nurses->salary}}</td>
         <td>{{$nurses->department->name}}</td>
         <td>{{$nurses->status==1?'نشط':'غير نشط'}}</td>
         <td>{{$nurses->role==3?'ممرض':'غير ذلك'}}</td>
         <td>from :{{$nurses->from_date}}
             To: {{$nurses->to_date}}
         </td>
         <td>
          <a href="{{route('editnurses',$nurses->id)}}">تعديل </a>
          <a href="{{route('deletenurses',$nurses->id)}}">حذف </a>
         </td>
      </tr>
      @endforeach;
   </tbody>
</table>
<hr/>
@include('pages.backend.admins.h_nurses.create')
<hr><hr>