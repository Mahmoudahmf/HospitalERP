

@section('side_menu')
<section class="page-layout">

        <aside class="side_menu">
              <ul class="side-menu-icons">

              <!--side menu image -->
                        <li class="side-menu-img-container">
                           <img class="side-menu-img"src="{{asset('storage/images/users/profile.jpg')}}">
                        </li>
              <!--side menu icons-->
                     <li class="icons-container"><i class="fas fa-th fa-2x side-menu-icon active"></i></li>
                     <li class="icons-container"><i class="fas fa-procedures fa-2x side-menu-icon"></i></li>
                     <li class="icons-container"><i class="fas fa-user-nurse fa-2x side-menu-icon"></i></li>
                     <li class="icons-container"><i class="fas fa-user-injured fa-2x side-menu-icon"></i></li>
                     <li class="icons-container"><i class="fas fa-radiation fa-2x side-menu-icon"></i></li>
                     <li class="icons-container"><i class="fas fa-sign-out-alt fa-2x side-menu-icon"></i></li>
                     <li class="icons-container"><i class="fas fa-angle-double-right fa-2x side-menu-icon"></i></li>

              </ul>
        </aside>

@show
