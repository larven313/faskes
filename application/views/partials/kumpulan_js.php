 <!--   Core JS Files   -->
 <script src="<?php echo base_url('assets/template/dist/js/core/popper.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/template/dist/js/core/bootstrap.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/template/dist/js/plugins/perfect-scrollbar.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/template/dist/js/plugins/smooth-scrollbar.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/template/dist/js/plugins/chartjs.min.js') ?>"></script>
 <script>
     var ctx = document.getElementById("chart-bars").getContext("2d");

     new Chart(ctx, {
         type: "bar",
         data: {
             labels: ["M", "T", "W", "T", "F", "S", "S"],
             datasets: [{
                 label: "Sales",
                 tension: 0.4,
                 borderWidth: 0,
                 borderRadius: 4,
                 borderSkipped: false,
                 backgroundColor: "rgba(255, 255, 255, .8)",
                 data: [50, 20, 10, 22, 50, 10, 40],
                 maxBarThickness: 6
             }, ],
         },
         options: {
             responsive: true,
             maintainAspectRatio: false,
             plugins: {
                 legend: {
                     display: false,
                 }
             },
             interaction: {
                 intersect: false,
                 mode: 'index',
             },
             scales: {
                 y: {
                     grid: {
                         drawBorder: false,
                         display: true,
                         drawOnChartArea: true,
                         drawTicks: false,
                         borderDash: [5, 5],
                         color: 'rgba(255, 255, 255, .2)'
                     },
                     ticks: {
                         suggestedMin: 0,
                         suggestedMax: 500,
                         beginAtZero: true,
                         padding: 10,
                         font: {
                             size: 14,
                             weight: 300,
                             family: "Roboto",
                             style: 'normal',
                             lineHeight: 2
                         },
                         color: "#fff"
                     },
                 },
                 x: {
                     grid: {
                         drawBorder: false,
                         display: true,
                         drawOnChartArea: true,
                         drawTicks: false,
                         borderDash: [5, 5],
                         color: 'rgba(255, 255, 255, .2)'
                     },
                     ticks: {
                         display: true,
                         color: '#f8f9fa',
                         padding: 10,
                         font: {
                             size: 14,
                             weight: 300,
                             family: "Roboto",
                             style: 'normal',
                             lineHeight: 2
                         },
                     }
                 },
             },
         },
     });


     var ctx2 = document.getElementById("chart-line").getContext("2d");

     new Chart(ctx2, {
         type: "line",
         data: {
             labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
             datasets: [{
                 label: "Mobile apps",
                 tension: 0,
                 borderWidth: 0,
                 pointRadius: 5,
                 pointBackgroundColor: "rgba(255, 255, 255, .8)",
                 pointBorderColor: "transparent",
                 borderColor: "rgba(255, 255, 255, .8)",
                 borderColor: "rgba(255, 255, 255, .8)",
                 borderWidth: 4,
                 backgroundColor: "transparent",
                 fill: true,
                 data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                 maxBarThickness: 6

             }],
         },
         options: {
             responsive: true,
             maintainAspectRatio: false,
             plugins: {
                 legend: {
                     display: false,
                 }
             },
             interaction: {
                 intersect: false,
                 mode: 'index',
             },
             scales: {
                 y: {
                     grid: {
                         drawBorder: false,
                         display: true,
                         drawOnChartArea: true,
                         drawTicks: false,
                         borderDash: [5, 5],
                         color: 'rgba(255, 255, 255, .2)'
                     },
                     ticks: {
                         display: true,
                         color: '#f8f9fa',
                         padding: 10,
                         font: {
                             size: 14,
                             weight: 300,
                             family: "Roboto",
                             style: 'normal',
                             lineHeight: 2
                         },
                     }
                 },
                 x: {
                     grid: {
                         drawBorder: false,
                         display: false,
                         drawOnChartArea: false,
                         drawTicks: false,
                         borderDash: [5, 5]
                     },
                     ticks: {
                         display: true,
                         color: '#f8f9fa',
                         padding: 10,
                         font: {
                             size: 14,
                             weight: 300,
                             family: "Roboto",
                             style: 'normal',
                             lineHeight: 2
                         },
                     }
                 },
             },
         },
     });

     var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

     new Chart(ctx3, {
         type: "line",
         data: {
             labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
             datasets: [{
                 label: "Mobile apps",
                 tension: 0,
                 borderWidth: 0,
                 pointRadius: 5,
                 pointBackgroundColor: "rgba(255, 255, 255, .8)",
                 pointBorderColor: "transparent",
                 borderColor: "rgba(255, 255, 255, .8)",
                 borderWidth: 4,
                 backgroundColor: "transparent",
                 fill: true,
                 data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                 maxBarThickness: 6

             }],
         },
         options: {
             responsive: true,
             maintainAspectRatio: false,
             plugins: {
                 legend: {
                     display: false,
                 }
             },
             interaction: {
                 intersect: false,
                 mode: 'index',
             },
             scales: {
                 y: {
                     grid: {
                         drawBorder: false,
                         display: true,
                         drawOnChartArea: true,
                         drawTicks: false,
                         borderDash: [5, 5],
                         color: 'rgba(255, 255, 255, .2)'
                     },
                     ticks: {
                         display: true,
                         padding: 10,
                         color: '#f8f9fa',
                         font: {
                             size: 14,
                             weight: 300,
                             family: "Roboto",
                             style: 'normal',
                             lineHeight: 2
                         },
                     }
                 },
                 x: {
                     grid: {
                         drawBorder: false,
                         display: false,
                         drawOnChartArea: false,
                         drawTicks: false,
                         borderDash: [5, 5]
                     },
                     ticks: {
                         display: true,
                         color: '#f8f9fa',
                         padding: 10,
                         font: {
                             size: 14,
                             weight: 300,
                             family: "Roboto",
                             style: 'normal',
                             lineHeight: 2
                         },
                     }
                 },
             },
         },
     });
 </script>
 <script>
     var win = navigator.platform.indexOf('Win') > -1;
     if (win && document.querySelector('#sidenav-scrollbar')) {
         var options = {
             damping: '0.5'
         }
         Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
     }
 </script>
 <!-- Github buttons -->
 <script async defer src="<?php echo base_url('https://buttons.github.io/buttons.js') ?>"></script>
 <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="<?php echo base_url('assets/template/dist/js/material-dashboard.min.js?v=3.0.4') ?>"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>