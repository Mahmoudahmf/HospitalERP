<table border="1" width="100%" height="auto">
   <thead>
     <tr>
        <th>#</th>
        <th>نوع الحجز</th>
        <th>إسم المريض</th>
        <th>رقم الكشف</th>
        <th>الدكتور</th>
        <th>القسم</th>
        <th>رقم الغرفة</th>
        <th>سعر الكشف </th>
        <th>الوصف</th>
      </tr>
   </thead>
   <tbody>
      @foreach($Operations as $Operation)
      <tr>
         <td>{{$loop->iteration}}</td>
         <td>{{$Operation->type==1?'كشف':''}}</td>
         <td>{{$Operation->patient->name}}</td>
         <td>{{$Operation->reversation_num}}</td>
         <td>{{$Operation->doctor->name}}</td>
         <td>{{$Operation->departments->name}}</td>
         <td>{{$Operation->rooms->room_number}}</td>
         <td>{{$Operation->cost}}</td>
         <td>{{$Operation->description}}</td>
      </tr>
      @endforeach;
   </tbody>
</table>