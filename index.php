
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
    
   

    <div> <?php
     session_start(); 
     $count=0;
     $p1 = new Personne("Martin", "Dupont");
     $p2= new Personne("Philippe", "Durand");
     $p3 = new Personne("John", "Doe");
     $p4 = new Personne("Alice","Bob");
     $p5 = new Personne("Victor","Johnson");
     $p6 = new Personne("Charles","Gerard");

     $liste_all=[$p1,$p2,$p3,$p4,$p5,$p6];
     shuffle($liste_all);
     foreach($liste_all as $personne){
    echo($personne->getFirstName() ." " . $personne -> getLastname()." ");
     $count++; 
     }
     echo $count;
     $_SESSION['liste'] = $liste_all;
     ?>

     
    </div>
     <form action="affichage.php" method="post">

     <h1> Nombre de groupes </h1>
     <input type="number" name="nbgroupe" id="nbgroupe"> </input>
     
     <button type="submit" name="valider" id="valider">Valider</button>
     
     </form>


</body>
</html>