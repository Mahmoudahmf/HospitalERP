@if ($errors->any())
     <div class="">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
           </ul>
    </div>
@endif
<form action="{{route('updatedepatment')}}" method="POST">
{{ method_field('patch') }}
   @csrf
<table id="edittable">
  <thead>
     <tr>
       <th>القسم</th>
     </tr>
  </thead>
  <tbody>
     <tr>
       <td>
         <input name="department"  value="{{$depart->name}}" />
         <input name="departid"  id="departid" type="hidden" value="{{$depart->id}}" />
         <button type="submit">تحديث</button>
       </td>
     </tr>
  </tbody>

</table>
</form>