@section('side_menu')
<section class="page-layout">

        <aside class="side_menu">
                <ul class="side-menu-icons">
                        <li class="side-menu-img-container">
                                <img class="side-menu-img" src="{{asset('storage/images/users/profile.jpg')}}">
                        </li>

                        <li class="icons-container">
                                <a href="{{route('dashboard.doctors')}}">
                                        <i class="fas fa-th fa-2x side-menu-icon active"></i>
                                </a>
                        </li>
                        <li class="icons-container"><i class="fas fa-procedures fa-2x side-menu-icon"></i></li>
                        <li class="icons-container"><i class="fas fa-user-nurse fa-2x side-menu-icon"></i></li>
                        <li class="icons-container"><i class="fas fa-user-injured fa-2x side-menu-icon"></i></li>
                        <li class="icons-container"><i class="fas fa-radiation fa-2x side-menu-icon"></i></li>
                        <li class="icons-container"><i class="fas fa-angle-double-right fa-2x side-menu-icon"></i></li>
                        <li class="icons-container">
                         <a href="{{route('logout')}}">
                                <i class="fas fa-sign-out-alt fa-2x side-menu-icon">
                                </i>
                           </a>
                        </li>

                        <div>
                                <div id="talkbubble-dash">Dashboard</div>
                                <div id="talkbubble-room">Room</div>
                                <div id="talkbubble-nurse">Nurse</div>
                                <div id="talkbubble-patient">Patient</div>
                                <div id="talkbubble-surgery">Surgery</div>
                                <div id="talkbubble-signout">Sign out</div>
                                <div id="talkbubble">Dashboard</div>
                        </div>
                </ul>


        </aside>


        @show