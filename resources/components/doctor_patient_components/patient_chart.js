// // multible doughunt
//
// // -------------------------------------------------------------------------------------------
//
// let dnct1 = document.getElementById("MultiDoeNut");
// let myChart1 = new Chart(dnct1, {
//     type: "doughnut",
//     data: {
//         labels: [],
//         datasets: [
//             {
//                 label: [""],
//                 data: ["15", "15", "15", "15"],
//                 borderWidth: 3,
//                 hoverOffset: 0,
//                 borderColor: "white",
//                 backgroundColor: ["blue", "red", "green", "orange"],
//                 cutout: "90%",
//                 borderRadius: "5",
//                 spacing: "9",
//             },
//         ],
//     },
//     options: {
//         layout: {
//             //   padding: {
//             //     bottom: 0,
//             //   },
//         },
//         plugins: {
//             tooltip: {
//                 enabled: true,
//
//                 callbacks: {
//                     footer: (ttItem) => {
//                         let sum = 0;
//                         let dataArr = ttItem[0].dataset.data;
//                         dataArr.map((data) => {
//                             sum += Number(data);
//                         });
//
//                         let percentage = ((ttItem[0].parsed * 100) / sum).toFixed(1) + "%";
//                         return `Percentage of data: ${percentage}`;
//                     },
//                 },
//             },
//         },
//     },
//     plugins: [],
// });
