<?php

class Point {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints() {
        return "Les coordonnées du point sont : (" . $this->x . ", " . $this->y . ")";
    }

    public function afficherX() {
        return "Valeur de X : " . $this->x;
    }

    public function afficherY() {
        return "Valeur de Y : " . $this->y;
    }

    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}


$point = new Point(3, 5);

echo $point->afficherLesPoints() . "<br>";
echo $point->afficherX() . "<br>";
echo $point->afficherY() . "<br>";


$point->changerX(10);
$point->changerY(15);

echo $point->afficherLesPoints() . "<br>";

?>
