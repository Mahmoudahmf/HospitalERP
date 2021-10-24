<div id="employes">
        <form  method='POST' action="{{route('createxam')}}" autocomplete="off">
            @csrf
             <table border="1" width="100%" height="auto">
               <tr>
                 <td>
                    <h4>حجز جديد خاص بـ</h4>
                    <h2>{{$patient->name}}</h2>
                    <input name="patienid" type="hidden" value="{{$patient->id}}" />
                 </td>
                 <td>
                    <select name="type">
                       <option selected disabled>Choose operation</option>
                       <option value="1">كشف</option>
                       <option value="2">عمليه</option>
                       <option value="3">زيارة</option>
                       <option value="4">أشعه</option>
                       <option value="5">تحاليل</option>
                    </select>
                 </td>
               </tr>
             </table>
             <table id="examination" border="1" width="100%" height="auto">
               <tr >
                 <td>
                    <select name="depart_id">
                        <option value="" selected disabled>Choose Depart</option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach;
                    </select>
                 </td>
                 <td>
                    <select name="doctor_id">
                        <option selected disabled value="">Choose Doctor</option>
                    </select>
                 </td>
                 <td>
                      <label>سعر الكشف</label>
                      <input value="" id="cost" name="cost" readonly size="4" />
                 </td>
                 <td>
                      <label>رقم الغرفة</label>
                      <input value="" id="room_no" name="room_no" readonly  size="4" />

                 </td>
              
               <td>
                  <label>ملاحظات</label>
                  <textarea name="description"></textarea>
               </td>
              </tr>
             </table>
             {{---Rays--}}
             <table id="rays">
                <tr>
                  <td>
                      <select name="rays">
                          <option value="" disabled selected>Choose rays</option>
                          @foreach($rays as $rays)
                             <option value="{{$rays->id}}">{{$rays->name}} / price >> {{$rays->cost}}</option>
                          @endforeach
                      </select>
                  </td>
                </tr>
             </table>
             {{--Analytics--}}
             <table id="Analytics">
                <tr>
                  <td>
                      <select name="Analytics">
                          <option value="" disabled selected>Choose Analytics</option>
                          @foreach($Analytics as $Analytic)
                             <option value="{{$Analytic->id}}">{{$Analytic->name}} / price >> {{$Analytic->cost}}</option>
                          @endforeach
                      </select>
                  </td>
                </tr>
             </table>
             <br/>
             <input type="submit" value="حفظ" >
              <hr>

        </form>
</div>
<script language="JavaScript" type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script>
        $(document).ready(function () {
            $('select[name="depart_id"]').on('change', function () {
                var depart_id = $(this).val();
                document.getElementById("room_no").value='';
                document.getElementById('cost').value='';
                if (depart_id) {
                    $.ajax({
                        url: "{{ URL::to('get_doctors') }}/" + depart_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="doctor_id"]').empty();
                            $('select[name="doctor_id"]').append('<option selected disabled>Choose</option>');
                            $.each(data, function (key, value) {
                                $('select[name="doctor_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                }
                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>

<script>
        $(document).ready(function () {
            $('select[name="doctor_id"]').on('change', function () {
               
                var doctor_id = $(this).val();
                if (doctor_id) {
                    $.ajax({
                        url: "{{ URL::to('getroom') }}/" + doctor_id,
                        type: "GET",
                         dataType: "json",
                         success: function(data) {
                            document.getElementById("room_no").value=data;
                    },
                    });

                    $.ajax({
                        url: "{{ URL::to('getdoctorprice') }}/" + doctor_id,
                        type: "GET",
                         dataType: "json",
                         success: function(data) {
                            document.getElementById("cost").value=data;
                            
                    },
                    });

                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>

    <!-- appear type of operation -->
    <script>
     $(document).ready(function() {
            $('#examination').hide();
            $('#rays').hide();
            $('#Analytics').hide();
            $('select[name="type"]').on('change', function () {
               var type_id = $(this).val();
               if (type_id==1)
                   {
                      $('#examination').show();
                      $('#rays').hide();
                      $('#Analytics').hide();
                   }
                   else if(type_id==4)
                    {
                        $('#rays').show();
                        $('#examination').hide();
                        $('#Analytics').hide();
                     }
                     else if(type_id==5)
                    {
                        $('#Analytics').show();
                        $('#examination').hide();
                        $('#rays').hide();
                     }

                     else
                     {
                        $('#examination').hide();
                        $('#rays').hide();
                        $('#Analytics').hide();
                     }
                 });
               });
    </script>