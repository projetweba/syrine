<?PHP
include "../core/reclamationC.php";
$reclamationC=new reclamationC();
if (isset($_POST["id"])){
	$reclamationC->supprimerReclamation($_POST["id"]);
	header('Location: afficherReclamation.php');
}

?>