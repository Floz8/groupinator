
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

    function Personne($firstname,$lastname){
        
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
     var_dump($p1); ?> </p>
</body>
</html>