<?php
session_start();
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['fullNameC']) and isset($_POST['email']) and isset($_POST['subject']) and isset($_POST['message'])) {
	$reclamation1 = new reclamation($_POST['fullNameC'], $_POST['email'], $_POST['subject'], $_POST['message'], 0);
	if ($_POST['type'] == "1")
		$reclamation1->idProduit = $_POST['product_id'];
	$reclamation1->idUser =  $_SESSION["connectedUserId"];
	//Partie2
	/*
var_dump($reclamation1);
}
*/
	//Partie3
	$reclamation1C = new reclamationC();
	$reclamation1C->ajouterReclamation($reclamation1);
	header('Location:  afficherReclamation.php');
} else {
	echo "verifier les champs";
}
