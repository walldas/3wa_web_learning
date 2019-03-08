var ctx = $("#myChart");

var data = {
  labels: [
    "HTML",
    "CSS",
    "JavaScript"
  ],
  datasets: [
  {
    data: [
      33, 
      33, 
      33
    ],
    backgroundColor: [
      "#f5ae28",
      "#f3453c",
      "#f4813a",
    ],
    hoverBackgroundColor: [
      "#FF6384",
      "#36A2EB",
      "#FFCE56"
    ]
  }]
};

var options = {
  legend: {
    display: false
  }
};

var myDoughnutChart = new Chart(ctx, {
  type: 'doughnut',
  data: data,
  options: options
});