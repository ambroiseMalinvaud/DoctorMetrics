<?php

function dbConnect() {
	try
	{
   		$db = new PDO("mysql:host=localhost;dbname=doctormetrics", "root","");
	}
		
	catch(Exception $e)
	{
    	die('Erreur : '.$e->getMessage());
	}
	
	return $db;
}

function getUserData($a_rpps) {
		
	$db = dbConnect();
		
	$req = $db->prepare("SELECT RPPS, tel, mail, lastName, firstName, admin FROM users WHERE RPPS = :RPPS");
	$req->execute(array(':RPPS'=>$a_rpps));
	$data = $req->fetch();
		
	return $data;
}

function connexion($a_rpps) {

	$db = dbConnect();
	
	$req = $db->prepare("SELECT RPPS, password, CGU FROM users WHERE RPPS = :RPPS");
	$req->execute(array(':RPPS'=>$a_rpps));
	$data = $req->fetch();

	return $data;
}

function updateTelMail($a_rpps, $a_tel, $a_mail) {

	$db = dbConnect();

	$req = $db->prepare("UPDATE users SET mail = :MAIL, tel = :TEL WHERE RPPS = :RPPS");
	$req->bindParam(':MAIL', $a_mail, PDO::PARAM_STR);
	$req->bindParam(':TEL', $a_tel, PDO::PARAM_INT);
	$req->bindParam(':RPPS', $a_rpps, PDO::PARAM_INT);
	$req->execute();
}

function updateMail($a_rpps, $a_mail) {

	$db = dbConnect();

	$req = $db->prepare("UPDATE users SET mail = :MAIL WHERE RPPS = :RPPS");
	$req->bindParam(':MAIL', $a_mail, PDO::PARAM_STR);
	$req->bindParam(':RPPS', $a_rpps, PDO::PARAM_INT);
	$req-> execute();
}

function updateTel($a_rpps, $a_tel) {

	$db = dbConnect();

	$req = $db->prepare("UPDATE users SET tel = :TEL WHERE RPPS = :RPPS");
	$req->bindParam(':RPPS', $a_rpps, PDO::PARAM_INT);
	$req->bindParam(':TEL', $a_tel, PDO::PARAM_INT);
	$req-> execute();
}


function updateCGU($a_rpps) {

	$db = dbConnect();

	$req = $db->prepare("UPDATE users SET CGU = 1 WHERE RPPS = :RPPS");
	$req->execute(array(':RPPS'=>$a_rpps));
}

function addUser($a_rpps, $a_tel, $a_mail, $a_nom, $a_prenom, $a_pass, $a_adm) {

	$db = dbConnect();

	$req = $db->prepare("INSERT INTO users (RPPS, tel, mail, lastName, firstName, password, admin) VALUES (:RPPS, :TEL, :MAIL, :LASTNAME, :FIRSTNAME, :PASS, :ADMIN)");
	$req->bindParam(':RPPS', $a_rpps, PDO::PARAM_INT);
	$req->bindParam(':TEL', $a_tel, PDO::PARAM_INT);
	$req->bindParam(':MAIL', $a_mail, PDO::PARAM_STR);
	$req->bindParam(':LASTNAME', $a_nom, PDO::PARAM_STR);
	$req->bindParam(':FIRSTNAME', $a_prenom, PDO::PARAM_STR);
	$req->bindParam(':PASS', $a_pass, PDO::PARAM_STR);
	$req->bindParam(':ADMIN', $a_adm, PDO::PARAM_STR);
	$req->execute();
}