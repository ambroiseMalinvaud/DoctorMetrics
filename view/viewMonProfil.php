<html>

<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleMonProfil.css">
	<link rel="stylesheet" href="public/css/styleHeader.css">
  	<link rel="stylesheet" href="public/css/styleFooter.css">
</head>

<body>
	<div id="mainBlock">
<?php require('view/header.html'); ?>


<div id="corps">
	<div id="infoUser">
        <div id="ficheprof">
            <div id="profil">
                <figure>
                    <img id="photoProfil" src="public/Images/membres/avatars/<?php echo $data['avatar']; ?>" width="150" alt="Photo de profil"/>
                </figure>                                              
            </div>
            <div id="texte">
                <p><strong>Bonjour
                    <?= $data['firstName'].' '.$data['lastName'];?>
                </
                    strong></p>
                <p><strong>Numéro RPPS</strong><br/>
                    <?= $data['RPPS'];  ?></p>
                <p><strong>Adresse mail</strong><br/>
                    <?= $data['mail'];  ?></p>
                <p><strong>Numéro de téléphone</strong><br/>
                    <?= $data['tel'];  ?></p>
            </div>
        </div>
        <div id="infoUserFooter">
			<button><strong><a href="index.php?action=monProfilModifier">Modifier</a></strong></button>
			<button><strong><a id="quitter"href="index.php?action=logout" onclick="pop()">Se déconnecter</a></strong></button>
            <script type="text/javascript">
                function pop() {
                    var quitter = document.getElementById("quitter");
                    var result = confirm("Voulez-vous vraiment quitter cette page?");
                    if (result == true) {
                        alert("Merci de votre visite");
                        quitter.href= "index.php?action=login";
                    }
                    else {
                        alert("Merci de rester avec nous");
                        quitter.href=""
                    }
                }
            </script>
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

</html>