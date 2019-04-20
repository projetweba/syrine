<?php
include "../entities/veterinaire.php";
include "../core/veterinaireC.php" ;

if (isset($_POST['nom']) and isset($_POST['prenom'])  and isset($_POST['image']) and isset($_POST['description'])and isset($_POST['city']) and isset($_POST['adresse'])){
$veterinaire1=new veterinaire($_POST['nom'],$_POST['prenom'],$_POST['image'],$_POST['description'],$_POST['city'],$_POST['adresse']);

$veterinaire1C=new veterinaireC();
$veterinaire1C->ajouterVeterinaire($veterinaire1);
header('Location:  afficherVeterinaire.php'); 

}else{
	echo "ajout failed";
}
?>