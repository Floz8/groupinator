
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupinator</title>

    <?php 
   class Personne {

    public $firstname;
    public $lastname;

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
    
    }
   

    ?>
</head>
<body>
    
   

    <p> <?php

     $count=0;
     $p1 = new Personne("Martin", "Dupont");
     $p2= new Personne("Philippe", "Durand");
     $p3 = new Personne("John", "Doe");
     $p4 = new Personne("Alice","Bob");

     $liste_all=[$p1,$p2,$p3,$p4];
     shuffle($liste_all);
     foreach($liste_all as $personne){
     echo($personne->getFirstName());
     $count++; 
     }
     echo $count;
     ?>

     



</body>
</html>