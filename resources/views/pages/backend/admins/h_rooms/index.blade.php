
     @include('pages.layout.header')

  <main class="adminRoomPage">
<!--Admin Rooms Page Side menu -->
<div class="adminRoomSideMenu">
    @include('pages.layout.side_menu')
</div>

<!--Admin Rooms Page Navbar -->
<div class="adminRoomNavbar">
    @include('pages.layout.navbar')
</div>

@include('pages.backend.admins.h_rooms.create')

<section class="adminRoomTable">




    <!--@if ($errors->any())
         <div class="">
              <ul>
                 @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                 @endforeach
               </ul>
        </div>
    @endif-->

    <div class="tableBox">
          <div class="tableBoxHeader">

                <form>
                  <div class="pseudo-search">
                    <input type="text" placeholder="Search..." autofocus required>
                    <button class="fa fa-search" type="submit"></button>
                  </div>

                </form>


                <div class="selectionContainer">
                    <div class="formSelect">
                        <select name="patientName" id="patient-select" class="select patientName">
                            <option value="" selected><p class="name" >Patient Name</p></option>
                            <option value="Fatima"><p class="name">Fatima</p></option>
                            <option value="Asmaa"><p>Fatima</p></option>
                            <option value="Alaa"><p>Fatima</p></option>
                        </select>
                        <select name="nurseName" id="nurse-select" class=" select nurseName">
                            <option value=""> <p>Nurse Name</p></option>
                            <option value="Fatima"><p> Name</p></option>
                            <option value="Asmaa"><p> Name</p></option>
                            <option value="Alaa"><p> Name</p></option>
                        </select>
                        <select name="type" id="type" class="select type" >
                            <option value=""><p>Type</p></option>
                            <option value="male"><p>Surgery</p></option>
                            <option value="female"><p>Examin</p></option>
                            <option value="male"><p>Medical Analysis</p></option>
                            <option value="female"><p>Radiology</p></option>
                        </select>
                        <select name="Status" id="Status" class="select Status" >
                            <option value=""> <p>Status</p></option>
                            <option value="male"><p>  <i class="fas fa-circle"></i>Surgery</p></option>
                            <option value="female"> <i class="fas fa-circle"></i><p>Examin</p></option>
                            <option value="male">  <i class="fas fa-circle"></i><p>Medical Analysis</p></option>
                        </select>
                        <select name="update" id="update" class="select update">
                            <option value=""> <p></p><p></p>Last Updated</option>
                            <option value="male">busy</option>
                            <option value="female">free</option>
                            <option value="female">absent</option>
                        </select>
                    </div>
                </div>
          </div>
    </div>


    <table border="1" width="100%" height="auto" class="adminRoomTableContent" cellspacing="0" cellpadding="0">
       <thead>
         <tr class="adminRoomTableTheadTr">
            <th> room number </th>
            <th>Floor number</th>
            <th>Room status </th>
            <th>Duration</th>
            <th>Nurses</th>
            <th> Edit </th>
            <th> Delete </th>
          </tr>
       </thead>
       <tbody >
          @foreach($h_rooms as $rooms)
          <tr class="adminRoomTableTbodyTr">
             <td>{{$rooms->room_number}}</td>
             <td>{{$rooms->floor_no}}</td>
             <td class='adminRoomTableStatus'>{{$rooms->status==1?'Available':'Busy'}}</td>
             <td>{{$rooms->duration}}</td>
             <td>{{$rooms->nurses->name}}</td>
             <td><button class="adminRoomEditBtn"><a href="{{route('editrooms',$rooms->id)}}">Edit </a></button></td>
             <td><button class="adminRoomDeleteBtn"><a href="{{route('deleterooms',$rooms->id)}}"> Delete </a> </button></td>
          </tr>
          @endforeach
       </tbody>
    </table>
</section>
</main>
@include('pages.layout.footer')

