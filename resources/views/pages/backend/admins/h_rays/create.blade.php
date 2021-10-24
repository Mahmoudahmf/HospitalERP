<h4>اضافة اشعه - تحاليل</h4>
<form action="{{route('add_rays')}}" method="POST">
   @csrf
    <table border="1"  width="700px" height="auto">

        <thead>
            <tr>
                <td>
                    <label>اسم الأشعه - تحليل</label>
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
                    <input name="rayname" type="text" placeholder="Ente Rays Name" />
                </td>
                <td>
                    <input name="cost" type="text" placeholder="Enter Price" oninput="this.value = this.value.replace(/[^0-9.]/, '.').replace(/(\..*)\./g, '$1',);" />
                </td>
                <td>
                    <input name="type" type="radio" value="1">أشعه
                    <br/>
                    <input name="type" type="radio" value="2">تحاليل
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