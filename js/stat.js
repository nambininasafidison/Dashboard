const chartTraffic = document.getElementById('chart-traffic');

new Chart(chartTraffic, {
    type: 'line',
    data: {
      labels: ['', '', '', '', '', ''],
      datasets: [{
        data: [12, 19, 3, 5, 2, 3],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          stepSize:100
        },
        x: {
          grid:{
            display:false
          }
        }
      },
      borderRadius:10
    }
});

//chart-traffic-content
//'doughnut

const chartTrafficContent = document.getElementById('chart-traffic-content');

new Chart(chartTrafficContent, {
    type: 'doughnut',
    data: {
      datasets: [{
        label: 'Analyse du traffic réseau',
        data: [12, 19, 3],
      }]
    }
});

//chart-sitePop

const chartSitePop = document.getElementById('chart-sitePop');

new Chart(chartSitePop ,{
  type: 'bar',
  data: {
    datasets: [{
      data: [20, 10 , 30],
    }],
    labels: ['site1', 'site2' , 'site3']
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    },
    borderRadius:10
  }
})

//chart-proxyCharge

const chartProxyCharge = document.getElementById('chart-proxyCharge');

new Chart(chartProxyCharge , {
  type: 'pie',
  data: {
    datasets: [{
      data: [65 , 35 ],
    }],
    labels: ['utilisé', 'libre']
  }
})