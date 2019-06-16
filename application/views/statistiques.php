<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wemanity | Statistiques</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo url('css/mdb.min.css'); ?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo url('css/style.css'); ?>" rel="stylesheet">






</head>

<body onload="read()">

<!-- Start your project here-->
<!--Main Navigation-->
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <?php
    require ('navbar.php')
    ?>
<div class="head2">

  <div class=" text-center logo">
    <img class="imagelogo" src="<?php echo url('/images/logo.png'); ?>">
  </div>
  <div class="toggle-button d-inline-block d-lg-none">
    <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
  </div>
  <div id="clockdiv2">

      <div>
        <span class="days"></span>
        <div class="smalltext">Jours</div>
      </div>

      <div>
        <span class="hours"></span>
        <div class="smalltext">Heures</div>
      </div>

      <div>
        <span class="minutes"></span>
        <div class="smalltext">Minutes</div>
      </div>

      <div>
        <span class="seconds"></span>
        <div class="smalltext">Secondes</div>
      </div>

    </div>

</div>


</header>
<!--Main Navigation-->
<div class="container-fluid mt-5">
<div  class="text-center"><h1 id="titre" class="titre">Évolution de l'épidémie Intelectron</h1></div>
    <div class="row graphs ">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Répartition par âge des malades</h5>
                    <canvas id="myChart" style="max-width: 500px;"></canvas>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Détails malades</h5>
                    <div class="row text-center">
                        <div class="col-md-6">
                            <h4>5 800</h4>
                            <h5><span class="label red badge">Nouveaux cas <i class="fas fa-arrow-circle-up"></i></span></h5>
                        </div>
                        <div class="col-md-6">
                            <h4>5%</h4>
                            <h5><span class="label red badge">Pris en charge <i class="fas fa-arrow-circle-up"></i></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row graphs">
        <div id="map" style="width:100%; height:400px;"></div>
    </div>
</div>
<!-- /Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?php echo url('js/jquery-3.3.1.min.js'); ?>"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo url('js/popper.min.js'); ?>"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo url('js/mdb.min.js'); ?>"></script>
 
<script type="text/javascript" src="<?php echo url('js/clock.js'); ?>"></script>
<script src="<?php echo url('js/mapdata/highmaps.js'); ?>"></script>
<script src="<?php echo url('js/mapdata/exporting.js'); ?>"></script>
<script src="<?php echo url('js/mapdata/drilldown.js'); ?>"></script>
<script src="<?php echo url('js/mapdata/world-continents.js'); ?>"></script>
<script src="<?php echo url('js/mapdata/europe.js'); ?>"></script>
<script src="<?php echo url('js/mapdata/africa.js'); ?>"></script>
<script src="//code.responsivevoice.org/responsivevoice.js?key=1pDkkaGO"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["1 à 10", "11 à 20", "21 à 30", "31 à 40", "40 à 50", "60 à 90"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    $(function () {
        $('.min-chart#chart-sales').easyPieChart({
            barColor: "#4caf50",
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });

        $('.min-chart#chart-sales2').easyPieChart({
            barColor: "#e60028",
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });





    })

    $(function () {

        // Initiate the chart
        $('#map').highcharts('Map', {
            title: {
                text: 'Nombre des invalides par continent'
            },

            chart: {
                events: {
                    drilldown: function (e) {
                        if (!e.seriesOptions) {
                            var chart = this,
                                pointWithLatLon = function (point, latLon) {
                                    return Highcharts.merge(point, chart.transformFromLatLon(latLon,
                                        Highcharts.maps['custom/africa']['hc-transform']['default']));
                                };

                            chart.addSeriesAsDrilldown(e.point, {
                                mapData: Highcharts.maps['custom/africa'],
                                joinBy: 'hc-key',
                                data: [
                                    {'hc-key': 'gr', value: 4},
                                    {'hc-key': 'dk', value: 2},
                                    {'hc-key': 'gb', value: 2},
                                    {'hc-key': 'fr', value: 2},
                                    {'hc-key': 'ru', value: 5}
                                ]
                            });

                            chart.addSeries({
                                id: 'cities',
                                name: 'Cities',
                                type: 'mappoint',
                                color: 'black',
                                marker: {
                                    symbol: 'circle'
                                },
                                data: [
                                    pointWithLatLon({ na,me: 'Paris' }, { lat: 48.8567, lon: 2.3508}),
                                    pointWithLatLon({ name: 'Bucharest' }, { lat: 44.4325, lon: 26.103889}),
                                    pointWithLatLon({ name: 'Riga' }, { lat: 56.948889, lon: 24.106389})
                                ]
                            });
                        }
                    },
                    drillup: function (e) {
                        this.get('cities').remove();
                    }
                }
            },

            colorAxis: {
                min: 0
            },

            series : [{
                data : [{
                    'hc-key': 'af',
                    drilldown: true,
                    value: 1
                }],
                mapData: Highcharts.maps['custom/world-continents'],
                joinBy: 'hc-key',
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }]
        });
    });


</script>
  <script>
function read(){
 responsiveVoice.setDefaultVoice("French Female");
 
}
</script>
<script>
  Mousetrap.bind('enter', function(e) {
    responsiveVoice.speak($('h1').text());
    responsiveVoice.cancel();
    responsiveVoice.speak($('h5').text());
    responsiveVoice.cancel();
    responsiveVoice.speak($('h4').text());
});
Mousetrap.bind('escape', function(e) {
window.location.replace("https://hinawebcup.herokuapp.com/");
});

  </script>
</body>

</html>
