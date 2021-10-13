


@section('navbar')

<div class = "page-content">
        <nav class="navbar-component">


                 <!-- Left Part includes "Paragraph(Patient Name - Doctor Department)" "Line" "circle (Working OR Break)" -->

            <div class="nav_left">
              <!--   Paragraph(Patient Name - Doctor Department)-->

                     <div class="doctor_info">
                         <p class="doctor-name"> {{Auth::user()->name}}</p>
                         <p class="department"> {{Auth::user()->title}} </p>
                     </div>

                     <!-- circle (Working OR Break) -->

                     <div class="doctor_status">

                         <!-- Line -->

                         <div class="line"></div>
                         <div class="circle"></div>
                         <p class="Work_status">Working</p>
                     </div>
            </div>

                 <!-- Center Part includes "Clock" -->

            <div id="dclock">

            </div>

                 <!-- Right Part includes 3 icons -->


            <div class="nav_icons">
                     <a class="p-notification"><i class="far fa-bell"></i></a>
                     <a class="p-message"> <i class="far fa-envelope-open"></i></a>
                     <a><i class="fas fa-cog"></i></a>
            </div>

            <div class="nav-notification ">+3</div>
            <div class="nav-message">+3<div>
        </nav>
@show
