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

      google.charts.setOnLoadCallback(drawHeartRate);

      google.charts.setOnLoadCallback(drawReactionTime);

      google.charts.setOnLoadCallback(drawSoundRecognition);

      google.charts.setOnLoadCallback(drawColorRecognition);

      google.charts.setOnLoadCallback(drawSkinTemperature);

      function drawReactionTime() {

        var data = new google.visualization.arrayToDataTable([
          ['Date', 'ms'],
          <?php 
          while ($data = $req->fetch()){

            echo "[' ".$data['dateOfTest']."', ".(int)$data['reactionTime']."],";
          }
          ?>

        ]);

        var options = {'title':'Évolution de votre temps de réaction',
                      'width':700,
                      'height':500,
                      colors: ['RoyalBlue'],
                      vAxis: {minValue: 200},
                      vAxis: {title: 'Temps de réaction en millisecondes (ms)'},
                      fontName: 'Bahnschrift Regular',
                      fontSize: '17'};

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('chartReactionTime'));
        chart.draw(data, options);
      }

      function drawHeartRate() {

        var data = new google.visualization.arrayToDataTable([
          ['Date', 'bpm'],
          <?php 
          while ($data = $req2->fetch()){

            echo "[' ".$data['dateOfTest']."', ".(int)$data['heartRate']."],";
          }
          ?>

        ]);

        var options = {'title':'Évolution de votre rythme cardiaque',
                      'width':700,
                      'height':500,
                      colors: ['red'],
                      vAxis: {minValue: 60},
                      vAxis: {title: 'Battements par minute (bpm)'},
                      fontName: 'Bahnschrift Regular',
                      fontSize: '17'};

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('chartHeartRate'));
        chart.draw(data, options);
      }

      function drawSoundRecognition() {

        var data = new google.visualization.arrayToDataTable([
          ['Date', 'Note sur 10'],
          <?php 
          while ($data = $req3->fetch()){

            echo "[' ".$data['dateOfTest']."', ".(int)$data['soundRecognition']."],";
            
          }
          ?>

        ]);

        var options = {'title':'Évolution de votre note au test de son',
                      'width':700,
                      'height':500,
                      colors: ['grey'],
                      vAxis: {minValue: 0},
                      vAxis: {title: 'Note sur 10'},
                      fontName: 'Bahnschrift Regular',
                      fontSize: '17'};

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('chartSoundRecognition'));
        chart.draw(data, options);
      }

      function drawColorRecognition() {

        var data = new google.visualization.arrayToDataTable([
          ['Date', 'Note sur 10'],
          <?php 
          while ($data = $req4->fetch()){

            echo "[' ".$data['dateOfTest']."', ".(int)$data['colorRecognition']."],";
          }
          ?>

        ]);

        var options = {'title':'Évolution de votre note au test de reconnaissance de couleur',
                      'width':700,
                      'height':500,
                      colors: ['green'],
                      vAxis: {minValue: 0},
                      vAxis: {title: 'Note sur 10'},
                      fontName: 'Bahnschrift Regular',
                      fontSize: '17'};

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('chartColorRecognition'));
        chart.draw(data, options);
      }

      function drawSkinTemperature() {

        var data = new google.visualization.arrayToDataTable([
          ['Date', '°C'],
          <?php 
          while ($data = $req5->fetch()){

            echo "[' ".$data['dateOfTest']."', ".(int)$data['skinTemperature']."],";
          }
          ?>

        ]);

        var options = {'title':'Évolution de la température de votre peau',
                      'width':700,
                      'height':500,
                      colors: ['DarkOrchid'],
                      vAxis: {minValue: 25},
                      vAxis: {title: 'Température de la peau en °C'},
                      fontName: 'Bahnschrift Regular',
                      fontSize: '17'};

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('chartSkinTemperature'));
        chart.draw(data, options);
      }
      

      
    </script>
</head>
	
<body>
<div id="mainBlock">
	<?php require('header.html'); ?>

<h2 id="title">Évolution de vos résultats aux différents tests</h2>

<div id="Graphs">
  <div id="Graphs1">
    <div id="chartHeartRate"></div>
    <div id="chartReactionTime"></div>
    <div id="chartSkinTemperature"></div>
  </div>
  <div id="Graphs2">
    <div id="chartSoundRecognition"></div>
    <div id="chartColorRecognition"></div>
  </div>
</div>
  
</div>
	
<?php require('footer.html'); ?>

</body>
	
</html>