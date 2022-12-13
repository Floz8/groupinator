

<?php 
namespace Groupinator;

class Personne {

public $firstname;
public $lastname;

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