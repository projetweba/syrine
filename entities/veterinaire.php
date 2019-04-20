<?PHP
class veterinaire{
    private $id;
    private $nom;
    private $prenom;
    private $image;
    private $description;
    private $city;
    private $adresse;
    function __construct($nom,$prenom,$image,$description,$city,$adresse){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->image=$image;
        $this->description=$description;
        $this->city=$city;
        $this->adresse=$adresse;
    
    }
    // getter 
    
    function getId(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function getImage(){
        return $this->image;
    }
    function getDescription(){
        return $this->description;
    }
    function getCity(){
        return $this->city;
    }
    function getAdresse(){
        return $this->adresse;
    }
    // setter 

function setId($id){
    $this->id=$id;
}
function setNom($nom){
    $this->nom=$nom;
}
function setPrenom($prenom){
    $this->prenom=$prenom;
}
function setImage($image){
    $this->image=$image;
}
function setDescription($description){
    $this->description=$description;
}
function setCity($city){
    $this->city=$city;
}

}
?>