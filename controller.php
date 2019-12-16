<?php
require('model/model.php');

function login() {	
	if((isset($_POST['rpps'])) && (isset($_POST['pass'])) && $_POST['rpps']!= null) {

		$data = connexion($_POST['rpps']);
		
		if($data['password'] == sha1($_POST['pass']) && $data['CGU'] == 1) {

			$_SESSION['rpps'] = $_POST['rpps'];
			
			require('view/viewAccueil.php');
		}
		
		elseif($data['CGU'] != 1 && $data['password'] == sha1($_POST['pass'])) {
			
			$_SESSION['rpps'] = $_POST['rpps'];

			require('view/viewAcceptCGU.php');
		}
		else {
        	require('view/viewLogin.php');
		}
	}
	else {
		require('view/viewLogin.php');
	}
}

function logout() {
	session_destroy();

	require('view/viewLogin.php');
}

function accepted() {
	updateCGU($_SESSION['rpps']);

	require('view/viewAccueil.php');
}

function accueil() {
	require('view/viewAccueil.php');
}

function monProfil() {
	$data = getUserData($_SESSION['rpps']);

	require('view/viewMonProfil.php');
}

function passerUnTest() {
	$data = getUserData($_SESSION['rpps']);

	require('view/viewPasserUnTest.php');
}

function mesResultats() {
	require('view/viewMesResultats.php');
}

function monEvolution() {
	require('view/viewMonEvolution.php');
}

function resultatsHopital() {
	require('view/viewResultatsHopital.php');
}

function aide() {
	require('view/viewAide.php');
}

function CGU() {
	require('view/viewCGU.php');
}

function planDuSite() {
	require('view/viewPlanDuSite.php');
}

function monProfilModifier() {
	$data = getUserData($_SESSION['rpps']);

	if ((isset($_POST['email'])) && (isset($_POST['tel'])) && $_POST['email'] != null && $_POST['tel'] != null){

		$mail = $_POST['email'];
		$tel = $_POST['tel'];

		updateTelMail($_SESSION['rpps'], $tel, $mail);
		
		$data = getUserData($_SESSION['rpps']);
		
		require('view/viewMonProfil.php');

		$message='Votre adresse mail et votre numéro de téléphone ont bien été changés.';
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

	} elseif((isset($_POST['email'])) && $_POST['email'] != null){

		$mail = $_POST['email'];
		$tel = $data['tel'];

		updateMail($_SESSION['rpps'], $mail);
		
		$data = getUserData($_SESSION['rpps']);
		
		require('view/viewMonProfil.php');

		$message='Votre adresse mail a bien été changée.';
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

	} elseif((isset($_POST['tel']))&&$_POST['tel']!= null){

		$tel = $_POST['tel'];
		$mail = $data['mail'];

		updateTel($_SESSION['rpps'], $tel);
		
		$data = getUserData($_SESSION['rpps']);
		
		require('view/viewMonProfil.php');

		$message = 'Votre numéro de téléphone a bien été changé.';
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

	} else {
		require('view/viewMonProfilModifier.php');
	}
}

function accueilAdmin() {
	$data = getUserData($_SESSION['rpps']);

	if($data['admin'] == 1) {

		require('view/viewAccueilAdmin.php');

	} else {
		accueil();
	}
}

function statistiquesAdmin() {
	$data = getUserData($_SESSION['rpps']);

	if($data['admin'] == 1) {

		require('view/viewStatistiquesAdmin.php');

	} else {
		accueil();
	}
}

function gestionUtilisateurs() {
	
	$data = getUserData($_SESSION['rpps']);

	if($data['admin'] == 1) {

		if ((isset($_POST['rpps'])) || (isset($_POST['pass'])) || (isset($_POST['email'])) || (isset($_POST['tel'])) || (isset($_POST['nom'])) || (isset($_POST['prenom'])) || isset($_POST['admin'])) {

    		$rpps = $_POST['rpps'];
   			$tel = $_POST['tel'];
    		$mail= $_POST['email'];
    		$nom = $_POST['nom'];
    		$prenom = $_POST['prenom'];
			$pass= $_POST['pass'];
			$adm = $_POST['admin'];
	
			if($rpps != null AND $tel != null AND $mail != null AND $nom != null AND $prenom != null AND $pass != null AND $adm != null) {

				$pass_hache = sha1($pass);
			
				addUser($rpps, $tel, $mail, $nom, $prenom, $pass_hache, $adm);

				require('view/viewGestionUtilisateurs.php');

				$message = "Le compte a bien été créé.";
				echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

			} else {

				require('view/viewGestionUtilisateurs.php');

				$message = "Il y a eu un problème. Veuillez réessayer.";
				echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

			}
		} else {
			require('view/viewGestionUtilisateurs.php');
		}
	} else {
		accueil();
	}
}

function gestionTests() {
	$data = getUserData($_SESSION['rpps']);

	if($data['admin'] == 1) {

		require('view/viewGestionTests.php');

	} else {
		accueil();
	}
}

function formulaireAdmin() {
	$data = getUserData($_SESSION['rpps']);

	if($data['admin'] == 1) {

		require('view/viewFormulaireAdmin.php');

	} else {
		accueil();
	}
}

function envoiMail() {
	$data = getUserData($_SESSION['rpps']);

	$destinataire = $_POST['destinataire'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];

	$prenom = $data['firstName'];
	$nom = $data['lastName'];
	$mail = $data['mail'];

	$destinataire="ambroise.malinvaud@gmail"; 

	$headers = "MIME-Version: 1.0\r\n"; 

	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

	$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 
	
	if (mail($destinataire,$objet,$message)) { 

		require('view/viewFormulaireAdmin.php');

		$message = "Votre message a bien été envoyé !";
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

	} else { 
		require('view/viewFormulaireAdmin.php');

		$message = "Une erreur s'est produite...";
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
	} 
}