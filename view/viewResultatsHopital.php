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
<<<<<<< HEAD

      google.charts.setOnLoadCallback(drawCapable);

      function drawCapable() {

=======
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
>>>>>>> d8ebc461147ddee64baeead6eb90986f81e58cbc
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Statut');
        data.addColumn('number', "Nombre d'utilisateurs");
        data.addRows([
          ['Apte', <?php echo $number1;?>],
          ['Inapte', <?php echo $number2;?>]
        ]);
        var options = {'title':"Pourcentage d'utilisateurs aptes",
<<<<<<< HEAD
                       'width':700,
                       'height':500,
                        colors: ['ForestGreen', 'red'],
                        fontName: 'Bahnschrift Regular',
                        fontSize: '17'};

        var chart = new google.visualization.PieChart(document.getElementById('chartCapable'));
=======
                       'width':400,
                       'height':300};
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
>>>>>>> d8ebc461147ddee64baeead6eb90986f81e58cbc
        chart.draw(data, options);
      }
    </script>
</head>
	
<body>
<div id="mainBlock">
<?php require('header.html'); ?>

<h2 id="title">Résultats des autres utilisateurs</h2>
    
<div id="resultatDelHopital">
<<<<<<< HEAD
	<div id="chartCapable"></div>
=======
		<div id="chart_div"></div>
>>>>>>> d8ebc461147ddee64baeead6eb90986f81e58cbc
</div>

</div>

<?php require('footer.html'); ?>
</body> 
	
</html>