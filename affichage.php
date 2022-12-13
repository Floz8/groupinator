<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupinator</title>
</head>
<body>
    <?php

Class Personne {

    public $firstname;
    public $lastname;
    public $idgroup;

    function __construct($prenom,$nom)
    {
        $this->firstname = $prenom;
        $this->lastname = $nom;
    }
    
    function setName($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    
    function getFirstName() {
        return $this->firstname;
    }
    function getLastname(){
        return $this->lastname;
    }
    function setGroup($id){
        $this->idgroup = $id;
    }
    
    }

    Class Groupe {

        public $id;
        public $Personnes = [];

        function __construct($id) {
            $this->id = $id;  
        }
        function add($Personnes){
            array_push($this->Personnes, $Personnes);
        }
    }


    session_start(); 
    $listepersonne =[];
    //On récupère le nombre de groupe passé en paramètre
    $nbgroup=$_POST['nbgroupe'];
    
    $countPersonne=0;
    foreach($_SESSION['liste'] as $personne){
        
        echo($personne->getFirstName()." ".$personne->getLastName());
        echo "<br>";
        //On récupère la liste des personnes dans la session dans une variable liste personne
        array_push($listepersonne, $personne);
        //On compte le nombre de personne
        $countPersonne++;
    }
     //Nombre minimum de personne par groupe
    

    $iterator_personne =0;

    //Liste de tous les groupes
    $listegroupe = [];
    for($i=1; $i<=$nbgroup; $i++){

        
        array_push($listegroupe, $i);
        foreach($listepersonne as $personne){
    
            //$personne->setGroup(rand(1, $nbgroup));
            if(array_search($personne, $listepersonne) % $i ==0){
                $personne->setGroup($i);
                
            }
            
           //echo(array_search($personne, $listepersonne)."<br>");
          // echo "i : ".$i."<br>";
            }
    }
   
foreach($listegroupe as $groupe){
    echo "<h1> Groupe: ".$groupe."</h1>";
    foreach($listepersonne as $Personne){
        if($Personne->idgroup==$groupe) {
            echo $Personne->getFirstName()."<br>";
        }
        
    }
}
   


    ?>
</body>
</html>