
      @section('cards')



    <!----------------------Rooms page------------------------->

    <!--contain four card-->
   <div class="rooms-cards-container">

        <!--first card-->
        <div class="rooms-card">
            <div class="rooms-card-row">
                    <p class="room-card-title"> EXAMINE ROOMS</p>

                    <div class="rooms-card-chart">
                        <canvas id="myChart" width="250px" height="50px"> </canvas>
                    </div>
            </div>
            <div class="room-card-number">
                <p  class="number">19</p>
                <p class="today">Today</p>
            </div>

        </div>

        <!--Second Card-->
        <div class="rooms-card">
            <!-- <p class="room-card-title"> EXAMINE ROOMS</p> -->
            <div class="rooms-card-row">
                    <p class="room-card-title"> SURGERY ROOMS </p>

                    <div class="rooms-card-chart">
                        <canvas id="myChart1" width="250px" height="50px"> </canvas>
                    </div>
            </div>
            <div class="room-card-number">
                <p class="number">03</p>
                <p class="today">Today</p>
            </div>

        </div>

        <!--Third Card-->
        <div class="rooms-card">
            <!-- <p class="room-card-title"> EXAMINE ROOMS</p> -->
            <div class="rooms-card-row">
                    <p class="room-card-title"> VACCUM ROOMS </p>

                    <div class="rooms-card-chart">
                        <canvas id="myChart2" width="250px" height="50px"> </canvas>
                    </div>
            </div>
            <div class="room-card-number">
                <p class="number">08</p>
                <p class="today">Today</p>
            </div>
        </div>

        <!--Fourth and last Card-->
        <div class="rooms-card">
            <!-- <p class="room-card-title"> EXAMINE ROOMS</p> -->
            <div class="rooms-card-row">
                <p class="room-card-title"> URGENT </p>

                <div class="rooms-card-chart">
                    <canvas id="myChart3" width="250px" height="50px"> </canvas>
                </div>
            </div>
            <div class="room-card-number">
                <p class="number">10</p>
                <p class="today">Today</p>
            </div>

        </div>

    </div>

    @show
