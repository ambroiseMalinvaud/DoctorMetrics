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

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        var options = {'title':'Évolution de vos résultats',
                       'width':500,
                       'height':300};

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