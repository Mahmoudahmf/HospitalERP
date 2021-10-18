     @include('pages.layout.header')


  <div class="Patient-container">

        <!--Patient Side Bar -->
        <div class="Patient-side"  id="Patient-side">
              @include('pages.layout.side_menu')
        </div>


<!-------------------------------------------------------------------------------->
        <!--Patient Nav Bar -->
        <div class="Patient-nav">

               @include('pages.layout.navbar')
            <button  id="showMyMenu" >
                <i class="collapse-icon fas fa-chevron-circle-down"></i>
            </button>
        </div>


<!------------------------------------------------------------------------------>




        <!--Patient Examination - Chart -->

        <div class="Examination-patient">

                    @include('pages.layout.doctor_patient_components.patient_examinationChart')
        </div>


<!-------------------------------------------------------------------------------->

        <div class="Consultant-patient">
                    @include('pages.layout.doctor_patient_components.patient_consultantChart')
        </div>

<!------------------------------------------------------------------------------------->

        <div class="Examination-date">
                    @include('pages.layout.doctor_patient_components.patient_nextPatient')
        </div>

<!----------------------------------------------------------------------------------------------->

        <div class="patient-overview">
                    @include('pages.layout.doctor_patient_components.patient_chart')
        </div>


<!---------------------------------------------------------------------------------------->
        <div class="filtersAndTable">

                    @include('pages.layout.doctor_patient_components.patient_filterTable')
            <!-- <div class="edit-filters"></div>
            <div class="patient-data"></div> -->
        </div>


    </div>

    @include('pages.layout.footer')
