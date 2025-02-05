<?php
class Livre {
    private string $titre;
    private string $auteur;
    private int $nombrePages;

    public function __construct(string $titre, string $auteur, int $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages); 
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre(string $titre) {
        $this->titre = $titre;
    }

    public function getAuteur(): string {
        return $this->auteur;
    }

    public function setAuteur(string $auteur) {
        $this->auteur = $auteur;
    }

    public function getNombrePages(): int {
        return $this->nombrePages;
    }

    public function setNombrePages(int $nombrePages) {
        if ($nombrePages > 0) {
            $this->nombrePages = $nombrePages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.\n";
        }
    }

    public function afficher() {
        echo "📖 Livre : \"{$this->titre}\" | Auteur : {$this->auteur} | Pages : {$this->nombrePages}\n";
    }
}

$livre1 = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 98);
$livre1->afficher();

$livre1->setTitre("Le Petit Prince - Nouvelle Édition");
$livre1->setAuteur("A. de Saint-Exupéry");
$livre1->setNombrePages(120);

$livre1->afficher();

$livre1->setNombrePages(-10); 
?>
