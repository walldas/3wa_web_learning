var ctx = $("#myChart");
// var myDoughnutChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: data,
//     options: options
// });
// var data = {
//     labels: [
//         "HTML",
//         "CSS",
//         "JavaScript"
//     ],
//     datasets: [
//         {
//             data: [300, 50, 100],
//             backgroundColor: [
//                 "#FF6384",
//                 "#36A2EB",
//                 "#FFCE56"
//             ],
//             hoverBackgroundColor: [
//                 "#FF6384",
//                 "#36A2EB",
//                 "#FFCE56"
//             ]
//         }]
// };

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["HTML", "CSS", "JavaScript"],
        datasets: [{
            // label: '# of Votes',
            data: [40, 2, 50],
            backgroundColor: [
                '#ff0000',
                '#00ff00',
                '#0000ff'
            ],
            borderColor: [
                '#f5ae28',
                '#ffffff',
                '#f4813a'
            ],
            hoverBackgroundColor:[
            	'#aa0000',
                '#00aa00',
                '#0000aa'
            ]
        }]
    },
  
});