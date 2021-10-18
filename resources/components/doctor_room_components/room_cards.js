let ctx = document.getElementById("myChart").getContext("2d");

    const gradientBg = ctx.createLinearGradient(0, 0, 0, 200);
    gradientBg.addColorStop(0, "#2ED573");
    gradientBg.addColorStop(0.2, "white");
// gradientBg.addColorStop(1, "black");


    ctx.setLineDash([5, 15]);


    let myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            hidden: true,
            datasets: [
                {
                    pointRadius: 0,
                    label: " ",
                    data: [12, 15, 10, 0, 15, 4],
                    borderDash: [3, 3],
                    borderCapStyle: "5",
                    color: "#2ED573",
                    backgroundColor: gradientBg,
                    fill: true,
                    borderColor: ["#2ED573"],
                    borderWidth: 2,
                },

            ],
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                    labels: {
                        color: 'rgb(255, 99, 132)'
                    }
                }
            },
            elments: {},
            bezierCurve: true,
            lineTension: 1,

            responsive: true,
            scales: {
                y: {
                    display: false,
                    beginAtZero: true,
                },
                x: {
                    display: false,
                    beginAtZero: true,
                },
            },
        },

    });
// //////////////////////////////////////////////////////////////////////////////////////////////////////////////
// let ctx1 = document.getElementById("myChart1").getContext("2d");
//
// const gradientBg1 = ctx1.createLinearGradient(0, 0, 0, 200);
// gradientBg1.addColorStop(0, "#70A1FF");
// gradientBg1.addColorStop(0.2, "white");
// // gradientBg.addColorStop(1, "black");
//
//
//
// ctx1.setLineDash([5, 15]);
//
//
// let myChart1 = new Chart(ctx1, {
//     type: "line",
//     data: {
//         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
//         hidden: true,
//         datasets: [
//             {
//                 pointRadius: 0,
//                 label: " ",
//                 data: [10, 5, 20, 8, 0, 4],
//                 borderDash: [3, 3],
//                 borderCapStyle: "5",
//                 color: "#70A1FF",
//                 backgroundColor: gradientBg1,
//                 fill: true,
//                 borderColor: ["#70A1FF"],
//                 borderWidth: 2,
//             },
//
//         ],
//     },
//     options: {
//         plugins: {
//             legend: {
//                 display: false,
//                 labels: {
//                     color: 'rgb(255, 99, 132)'
//                 }
//             }
//         },
//         elments: {},
//         bezierCurve: true,
//         lineTension: 1,
//
//         responsive: true,
//         scales: {
//             y: {
//                 display: false,
//                 beginAtZero: true,
//             },
//             x: {
//                 display: false,
//                 beginAtZero: true,
//             },
//         },
//     },
//
// });
// // //////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// let ctx2 = document.getElementById("myChart2").getContext("2d");
//
// const gradientBg2 = ctx2.createLinearGradient(0, 0, 0, 200);
// gradientBg2.addColorStop(0, "#FECD54");
// gradientBg2.addColorStop(0.2, "white");
// // gradientBg.addColorStop(1, "black");
//
//
//
// ctx2.setLineDash([5, 15]);
//
//
// let myChart2 = new Chart(ctx2, {
//     type: "line",
//     data: {
//         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
//         hidden: true,
//         datasets: [
//             {
//                 pointRadius: 0,
//                 label: " ",
//                 data: [0, 20, 0, 8, 0, 4],
//                 borderDash: [3, 3],
//                 borderCapStyle: "5",
//                 color: "#FECD54",
//                 backgroundColor: gradientBg2,
//                 fill: true,
//                 borderColor: ["#FECD54"],
//                 borderWidth: 2,
//             },
//
//         ],
//     },
//     options: {
//         plugins: {
//             legend: {
//                 display: false,
//                 labels: {
//                     color: 'rgb(255, 99, 132)'
//                 }
//             }
//         },
//         elments: {},
//         bezierCurve: true,
//         lineTension: 1,
//
//         responsive: true,
//         scales: {
//             y: {
//                 display: false,
//                 beginAtZero: true,
//             },
//             x: {
//                 display: false,
//                 beginAtZero: true,
//             },
//         },
//     },
//
// });
//
// // //////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// let ctx3 = document.getElementById("myChart3").getContext("2d");
//
// const gradientBg3 = ctx3.createLinearGradient(0, 0, 0, 200);
// gradientBg3.addColorStop(0, "#D24646");
// gradientBg3.addColorStop(0.2, "white");
//
//
//
// ctx3.setLineDash([5, 15]);
//
//
// let myChart3 = new Chart(ctx3, {
//     type: "line",
//     data: {
//         labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
//         hidden: true,
//         datasets: [
//             {
//                 pointRadius: 0,
//                 label: " ",
//                 data: [20, 20, 0, 8, 20, 20],
//                 borderDash: [3, 3],
//                 borderCapStyle: "5",
//                 color: "#D24646",
//                 backgroundColor: gradientBg3,
//                 fill: true,
//                 borderColor: ["#D24646"],
//                 borderWidth: 2,
//             },
//
//         ],
//     },
//     options: {
//         plugins: {
//             legend: {
//                 display: false,
//                 labels: {
//                     color: 'rgb(255, 99, 132)'
//                 }
//             }
//         },
//         elments: {},
//         bezierCurve: true,
//         lineTension: 1,
//
//         responsive: true,
//         scales: {
//             y: {
//                 display: false,
//                 beginAtZero: true,
//             },
//             x: {
//                 display: false,
//                 beginAtZero: true,
//             },
//         },
//     },
//
// });
