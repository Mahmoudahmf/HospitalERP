

let myChartCircle1 = new Chart("chartProgress-1", {
    type: "doughnut",
    data: {
        datasets: [
            {
                label: "surgery rooms",
                percent: 30,
                backgroundColor: ["blue"],
                borderWidth: [0.9],
                color: "blue",
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
                let width = chart.width,
                    height = chart.height,
                    ctx = chart.ctx;
                ctx.restore();

                let fontSize = (height / 110).toFixed(2);
                ctx.font = fontSize + "em sans-serif";
                ctx.fillStyle = "black";
                ctx.textBaseline = "middle";
                ctx.backgroundColor = "black";

                let text = chart.data.datasets[0].percent + "%",
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

//--------------------------------2

let myChartCircle2 = new Chart("chartProgress-2", {
    type: "doughnut",
    data: {
        datasets: [
            {
                label: "surgery rooms",
                percent: 50,
                backgroundColor: ["red"],
                color: "red",
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
                let width = chart.width,
                    height = chart.height,
                    ctx = chart.ctx;
                ctx.restore();
                let fontSize = (height / 110).toFixed(2);
                ctx.font = fontSize + "em sans-serif";
                ctx.fillStyle = "black";
                ctx.textBaseline = "middle";
                ctx.backgroundColor = "black";
                let text = chart.data.datasets[0].percent + "%",
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

//--------------------------------3
let myChartCircle3 = new Chart("chartProgress-3", {
    type: "doughnut",
    data: {
        datasets: [
            {
                label: "surgery rooms",
                percent: 70,
                backgroundColor: ["green"],
                color: "green",
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
                let width = chart.width,
                    height = chart.height,
                    ctx = chart.ctx;
                ctx.restore();
                let fontSize = (height / 110).toFixed(2);
                ctx.font = fontSize + "em sans-serif";
                ctx.fillStyle = "black";
                ctx.textBaseline = "middle";
                ctx.backgroundColor = "black";
                let text = chart.data.datasets[0].percent + "%",
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

// ----------------------------------------------------------------

// const myChartCircle = new Chart("chartProgress", {
//   type: 'doughnut',
//   data={
//     labels: [
//       'Red',
//       'Blue',
//       'Yellow'
//     ],
//     datasets: [{
//       label: 'My First Dataset',
//       data: [300, 50, 100],
//       backgroundColor: [
//         'rgb(255, 99, 132)',
//         'rgb(54, 162, 235)',
//         'rgb(255, 205, 86)'
//       ],
//       hoverOffset:4
//   }]

// }
// })

//------------------------------------------------------------
