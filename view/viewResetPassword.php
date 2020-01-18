<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleDeleteUser.css">
	<link rel="stylesheet" href="public/css/styleHeaderAdmin.css">
  	<link rel="stylesheet" href="public/css/styleFooterAdmin.css">
  	<script type="text/javascript" src="view/javascript.js"></script>
  	<link rel="icon" type="image/png" href="public/Images/Logo-Doctor-Metrics.png" />
</head>

<body>
<div id="mainBlock">

<?php require('view/headerAdmin.html'); ?>

<div id="corps">
	<h1>RÉINITIALISER UN MOT DE PASSE</h1>
	<p id="warning"><strong>Attention la réinitialisation d'un mot de passe est définitive !</br>
	Cela supprimera l'ancien mot de passe.</strong></p>
	<p>Entrez le numéro RPPS de l'utilisateur dont vous souhaitez réinitialiser le mot de passe :</p>
	<div id="champ">
		<form method="post" action="resetPassword">
			<p>
				<label for="rpps"></label><input type="text" name="rpps" id="rpps" placeholder="12345678912" required/>
			</p>
	</div>
		<input id="bouton" type="submit" value="Réinitialiser mot de passe">
	</form>
</div>
</div>

<?php require('view/footer.html'); ?>

</body>
	
</html>