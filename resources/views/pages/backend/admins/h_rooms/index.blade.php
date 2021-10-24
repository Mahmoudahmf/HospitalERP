<h3>شاشة تسجيل الغرف </h3>
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
        <th>رقم الغرفة</th>
        <th>الطابق</th>
        <th>حالة الغرفة</th>
        <th>المدة</th>
        <th>ممرضات</th>
        <th>العمليات</th>
      </tr>
   </thead>
   <tbody>
      @foreach($h_rooms as $rooms)
      <tr>
         <td>{{$rooms->room_number}}</td>
         <td>{{$rooms->floor_no}}</td>
         <td>{{$rooms->status==1?'Avilabel':'Busy'}}</td>
         <td>{{$rooms->duration}}</td>
         <td>{{$rooms->nurses->name}}</td>
         <td>
          <a href="{{route('editrooms',$rooms->id)}}">تعديل </a>
          <a href="{{route('deleterooms',$rooms->id)}}">حذف </a>
         </td>
      </tr>
      @endforeach;
   </tbody>
</table>
<hr/>

<br/>
@include('pages.backend.admins.h_rooms.create')

