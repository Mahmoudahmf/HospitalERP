<h3>شاشة الأطباء  </h3>
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
        <th>القسم التابع </th>
        <th>الغرفة</th>
        <th>الحالة</th>
        <th>الصلاحية</th>
        <th>سعر الكشف</th>
        <th colspan="2">المواعيد</th>
        <th>العمليات</th>
      </tr>
   </thead>
   <tbody>
      @foreach($h_doctors as $doctors)
      <tr>
         <td>{{$doctors->username}}</td>
         <td>{{$doctors->name}}</td>
         <td>{{$doctors->phone}}</td>
         <td>{{$doctors->title}}</td>
         <td>{{$doctors->salary}}</td>
         <td>{{$doctors->department->name}}</td>
         <td>{{$doctors->room->room_number}}</td>
         <td>{{$doctors->status==1?'نشط':'غير نشط'}}</td>
         <td>{{$doctors->role==2?'دكتور':'غير ذلك'}}</td>
         <td>{{$doctors->cost}}</td>
         <td>{{$doctors->from_date}}</td>
         <td>{{$doctors->to_date}}</td>
         <td>
             <a href="{{route('editdoctor',$doctors->id)}}">تعديل </a>
             <a href="{{route('deletedoctor',$doctors->id)}}">حذف </a>
         </td>
      </tr>
      @endforeach;
   </tbody>
</table>
<hr/>
@include('pages.backend.h_doctors.create')