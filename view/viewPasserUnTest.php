<html>
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/stylePasserUnTest.css">
	<link rel="stylesheet" href="public/css/styleHeader.css">
  	<link rel="stylesheet" href="public/css/styleFooter.css">
</head>
	
<body>
<div id="mainBlock">

<?php require('header.html'); ?>


<div id="corps">
	<p id="messageConnexion">Vous êtes connecté en tant que <?= $data['firstName'].' '.$data['lastName']; ?></p>
	<button id="buttonTest">
		<a href="#"><strong>PASSER UN TEST</strong></a>
	</button>
	<p id="messageTest">Lorsque vous lancez un test l'heure et la date sont enregistrés.<br />
	Vos résultats sont visibles sur la page "Mes résultats".</p>
</div>
</div>
	
<?php require('footer.html'); ?>

</body>
</html>