// // ----------------------------------------------progress single doughunt first one ----------------------------------
//
// // -------------------setup block ---------------------------
//
// let targetPercentage = 70;
// let remain = 100 - targetPercentage;
// let dataValues = [targetPercentage, remain];
// const data = {
//     // labels: [],
//     datasets: [
//         {
//             label: [""],
//             data: dataValues,
//             borderWidth: 3,
//             hoverOffset: 0,
//             borderColor: ["white", "white"],
//             backgroundColor: ["#70A1FF", "#DAD7FE"],
//             cutout: "85%",
//             borderRadius: "10",
//             // circumference: "180",
//             // spacing: "9",
//         },
//     ],
// };
//
// //--------------counter block
//
// //---------------------------------------------
//
// const counter2 = {
//     id: "counter",
//     beforeDraw(chart, args, options) {
//         const {
//             ctx,
//             chartArea: { top, right, bottom, left, width, height },
//         } = chart;
//
//         ctx.save();
//         // how to get the position
//         //ctx.fillStyle = "black";
//         //ctx.fillRect(width / 2, top + height / 2, 10, 10);
//         //x0 = starting point in the horizontal level l/r
//         //y0 = starting point in the vertical level t/b
//         //x1 = the lenght of shape in px in horizontal level
//         //y1 = the lenght of shape in px in vertical level
//
//         // how to write text
//
//         ctx.font = "40px sans-serif";
//         ctx.textAlign = "center";
//         ctx.fillStyle = "white";
//         ctx.fillText(dataValues[0] + "%", width / 2, top + height / 2, 60, 60);
//     },
// };
//
// // -------------config block
//
// const config = {
//     type: "doughnut",
//     data,
//     options: {
//         plugins: {
//             counter: {},
//         },
//     },
//     plugins: [counter],
// };
//
// // ------------------------render init block
//
// const myChart = new Chart(document.getElementById("chartProgress-4"), config);
