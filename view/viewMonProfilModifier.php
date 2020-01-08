<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleMonProfilModifier.css">
	<link rel="stylesheet" href="public/css/styleHeader.css">
  	<link rel="stylesheet" href="public/css/styleFooter.css">
    <link rel="icon" type="image/png" href="public/Images/Logo-Doctor-Metrics.png" />
</head>
<body>
    <?php require('header.html'); ?>
    <form action ="index.php?action=monProfilModifier" method="POST" enctype="multipart/form-data">
        <div id="corps">
            <div id="infoUser">
                <h3>Bonjour <?= $data['firstName'].' '.$data['lastName'];   ?></h3>
                <div id="profil">
                    <p><strong>Photo de profil<br/></strong></p>
                    <figure>
                        <img id="photoProfil" src="public/Images/membres/avatars/<?php echo $data['avatar']; ?>" width="150" alt="Photo de profil"/>
                    </figure>
                </div>
                <p>
                    <label>Nouvelle photo de profil :</label>
                    <input type="file" name="avatar" /> 
                </p>
                <p><strong>Numéro RPPS</strong><br/><?= $data['RPPS']; ?></p>
                <p><strong>Adresse mail</strong><br/><?= $data['mail']; ?></p>
                <p>
                    <label for="email">Nouvelle adresse mail</label> : <input type="email" name="email" id="email" placeholder="exemple@mail.com" />
                </p>
                <p><strong>Numéro de téléphone</strong><br/><?= $data['tel'];  ?></p>
                <p>
                    <label for="tel">Nouveau numéro de téléphone</label> : <input type="text" name="tel" id="tel" placeholder="06XXXXXXXX" />
                </p>	
                <div id="infoUserFooter">
                    <input type="submit" value="Sauvegarder les modifications">
                </div>
            </div>
        </div>
    </form>

<?php require('view/footer.html'); ?>

</body>