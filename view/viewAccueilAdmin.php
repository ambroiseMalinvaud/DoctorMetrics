
<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleAccueilAdmin.css">
	<link rel="stylesheet" href="public/css/styleHeaderAdmin.css">
  	<link rel="stylesheet" href="public/css/styleFooterAdmin.css">
</head>

<body>
<div id="mainBlock">

<?php require('view/headerAdmin.html'); ?>

<div id="corps">
	<h2>Bonjour <?= $data['firstName'].' '.$data['lastName']; ?>,</h2>
	<p id="adminMessage">En tant qu'administrateur vous pouvez : </p>
	<button><a href="index.php?action=statistiquesAdmin">ACCÉDER AUX STATISTIQUES</a></button>
	<p>Accéder aux statistiques de chaque utilisateur ainsi qu'aux statistiques globales de l'hôpital.</p>
	<button><a href="index.php?action=gestionUtilisateurs">GÉRER LES UTILISATEURS</a></button>
	<p>Ajouter, supprimer et modifier le profil des utilisateurs.</p>
	<button><a href="gestionTests.php">GÉRER LES TESTS</a></button>
	<p>Paramétrer le type, la fréquence et les seuils de réussite de chaque test.</p>
</div>
</div>

<?php require('view/footer.html'); ?>

</body>
	
</html>

