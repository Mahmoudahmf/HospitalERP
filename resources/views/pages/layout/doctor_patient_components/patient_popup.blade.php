   <main class="examination_description_main">
        <!----------------------------------Navbar-------------------------->
        <div class="examination_description_container">

            <!--------------------nav Popup---------------------------------->
            <nav class="examination_description_nav">

                <div class="examination_description_nav_left">
                    <div class="examination_description_nav_left_image">
                        <img src="./profile.jpg" alt="profile image">
                    </div>
                    <div class="examination_description_nav_left_name">
                        <span>Mohamed Ali</span>
                    </div>

                </div>

                <div class="examination_description_nav_right">
                    <div class="examination_description_nav_right_sign">
                        <span id="popup_close"><i class="far fa-times-circle fa-x"></i></span>
                    </div>
                    <div class="examination_description_nav_right_p">
                        <p class="examination_description_nav_right_p1">Examination</p>
                        <p class="examination_description_nav_right_p2">29 sep 2021</p>
                    </div>

                </div>
            </nav>

            <!-----------------------Input----------------------------------->


            <div class="examination_description_inputs">
                <div class="examination_description_input1_content">
                    <h4 class="examination_description_h1">Description</h4>
                    <textarea class="examination_description_input1" type="text"></textarea>
                </div>
                <div class="examination_description_input2_content">
                    <h4 class="examination_description_h2">Prescription</h4>
                    <textarea class="examination_description_input2" type="text" name="Description"></textarea>
                </div>
            </div>

            <!----------------------Four Cards----------------------------->

            <div class="examination_description_cards_container">

                <!-------------------- First Card ------------------------->


                <div class="examination_description_cards_container_card1">
                    <div class="card1_content">
                        <div class="left_content1">
                            <h4 class="left_content1_h">BLOOD PRESSURE</h4>
                            <p class="left_content1_p">in the Norm</p>
                        </div>

                        <div class="right_content1">
                            <h2 class="right_content1_h">
                                120/89
                            </h2>&nbsp;
                            <small class="right_content1_span">mm/hg

                            </small>

                        </div>
                    </div>


                    <div class="chart1">
                        <canvas id="myChartcard1" width="320" height="40"></canvas>
                    </div>
                </div>


                <!----------------- Second Cards  ------------------------->
                <div class="examination_description_cards_container_card2">
                    <div class="card2_content">
                        <div class="left_content2">
                            <h4 class="left_content2_h">GLUCOSE</h4>
                            <p class="left_content2_p">in the Norm</p>
                        </div>

                        <div class="right_content2">
                            <h2 class="right_content2_h">
                                79
                            </h2>&nbsp;
                            <small class="right_content2_span">mm/di

                            </small>

                        </div>
                    </div>


                    <div class="chart2">
                        <canvas id="myChartcard2" width="300" height="40"></canvas>
                    </div>
                </div>

                <!-------------------------Third Cards-------------------------->
                <div class="examination_description_cards_container_card3">
                    <div class="card3_content">
                        <div class="left_content3">
                            <h4 class="left_content3_h">Heart Rate</h4>
                            <p class="left_content3_p">in the Norm</p>
                        </div>

                        <div class="right_content3">
                            <h2 class="right_content3_h">
                                108
                            </h2>&nbsp;
                            <small class="right_content3_span">Beats per Min

                            </small>

                        </div>
                    </div>


                    <div class="chart3">
                        <canvas id="myChartcard3" width="300" height="40"></canvas>
                    </div>
                </div>
                <!------------------------------Fourth and last Cards ------------------------->
                <div class="examination_description_cards_container_card4">
                    <div class="card4_content">
                        <div class="left_content4">
                            <h4 class="left_content4_h">CHOLESTEROL</h4>
                            <p class="left_content4_p">in the Norm</p>
                        </div>

                        <div class="right_content4">
                            <h2 class="right_content4_h">
                                82
                            </h2>&nbsp;
                            <small class="right_content4_span">mm/di

                            </small>

                        </div>
                    </div>


                    <div class="chart4">
                        <canvas id="myChartcard4" width="300" height="40"></canvas>
                    </div>
                </div>
            </div>


            <!--upload Icon -->


            <div class="examination_description_upload_icon">
                <span class="examination_description_upload_icon_span"><i class="fas fa-file-import fa-2x"></i></span>
                <p class="examination_description_upload_icon_p"> &nbsp; Upload Radiology and Medical Analysis</p>
            </div>

            <div class="examination_description_date">
                <div class="next_consolution">
                    <h5>Next Consolution</h5>
                </div>

                <div class="next_date">
                    <p>08/08/2021 - 9/21/2021</p>
                    <span><i class="fas fa-calendar-day"></i></span>

                </div>
            </div>



        </div>
        </main>
