
     @include('pages.layout.header')
     <div class="Rooms_layout">
        <!--------------------------- side menu ------------------------------------->
        <div class="Rooms_layout-sideMenu">
     @include('pages.layout.side_menu')

        </div>



        <!-------------------------------------- Navbar ----------------------------------->
        <div class="Rooms_layout-nav">

        @include('pages.layout.navbar')

            <button id="showMyMenu">
                <i class="collapse-icon fas fa-chevron-circle-down"></i>
            </button>
        </div>

        <!------------------------------------------------ Cards------------------------------------------------------>
        <div class="Rooms_layout-types">
                    @include('pages.layout.doctor_room_components.room_cards')

        </div>


        <!------------------------------ rooms table ----------------------------------------------->
        <div class="Rooms_layout-table">
                    @include('pages.layout.doctor_room_components.room_table')

        </div>


        <!---------------------------- Room progress ----------------------------------------------------------->
        <div class="Rooms_layout-progressAndMapping">
            <div class="Rooms_layout-progress">
                  @include('pages.layout.doctor_room_components.room_boxCharts')

            </div>
        <!----------------------------------------- Room Timeline ---------------------------------------------->
            <div class="Rooms_layout-map">
              @include('pages.layout.doctor_room_components.room_timeline')

            </div>
        </div>

    </div>

    @include('pages.layout.footer')
