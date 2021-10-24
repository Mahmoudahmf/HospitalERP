 شاشه التعديل .. {{$rays->name}}
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
<hr>
 <form action="{{route('update_rays')}}" method="POST">
 {{ method_field('patch') }}
    @csrf
    <table border="1"  width="700px" height="auto">

        <thead>
            <tr>
                <td>
                    <label>اسم الأشعة</label>
                </td>
                <td>
                    <label>السعر</label>
                </td>
                <td>
                    <label>النوع</label>
                </td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <input name="rayname" type="text" placeholder="Ente Rays Name" value="{{$rays->name}}" />
                    <input name="raysid" type="hidden" value="{{$rays->id}}" />
                </td>
                <td>
                    <input name="cost" type="text" placeholder="Enter Price"
                       value="{{$rays->cost}}" oninput="this.value = this.value.replace(/[^0-9.]/, '.').replace(/(\..*)\./g, '$1',);" />
                </td>
                <td>
                    <input name="type" type="radio" {{$rays->type==1?'checked':''}} value="1">أشعه
                    <br/>
                    <input name="type" type="radio" {{$rays->type==2?'checked':''}} value="2">تحاليل
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input  type="submit" value="حفظ" />
                </td>
                
            </tr>
        </tbody>

    </table>

</form>
