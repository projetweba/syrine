<?PHP
include "../config.php";
class reclamationC
{
	function ajouterReclamation($reclamation)
	{
		$sql = "INSERT INTO reclamation (fullNameC,email,subject,message,statut,id_user,id_produit) values (:fullNameC, :email, :subject, :message, :statut, :idUser, :idProduit) ";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$fullNameC = $reclamation->getFullNameC();
			$email = $reclamation->getEmail();
			$subject = $reclamation->getSubject();
			$message = $reclamation->getMessage();
			$statut = $reclamation->getStatut();
			$req->bindValue(':fullNameC', $fullNameC);
			$req->bindValue(':email', $email);
			$req->bindValue(':subject', $subject);
			$req->bindValue(':message', $message);
			$req->bindValue(':statut', $statut);
			$req->bindValue(':idUser', $reclamation->idUser);
			$req->bindValue(':idProduit',  $reclamation->idProduit);
			$req->execute();
		} catch (Exception $e) {
			echo 'erreur: ' . $e->getMessage();
		}
	}

	function afficherReclamation()
	{
		$sql = "SELECT * FROM reclamation";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerReclamation($id)
	{
		$sql = "DELETE FROM reclamation where id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierreclamation($reclamation, $id)
	{
		$sql = "UPDATE reclamation SET fullNameC=:fullNameC,email=:email,subject=:subject,message=:message,statut=:statut  WHERE id=:id";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try {
			$req = $db->prepare($sql);
			$fullNameC = $reclamation->getFullNameC();
			$email = $reclamation->getEmail();
			$subject = $reclamation->getSubject();
			$message = $reclamation->getMessage();
			$statut = $reclamation->getStatut();
			$datas = array(':id' => $id, ':fullNameC' => $fullNameC, ':email' => $email, ':subject' => $subject, ':message' => $message, ':statut' => $statut);

			$req->bindValue(':id', $id);
			$req->bindValue(':fullNameC', $fullNameC);
			$req->bindValue(':email', $email);
			$req->bindValue(':subject', $subject);
			$req->bindValue(':message', $message);
			$req->bindValue(':statut', $statut);

			$s = $req->execute();

			// header('Location: index.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}


	function recupererreclamation($id)
	{
		$sql = "SELECT * from reclamation where id=$id";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}







	public function findRecById($id)
	{
		$sql = "SELECT * FROM reclamation WHERE id=:id";
		$db = config::getConnexion();
		try {
			$req->bindParam(":id", $id, PDO::PARAM_INT);
			$req->execute();
			return $req->fetch(PDO::FETCH_OBJ);
		} catch (Execption $e) {
			die("Erreur : " . $e->getMessage());
		}
	}
}
