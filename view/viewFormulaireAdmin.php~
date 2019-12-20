<!doctype html>
<html>
	
<head>
	<meta charset="utf-8"> 
	<title>Doctor Metrics</title>
	<link rel="stylesheet" href="public/css/styleFormulaireAdmin.css">
    <link rel="stylesheet" href="public/css/styleHeaderAdmin.css">
    <link rel="stylesheet" href="public/css/styleFooterAdmin.css">
</head>

<body>
<div id="mainBlock">

<?php require('view/headerAdmin.html'); ?>



<form id="contact" method="post" action="index.php?action=envoiMail">
    <fieldset>
        <p><label for ="destinataire">Destinataire : </label>
            <SELECT name="destinataire" size=1>
                <OPTION>Doctor Metrics</OPTION>
                <OPTION>Réseau des hopitaux</OPTION>
            </SELECT></p>	 
		<legend><u>Votre message</u></legend>
        <p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" required/></p>
        <p><label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8" required></textarea></p>
        <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer votre message" /></div>
    </fieldset>
</form>
</div>

<?php require('view/footer.html'); ?>

</body>
	
</html>

