//  DONUT 1

var options = {
    series: [44, 56],
    labels: ['PAGOS', 'NÃO PAGOS'],
    colors: ['#00E396','#FF4242'],
    chart: {
    type: 'donut',
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 100
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

//  DONUT 2


  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();

  var options = {
    series: [44, 56],
    labels: ['PAGOS', 'NÃO PAGOS'],
    colors: ['#00E396','#FF4242'],
    chart: {
    type: 'donut',
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 100
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

//  DONUT 3


  var chart = new ApexCharts(document.querySelector("#chart2"), options);
  chart.render();

  var options = {
    series: [44, 56],
    labels: ['PAGOS', 'NÃO PAGOS'],
    colors: ['#00E396','#FF4242'],
    chart: {
    type: 'donut',
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 100
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#chart3"), options);
  chart.render();