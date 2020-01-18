
<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleMesResultats.css">
  <link rel="stylesheet" href="public/css/styleHeader.css">
  <link rel="stylesheet" href="public/css/styleFooter.css">
  <link rel="icon" type="image/png" href="public/Images/Logo-Doctor-Metrics.png" />
</head>
	
<body>
<div id="mainBlock">

<?php require('header.html'); ?>

<div id="corps">

  <h2>Vos objectifs</h2>

  <p class="text2">En tant que <?= $job['job']; ?> vous devez obtenir les scores suivants :</p>

<div id="objectifs">
  <div class="objectifs1">
    <ul>
      <li class="text1">Votre rythme cardiaque doit être inférieur à <?= $settings['heartRateThreshold']; ?> bpm.</li>
      <li class="text1">La température de votre peau doit être supérieure à <?= $settings['skinTempThreshold']; ?> °C.</li>
      <li class="text1">Votre note au test de reconnaissance de couleur doit être d'au moins <?= $settings['colorDistinctionThreshold']; ?>/10.</li>
    </ul>
  </div>
  <div class="objectifs1">
    <ul>
      <li class="text1">Votre note au test de reconnaissance de son doit être d'au moins <?= $settings['soundDistinctionThreshold']; ?>/10.</li>
      <li class="text1">Votre temps de réaction doit être inférieur à <?= $settings['reactionTimeThreshold']; ?> ms.</li>
    </ul>
  </div>
</div>

  

  <br/><p class="text2">Pour votre profession il est recommandé de passer les tests tous les <?= $settings['frequency']; ?> jours.</p>
	
    <table id="table_resultats">
    <h2>Historique de vos tests</h2>
       <tr>
          <th>Date</th>
          <th>Rythme cardiaque</th>
          <th>Température de la peau</th>
          <th>Reconnaissance de couleur</th>
          <th>Reconnaissance de sons</th>
          <th>Temps de réaction</th>
          <th>Test réussi</th>
      </tr>
        <?php 
        while($result = $req->fetch()) {
          echo '<tr>';
          echo '<td>' . $result['dateOfTest'] . '</td>';
          echo '<td>' . $result['heartRate'] ." bpm". '</td>';
          echo '<td>' . $result['skinTemperature'] ." °C". '</td>';
          echo '<td>' . $result['colorRecognition'] ." / 10". '</td>';
          echo '<td>' . $result['soundRecognition'] ." / 10". '</td>';
          echo '<td>' . $result['reactionTime'] ." ms". '</td>';
          echo '<td>' . $result['capable'] . '</td>';
          echo '</tr>';
        }
        ?>
    </table>
    <p id="message">Les résultats de vos tests s'afficherons ici au fur et à mesure.</p>

  </div>
</div>
    
<?php require('footer.html'); ?>

</body> 
	
</html>