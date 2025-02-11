<?php

class Cat
{
    private string $name;
    private int $gender;
    private int $age;
    private int $weight;
    private int $color;

    /**
     * Définit le genre de l'utilisateur si la clé fournie est valide.
     *
     * @param int $genderKey Représente une clé pour le genre, acceptant des valeurs comprises entre 1 et 3.
     * @return void
     */
    public function setGender(int $genderKey):void
    {
        if ($genderKey >= 1 && $genderKey <= 3) {
            $this->gender = $genderKey;
        }
    }

    /**
     * Retourne le genre de l'utilisateur sous forme de chaîne de caractères.
     *
     * @return string Le genre de l'utilisateur ou une chaîne vide si non défini.
     */
    public function getGender():string
    {
        if (isset($this->gender)) {
            return LIST_GENDER[$this->gender];
        }
        return "";
    }

    /**
     * Retourne le nom de l'utilisateur sous forme de chaîne de caractères.
     *
     * @return string Le nom de l'utilisateur.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Définit le nom de l'utilisateur.
     *
     * @param string $name Le nom à attribuer à l'utilisateur.
     * @return void
     */
    public function setName(string $name): Cat
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Récupère l'âge.
     *
     * @return int L'âge de l'individu.
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Définit l'âge d'une personne.
     *
     * @param int $age L'âge à définir.
     * @return void
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * Retourne le poids.
     *
     * @return int Le poids.
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * Définit le poids.
     *
     * @param int $weight Le poids à définir.
     * @return void
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Retourne la couleur.
     *
     * @return int La couleur sous forme d'entier.
     */
    public function getColor(): int
    {
        return $this->color;
    }

    /**
     * Définit la couleur.
     *
     * @param int $color La couleur à définir.
     * @return void
     */
    public function setColor(int $color): void
    {
        $this->color = $color;
    }
}


