<?php
class Personne {
  protected int $age;
  
  public function __construct() {
    $this->age = 14;

  }
  public function afficherage() {
    echo "l'age de la personne est : " . $this->age . "ans";
  }
  public function bonjour() {
    echo "Hello";
  }
  public function modifierAge(int $nouvelage) {
    $this->age = $nouvelage;
    echo "L'age de la personne est : " . $this->age . "ans";
  }

}

class eleve extends Personne {

  public function allerEnCours() {
    echo "je vais en cours";
  }
  public function afficherAge() {
    echo "J’ai " . $this->age . " ans.";
 }
}
class professeur extends Personne {
  private string $matiere;

  public function __construct($matiere){
    parent::__construct();
    $this->matiere = $matiere;
  }
  public function enseigner() {
    echo "Le cours va commencer." . PHP_EOL;
}

}

$eleve = new Eleve();
$eleve->bonjour();
$eleve->allerEnCours(); 
$eleve->modifierAge(15); 
$eleve->afficherAge(); 

$professeur = new Professeur("Mathématiques", 40);
$professeur->bonjour();
$professeur->enseigner(); 
?>