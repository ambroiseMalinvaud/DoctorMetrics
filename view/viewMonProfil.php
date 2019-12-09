<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleMonProfil.css"> 
</head>

<body>
	<div id="mainBlock">
<?php require('view/header.html'); ?>


<div id="corps">
	<div id="infoUser">
		<h3>Bonjour 
			<?= $data['firstName'].' '.$data['lastName'];?>
		</h3>
		<p><strong>Numéro RPPS</strong><br/>
			<?= $data['RPPS'];  ?></p>
		<p><strong>Adresse mail</strong><br/>
			<?= $data['mail'];  ?></p>
		<p><strong>Numéro de téléphone</strong><br/>
			<?= $data['tel'];  ?></p>
		<div id="profil">
			<p><strong>Photo de profil<br/></strong></p>
			<figure>
				<img id="photoProfil" src="public/Images/PhotoProfil.jpg" alt="Photo de profil">
			</figure>
		</div>
		<div id="infoUserFooter">
			<button><strong><a href="index.php?action=monProfilModifier">Modifier</a></strong></button>
			<button><strong><a href="index.php?action=logout">Se déconnecter</a></strong></button>
		</div>
	</div>
		<?php 
		if ($data['admin'] == 1 )
		{
			echo'<div id="modeAdmin">
			<button><strong><a href="index.php?action=accueilAdmin">Mode administrateur</a></strong></button>';
		}
		?>
	</div>
</div>
	
<?php require('view/footer.html'); ?>
</body>
	


