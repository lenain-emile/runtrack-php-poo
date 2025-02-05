<?php
class Livre {
    private $disponible = true;

    public function verification() {
        return $this->disponible;
    }

    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false;
            echo "Le livre a été emprunté.";
        } else {
            echo "Le livre n'est pas disponible.";
        }
    }

    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true;
            echo "Le livre a été rendu.";
        } else {
            echo "Ce livre n'a pas été emprunté.";
        }
    }
}

$livre = new Livre();
$livre->emprunter(); 
$livre->rendre();    
$livre->rendre();    
?>
