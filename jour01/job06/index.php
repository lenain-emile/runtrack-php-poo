<?php
class Personnage {
    private int $x;
    private int $y;

    public function __construct(int $x = 0, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function gauche() {
        $this->x--;
    }

    public function droite() {
        $this->x++;
    }

    
    public function haut() {
        $this->y--;
    }

    
    public function bas() {
        $this->y++;
    }

    public function position(): array {
        return ['x' => $this->x, 'y' => $this->y];
    }
}

$perso = new Personnage(2, 3);
$perso->droite();
$perso->haut();
print_r($perso->position());  
?>
