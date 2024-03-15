const chartTraffic = document.getElementById('chart-traffic');

new Chart(chartTraffic, {
    type: 'line',
    data: {
      labels: ['', '', '', '', '', ''],
      datasets: [{
        label: 'Analyse du traffic réseau',
        data: [12, 19, 3, 5, 2, 3],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
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