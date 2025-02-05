<?php
class Student {
    private string $nom;
    private string $prenom;
    private int $numEtudiant;
    private int $credits;
    private string $level;

    public function __construct(string $nom, string $prenom, int $numEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtudiant = $numEtudiant;
        $this->credits = 0; 
        $this->level = $this->studentEval(); 
    }

    public function add_credits(int $credits) {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->level = $this->studentEval(); 
        } else {
            echo "Erreur : Le nombre de crédits ajoutés doit être positif.\n";
        }
    }

    private function studentEval(): string {
        if ($this->credits >= 90) return "Excellent";
        if ($this->credits >= 80) return "Très bien";
        if ($this->credits >= 70) return "Bien";
        if ($this->credits >= 60) return "Passable";
        return "Insuffisant";
    }

    public function studentInfo() {
        echo "🎓 Étudiant : {$this->prenom} {$this->nom}\n";
        echo "📌 Numéro : {$this->numEtudiant}\n";
        echo "📚 Crédits : {$this->credits}\n";
        echo "🏆 Niveau : {$this->level}\n\n";
    }
}

$etudiant = new Student("Doe", "John", 145);
$etudiant->studentInfo();

$etudiant->add_credits(10);
$etudiant->add_credits(20);
$etudiant->add_credits(40);


$etudiant->studentInfo();
?>
