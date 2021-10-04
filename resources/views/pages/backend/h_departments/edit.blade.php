<form action="{{route('updatedepatment','test')}}" method="POST">
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
         <input name="departn"  value="{{$depart->name}}" />
         <input name="departid"  type="hidden" value="{{$depart->id}}" />
         <button type="submit">تحديث</button>
       </td>
     </tr>
  </tbody>

</table>
</form>