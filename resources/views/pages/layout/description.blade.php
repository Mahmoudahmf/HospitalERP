<!-- <div class="description-layout">
        <div class="image"></div>
        <div class="welcome"></div>
        <div class="countdown"></div>
  </div> -->


<div class="description-container">

              <!--image profile for Doctor -->

              <div class="description-img">
                  <img  class="card-img" src="{{asset('storage/images/users/profile.jpg')}}">
               </div>

                <!--Doctor information-->

                <div class="description-doctor">

                                <!-- Doctor Welcome Message -->

                                <div class="card-doctor-info">
                                      <h3 class=".card-doctor-h3">Welcome Dr.Fahmy Ahmed</h3>
                                      <p class="card-doctor-p">
                                         Welcome to my Hospital. I'm honored to be my physician, and I'm committed to providing
                                         you with the best care I can. My hope is that we form a partnership to keep  as hospital
                                          as possible.
                                      </p>
                                </div>
                                <!--Doctor Button to Call Nurse -->

                                <div class="card-buttons">
                                    <input  class="card-btn1" type="submit"  value="Call Nurse" />

                                    <input  class="card-btn2" type="submit"  value="Get Break" />
                                </div>

                </div>



               <div class=" description-clock">

                           <!--Count down time with two buttons include(Break tome and work time)-->

                            <div class="clock">

                                   <!--Count down time-->

                                   <div class="hour" id="countdown">
                                            <p class="hour-p" id="countdown-hour"> </p>
                                            <p class="minute-p" id="countdown-min"><p>
                                            <p id="countdown-sec" class="second-p"></p>
                                   </div>
                                   <!--Count Down Buttons -->

                                   <div class="buttons-hour">
                                        <div class="break">
                                             <p>Break Hours</p>
                                             <button type="submit" class="button-work" >
                                                    <span > 00:15:30 </span>
                                             </button>
                                        </div>


                                         <div class="break" >
                                               <p>Work Hours</p>
                                               <button type="submit"  class="button-break">
                                                   <span class="button-break-span">00: </span> 15: 30
                                               </button>

                                         </div>
                                   </div>
                            </div>
                            <!--Analog Clock -->

                            <div class="analog-clock" id="clock">
                            @include('pages.clock')
                            </div>
               </div>
    </div>


