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
    $_SESSION['lalaufort'] = $data['avatar'];

	require('view/viewMonProfil.php');
}

function passerUnTest() {
	$data = getUserData($_SESSION['rpps']);

	require('view/viewPasserUnTest.php');
}

function mesResultats() {
	$req = getTestData($_SESSION['rpps']);
	$job = getProfession($_SESSION['rpps']);
	$settings = getTestSettings($job['job']);

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

		header('Location:http://localhost/DoctorMetrics/index.php?action=monProfil');

		$message = 'Votre adresse mail et votre numéro de téléphone ont bien été changés.';
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

	} elseif((isset($_POST['email'])) && $_POST['email'] != null){

		$mail = $_POST['email'];
		$tel = $data['tel'];

		updateMail($_SESSION['rpps'], $mail);

		$data = getUserData($_SESSION['rpps']);

		header('Location:http://localhost/DoctorMetrics/index.php?action=monProfil');

		$message = 'Votre adresse mail a bien été changée.';
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

	} elseif((isset($_POST['tel']))&&$_POST['tel']!= null){

		$tel = $_POST['tel'];
		$mail = $data['mail'];

		updateTel($_SESSION['rpps'], $tel);

		$data = getUserData($_SESSION['rpps']);
		
		header('Location:http://localhost/DoctorMetrics/index.php?action=monProfil');

		$message = 'Votre numéro de téléphone a bien été changé.';
		echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

	} if(isset($_FILES['avatar'])) {
     	
     	$tailleMax = 2097152;
     	$extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
     
     	if($_FILES['avatar']['size'] <= $tailleMax) {
         
        	$extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
         
        	if(in_array($extensionUpload, $extensionsValides)) {
             
            	$chemin = "public/Images/membres/avatars/".$_SESSION['rpps'].".".$extensionUpload;
            	$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
             
            	if($resultat) {
                 
                	setAvatar($_SESSION['rpps'],$extensionUpload);

                	$data = getUserData($_SESSION['rpps']);

                	header('Location:http://localhost/DoctorMetrics/index.php?action=monProfil');
                 
             	} else {

             		$data = getUserData($_SESSION['rpps']);

					require('view/viewMonProfil.php');

                	$msg = "Erreur durant l'importation de votre photo de profil.";
                	echo '<script type="text/javascript">window.alert("'.$msg.'");</script>';
             	}
             
         	} else {

         		$data = getUserData($_SESSION['rpps']);

				require('view/viewMonProfil.php');

            	$msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png.";
            	echo '<script type="text/javascript">window.alert("'.$msg.'");</script>';
         	}

     	} else {

     		$data = getUserData($_SESSION['rpps']);

			require('view/viewMonProfil.php');

        	$msg = "Votre photo de profil doit avoir une taille inférieure à 2 Mo.";
        	echo '<script type="text/javascript">window.alert("'.$msg.'");</script>';
   		}
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
function randomPassword($taille) {
	$liste_caractere = 'azertyuiopqsdfghjklmwxcvbn123456789AZERTYUIOPQSDFGHJKLMWXCVBN&$#'; /*on crée une liste contenant les différents caractères
	présent dans un mot de passe */
	$mot_de_passe = '';
	for ($i=0;$i<$taille;$i++) {
		$position_caractere = random_int(0,strlen($liste_caractere)-1);
		$mot_de_passe .= $liste_caractere[$position_caractere];
		/* a chaque passage dans la boucle on ajoute un caractère pris aléatoirement dans la liste */
	}
	return $mot_de_passe;
}

function gestionUtilisateurs() {
	
	$data = getUserData($_SESSION['rpps']);

	if($data['admin'] == 1) {

		if ((isset($_POST['rpps']))  || (isset($_POST['email'])) || (isset($_POST['tel'])) || (isset($_POST['nom'])) || (isset($_POST['prenom'])) || isset($_POST['admin'])) {

    		$rpps = $_POST['rpps'];
   			$tel = $_POST['tel'];
    		$mail= $_POST['email'];
    		$nom = $_POST['nom'];
    		$prenom = $_POST['prenom'];
			$pass = randomPassword(8);
			$adm = $_POST['admin'];
			$message = "votre mot de passe est " ;
			$message .= $pass;
	
			if($rpps != null AND $tel != null AND $mail != null AND $nom != null AND $prenom != null AND $pass != null AND $adm != null AND mail($mail,"Votre compte doctor metrics a été créé",$message)) {

				$req = getUsersData();
				
				
				
					require('view/viewGestionUtilisateurs.php');
					$pass_hache = sha1($pass);

			
					addUser($rpps, $tel, $mail, $nom, $prenom, $pass_hache, $adm);

					$req = getUsersData();

					$message = "Le compte a bien été créé.";
					echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

				
				

				
				

				

			} else {

				$req = getUsersData();

				require('view/viewGestionUtilisateurs.php');

				$message = "Il y a eu un problème. Veuillez réessayer.";
				echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

			}
		} else {
			$req = getUsersData();

			require('view/viewGestionUtilisateurs.php');
		}
	} else {
		accueil();
	}
}

function deleteUser() {
	$data = getUserData($_SESSION['rpps']);
	
	if($data['admin'] == 1) {

		if (isset($_POST['rpps'])) {

			$data = checkExist($_POST['rpps']);

			if ($_POST['rpps'] == $_SESSION['rpps']) {

				$message = "Vous ne pouvez pas supprimer votre propre compte.";
				echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

				require('view/viewDeleteUser.php');

			} else {

				if ($data[0] == 1) {
				
				delUser($_POST['rpps']);

				$req = getUsersData();

				require('view/viewGestionUtilisateurs.php');

				} else {
					require('view/viewDeleteUser.php');
				}
			} 
		} else {
			require('view/viewDeleteUser.php');
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

	$destinataire="ambroise.malinvaud@gmail.com"; 

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