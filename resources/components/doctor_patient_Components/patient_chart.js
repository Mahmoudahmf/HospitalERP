
var myChartCircle6 = new Chart("chartProgress-6", {
    type: "doughnut",
    data: {
        datasets: [
            {
                label: "surgery rooms",
                percent: 50,
                backgroundColor: ["#00ff22"],
                color: "orange",
            },
        ],
    },
    plugins: [
        {
            beforeInit: (chart) => {
                const dataset = chart.data.datasets[0];
                chart.data.labels = [dataset.label];
                dataset.data = [dataset.percent, 100 - dataset.percent];
            },
        },
        {
            beforeDraw: (chart) => {
                var width = chart.chart.width,
                    height = chart.chart.height,
                    ctx = chart.chart.ctx;
                ctx.restore();
                var fontSize = (height / 110).toFixed(2);
                ctx.font = fontSize + "em sans-serif";
                ctx.fillStyle = "black";
                ctx.textBaseline = "middle";
                ctx.backgroundColor = "black";
                var text = chart.data.datasets[0].percent + "%",
                    textX = Math.round((width - ctx.measureText(text).width) / 2),
                    textY = height / 2;
                ctx.fillText(text, textX, textY);
                ctx.save();
            },
        },
    ],
    options: {
        maintainAspectRatio: false,
        cutoutPercentage: 85,
        rotation: Math.PI / 2,
        legend: {
            display: false,
        },
        tooltips: {
            filter: (tooltipItem) => tooltipItem.index == 0,
        },
    },
});
