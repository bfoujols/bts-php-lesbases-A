<?php

const NATION = [
  1 => "France",
  2 => "Chine",
  3 => "USA"
];

class Homme
{
    // 1 - Attributs
    private string $nom;
    private int $nation;
    private int $age;

    // 2 - Constructeur
    public function __construct(string $nomPublic)
    {
        $this->nom = $nomPublic;
    }

    // 3 - Méthodes
    // Setter / Getter

    public function getNom(): string
    {
        return $this->nom;
    }
}

// new instance Homme
$testHomme = new Homme("Benoit");
echo $testHomme->getNom() . "\n";
// update nom
//$testHomme->setNom("Jean Jacques");
echo $testHomme->getNom() . "\n";

$tab = [
    "0234" => 2, // Chine
    "2034" => 2, // Chine
    "3044" => 3, // USA
    "3043" => 1 // France
];

// Tableau as Key (option) => Value
// Tableau as Value
foreach ($tab as $matricule => $nationItem) {
    echo $matricule . " - " . NATION[$nationItem] . "\n";
}