<h3>شاشة الأشعه والتحاليل  </h3>
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
<table border="1"  width="100%" height="auto">
  <thead>
     <tr>
       <td>#</td>
       <td>اسم</td>
       <td>نوع </td>
       <td>سعر</td>
       <td>العمليات</td>
     </tr>
  </thead>
  <tbody>
   @foreach($rays as $ray)
     <tr>
       <td>{{$loop->index+1}}</td>
       <td>{{$ray->name}}</td>
       <td>{{$ray->type==1?'أشعه':'تحاليل'}}</td>
       <td>{{$ray->cost}}</td>
       <td>
         <a href="{{url('Edit_Rays',$ray->id)}}">تعديل</a>
         || <a href="{{url('Delete_Rays',$ray->id)}}">حذف</a>
       </td>
     </tr>
   @endforeach
  </tbody>
</table>
<br/>
@include('pages.backend.admins.h_rays.create')

