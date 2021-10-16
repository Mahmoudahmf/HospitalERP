  @section('boxCharts')



  <div class="progress-chart-container">
    <h2 class="progress-chart-container-header">Rooms Progress</h2>

    <div class="progress-container">

      <div class="block-container-3 ">
        <p class="block-container-p-3">Examine Room</p>
        <div class="chartProgress-green">
          <canvas id="chartProgress-3"></canvas>
        </div>
      </div>

      <div class="block-container-1">
        <p class="block-container-p-1 "> Surgery Rooms </p>
        <div class="chartProgress-blue">
          <canvas id="chartProgress-1"></canvas>
        </div>
      </div>

      <div class="block-container-2 ">
        <p class="block-container-p-2"> Urgrnt </p>
        <div class="chartProgress-red">
          <canvas id="chartProgress-2"></canvas>
        </div>
      </div>

    </div>
  </div>

@show
