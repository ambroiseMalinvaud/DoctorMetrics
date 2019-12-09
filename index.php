<?php
session_start();

require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'monProfil') {
        monProfil();
    } elseif ($_GET['action'] == 'login') {
        login();
    } elseif ($_GET['action'] == 'accueil') {
        accueil();
    } elseif ($_GET['action'] == 'passerUnTest') {
        passerUnTest();
    } elseif ($_GET['action'] == 'mesResultats') {
        mesResultats();
    } elseif ($_GET['action'] == 'monEvolution') {
        monEvolution();
    } elseif ($_GET['action'] == 'resultatsHopital') {
        resultatsHopital();
    } elseif ($_GET['action'] == 'aide') {
        aide();
    } elseif ($_GET['action'] == 'CGU') {
        CGU();
    } elseif ($_GET['action'] == 'planDuSite') {
        planDuSite();
    } elseif ($_GET['action'] == 'monProfilModifier') {
        monProfilModifier();
    } elseif ($_GET['action'] == 'logout') {
        logout();
    } elseif ($_GET['action'] == 'accepted') {
        accepted();
    } elseif ($_GET['action'] == 'accueilAdmin') {
        accueilAdmin();
    } elseif ($_GET['action'] == 'statistiquesAdmin') {
        statistiquesAdmin();
    } elseif ($_GET['action'] == 'gestionUtilisateurs') {
        gestionUtilisateurs();
    } elseif ($_GET['action'] == 'gestionTests') {
        gestionTests();
    } elseif ($_GET['action'] == 'formulaireAdmin') {
        formulaireAdmin();
    } elseif ($_GET['action'] == 'envoiMail') {
        envoiMail();
    } else {
		login();
	}
} else {
    login();
}