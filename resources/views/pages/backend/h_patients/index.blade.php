<h3>شاشة تسجيل المرضي </h3>
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
        <th>الإسم</th>
        <th>رقم البطاقة</th>
        <th>التليفون</th>
        <th>المسمى الوظيفي</th>
        <th>الحالة</th>
        <th>العنوان</th>
        <th>فصيلة الدم</th>
        <th>الوصف</th>
        <th>العمليات</th>
      </tr>
   </thead>
   <tbody>
      @foreach($patients as $patients)
      <tr>
         <td>{{$patients->name}}</td>
         <td>{{$patients->nationality_id}}</td>
         <td>{{$patients->phone}}</td>
         <td>{{$patients->title}}</td>
         <td>{{$patients->status==1?'نشط':'غير نشط'}}</td>
         <td>{{$patients->address}}</td>
         <td>{{$patients->bloodtype}}</td>
         <td>{{$patients->description}}</td>
         <td>
             <a href="{{route('editpatient',$patients->id)}}">تعديل</a>||
             <a href="{{route('deletepatient',$patients->id)}}">حذف</a>||
             <a href="{{route('examination',$patients->id)}}">حجز جديد </a>
         </td>
      </tr>
      @endforeach;
   </tbody>
</table>
<hr>
<br/>
@include('pages.backend.h_patients.create')