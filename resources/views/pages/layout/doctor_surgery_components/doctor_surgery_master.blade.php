   @include('pages.layout.header')
   <div class="SurgeryContainer">

        <div class="SurgerySide">
             @include('pages.layout.side_menu')
         </div>


        <div class="SurgeryNav">
            @include('pages.layout.navbar')
        </div>

        <div class="leftComponent"></div>
        <div class="rightComponent"></div>


        <div class="SurgeryTable">
            @include('pages.layout.doctor_surgery_components.doctor_surgery_table')
        </div>
    </div>



       @include('pages.layout.footer')
