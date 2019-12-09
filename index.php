<?php
session_start();

require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'monProfil' && isset($_SESSION['rpps'])) {
        monProfil();
    } elseif ($_GET['action'] == 'login') {
        login();
    } elseif ($_GET['action'] == 'accueil'&& isset($_SESSION['rpps'])) {
        accueil();
    } elseif ($_GET['action'] == 'passerUnTest'&& isset($_SESSION['rpps'])) {
        passerUnTest();
    } elseif ($_GET['action'] == 'mesResultats'&& isset($_SESSION['rpps'])) {
        mesResultats();
    } elseif ($_GET['action'] == 'monEvolution'&& isset($_SESSION['rpps'])) {
        monEvolution();
    } elseif ($_GET['action'] == 'resultatsHopital'&& isset($_SESSION['rpps'])) {
        resultatsHopital();
    } elseif ($_GET['action'] == 'aide'&& isset($_SESSION['rpps'])) {
        aide();
    } elseif ($_GET['action'] == 'CGU'&& isset($_SESSION['rpps'])) {
        CGU();
    } elseif ($_GET['action'] == 'planDuSite'&& isset($_SESSION['rpps'])) {
        planDuSite();
    } elseif ($_GET['action'] == 'monProfilModifier'&& isset($_SESSION['rpps'])) {
        monProfilModifier();
    } elseif ($_GET['action'] == 'logout'&& isset($_SESSION['rpps'])) {
        logout();
    } elseif ($_GET['action'] == 'accepted'&& isset($_SESSION['rpps'])) {
        accepted();
    } elseif ($_GET['action'] == 'accueilAdmin'&& isset($_SESSION['rpps'])) {
        accueilAdmin();
    } elseif ($_GET['action'] == 'statistiquesAdmin'&& isset($_SESSION['rpps'])) {
        statistiquesAdmin();
    } elseif ($_GET['action'] == 'gestionUtilisateurs'&& isset($_SESSION['rpps'])) {
        gestionUtilisateurs();
    } elseif ($_GET['action'] == 'gestionTests'&& isset($_SESSION['rpps'])) {
        gestionTests();
    } elseif ($_GET['action'] == 'formulaireAdmin'&& isset($_SESSION['rpps'])) {
        formulaireAdmin();
    } elseif ($_GET['action'] == 'envoiMail'&& isset($_SESSION['rpps'])) {
        envoiMail();
    } else {
		login();
	}
} else {
    login();
}