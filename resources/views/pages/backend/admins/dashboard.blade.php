<div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
<br>
<a href="{{route('admins.index')}}">Click Here Test Route</a>
<br /><br />

<a href="{{route('logout')}}">Click Here Logout</a>
<hr>
<table  border="1" width="100%" height="auto">
    <tr>
        <td>
            <a href="{{route('showdepartments')}}">الأقســام</a>
        </td>
        <td>
            <a href="{{route('showNurses')}}">شاشة الممرضات</a>
        </td>
        <td>
            <a href="{{route('showemployes')}}">شاشة الموظفين</a>
        </td>
        <td>
            <a href="{{route('showerooms')}}">تسجيل الغرف</a>
        </td>
        <td>
            <a href="{{route('showedoctors')}}">تسجيل الأطباء</a>
        </td>
        
    </tr>
</table>