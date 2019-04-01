<?PHP
include "../core/veterinaireC.php";
$veterinaireC=new veterinaireC();
if (isset($_POST["id"])){
	$veterinaireC->supprimerVeterinaire($_POST["id"]);
	header('Location: afficherVeterinaire.php');
}else{echo"failed";}

?>