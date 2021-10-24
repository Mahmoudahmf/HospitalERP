<div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
<br>
<a href="{{route('nurses.index')}}">Click Here Test Route</a>
<br /><br />

<form method="GET" action="{{ route('logout') }}">
    @csrf
    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                             this.closest('form').submit();">
    </x-responsive-nav-link>
</form>