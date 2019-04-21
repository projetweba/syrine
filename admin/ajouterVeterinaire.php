<?php
include "../entities/veterinaire.php";
include "../core/veterinaireC.php";

if (isset($_POST['nom']) and isset($_POST['prenom'])   and isset($_POST['description']) and isset($_POST['city']) and isset($_POST['adresse'])) {
	$veterinaire1 = new veterinaire($_POST['nom'], $_POST['prenom'], "image", $_POST['description'], $_POST['city'], $_POST['adresse']);


	// upload file
	$target_dir = "../uploads/";
	//$imageUniqueName = md5(uniqid(rand(), true)) . $_FILES["image"]["tmp_name"];
	$uploadOk = 1;

	$target_file = $target_dir . $_FILES["image"]["name"];

	var_dump($_FILES["image"]);
	var_dump($target_file);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}

	$veterinaire1->setImage("http://localhost/zanimo/uploads/" . $_FILES["image"]["name"]);
	$veterinaire1->latitude = $_POST['lat'];
	$veterinaire1->longitude = $_POST['lng'];

	$veterinaire1C = new veterinaireC();
	$veterinaire1C->ajouterVeterinaire($veterinaire1);
	header('Location:  afficherVeterinaire.php');
} else {
	echo "ajout failed";
}
