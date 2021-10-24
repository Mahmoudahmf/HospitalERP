
 <hr>
 <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
<br>
<a href="{{route('employes.index')}}">Click Here Test Route</a>
<br/><br/>

<a href="{{route('logout')}}">Click Here Logout</a>

<hr>
<table  border="1" width="100%" height="auto">
    <tr>
        <td>
            <a href="{{route('patients')}}"> شاشة المرضي</a>
            <a href="{{route('reservations')}}"> شاشة الحجوزات</a>

        </td>
        
    </tr>
</table>   
