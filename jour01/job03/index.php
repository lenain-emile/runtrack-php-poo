<?php

class Personne {
    public $nom;

    public $prenom;

    public function __construct($nom, $prenom ) {
        $this->nom = $nom;
        $this->prenom = $prenom;

    }

    public function echonom() {
        return "je m'appelle" . " " . $this->nom . " " . $this->prenom;

        
    }
}

$Personne = new Personne('lenain', 'emile');
echo $Personne->echonom();
?>