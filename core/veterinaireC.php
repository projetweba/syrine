<?PHP
include "../config.php";
class veterinaireC{
	function ajouterVeterinaire($veterinaire){
	$sql="INSERT INTO veterinaire (nom,prenom,image,description,city,adresse) values (:nom, :prenom, :image, :description, :city, :adresse) ";
	$db= config::getConnexion();
		try {
	$req=$db->prepare($sql);

	$nom=$veterinaire->getNom();
	$prenom=$veterinaire->getPrenom();
	$image=$veterinaire->getImage();
	$description=$veterinaire->getDescription();
	$city=$veterinaire->getCity();
	$adresse=$veterinaire->getAdresse();
	$req->bindValue(':nom',$nom);
	$req->bindValue(':prenom',$prenom);
	$req->bindValue(':image',$image);
	$req->bindValue(':description',$description);
	$req->bindValue(':city',$city);
	$req->bindValue(':adresse',$adresse);
	$req->execute();
	}
	catch (Exception $e)
	{
		echo 'erreur: ' .$e->getMessage();
	}
	}
	function afficherVeterinaire(){
		$sql="SELECT * FROM veterinaire";
		$db= config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerVeterinaire($id){
		$sql="DELETE FROM veterinaire where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function modifierVeterinaire($veterinaire,$id)
{
	$sql="UPDATE veterinaire SET nom=:nom,prenom=:prenom,image=:image,description=:description,city=:city,adresse=:adresse WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
	$nom=$veterinaire->getNom();
	$prenom=$veterinaire->getPrenom();
	$image=$veterinaire->getImage();
	$description=$veterinaire->getDescription();
	$city=$veterinaire->getCity();
	$adresse=$veterinaire->getAdresse();
	$req->bindValue(':nom',$nom);
	$req->bindValue(':prenom',$prenom);
	$req->bindValue(':image',$image);
	$req->bindValue(':description',$description);
	$req->bindValue(':city',$city);
	$req->bindValue(':adresse',$adresse);
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
}

  public function findVetById($id)
    {
        $sql="SELECT * FROM veterinaire WHERE id=:id";
        $db = config::getConnexion();
        try{
        $req->bindParam(":id",$id,PDO::PARAM_INT);
       	$req->execute();
        return $req->fetch(PDO::FETCH_OBJ);
        }catch(Execption $e){
            die("Erreur : " .$e->getMessage());
        }
    }

}
?>