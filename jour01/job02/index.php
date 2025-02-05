<?php

class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Résultat de l'addition: " . $resultat . "<br>";
    }
}


$operation = new Operation();

$operation2 = new Operation(10, 20);

echo "Nombre1 (opération 2): " . $operation2->nombre1 . "<br>";
echo "Nombre2 (opération 2): " . $operation2->nombre2 . "<br>";

// Appel de la méthode addition
$operation2->addition();

?>