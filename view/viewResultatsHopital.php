<html>
	
<head> 
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleResultatsDelHopital.css">
	<link rel="stylesheet" href="public/css/styleHeader.css">
  	<link rel="stylesheet" href="public/css/styleFooter.css">
  	<link rel="icon" type="image/png" href="public/Images/Logo-Doctor-Metrics.png" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Statut');
        data.addColumn('number', "Nombre d'utilisateurs");
        data.addRows([
          ['Apte', <?php echo $number1;?>],
          ['Inapte', <?php echo $number2;?>]
        ]);
        var options = {'title':"Pourcentage d'utilisateurs aptes",
                       'width':400,
                       'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
	
<body>
<div id="mainBlock">
<?php require('header.html'); ?>

    
<div id="resultatDelHopital">
		<div id="chart_div"></div>
</div>
</div>

<?php require('footer.html'); ?>
</body> 
	
</html>