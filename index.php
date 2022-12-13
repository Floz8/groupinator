
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

    <p> <?php
     $p1 = new Personne("Martin", "Dupont");
     $p2= new Personne("Philippe", "Durand");
     $p3 = new Personne("John", "Doe");
     $p4 = new Personne("Alice","Bob");
     
     echo($p1->getFirstName() +"" + $p1 -> getLastname()); ?>
     echo($p2->getFirstName() +"" + $p2 -> getLastname()); ?>
     echo($p3->getFirstName() +"" + $p3 -> getLastname()); ?>
     echo($p4->getFirstName() +"" + $p4 -> getLastname()); ?>
</body>
</html>