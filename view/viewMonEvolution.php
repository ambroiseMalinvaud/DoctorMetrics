<!doctype html>
<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleMonEvolution.css">
	<link rel="stylesheet" href="public/css/styleHeader.css">
  	<link rel="stylesheet" href="public/css/styleFooter.css">
  	<link rel="icon" type="image/png" href="public/Images/Logo-Doctor-Metrics.png" />

  	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart'], 'language': 'fr'});

      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.arrayToDataTable([
          ['Date', 'Rythme cardiaque', 'Temps de réaction'],
          <?php 
          while ($data = $req->fetch()){
            echo "[' ".(int)$data['dateOfTest']."', ".(int)$data['heartRate'].", ".(int)$data['reactionTime']."],";
          }
          ?>

        ]);

        var options = {'title':'Évolution de vos résultats',
                       'width':700,
                       'height':500};

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
	
<body>
<div id="mainBlock">
	<?php require('header.html'); ?>

	<div id="chart_div"></div>

</div>
	
<?php require('footer.html'); ?>

</body>
	
</html>