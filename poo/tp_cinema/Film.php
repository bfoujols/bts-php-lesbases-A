<?php

class Film extends Production
{
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;
    private Realisateur|null $sonRealisateur;
    private int|float $ca = 0;

    private array $listActeur = [];

    public function __construct(int $unId, string $unNom, int $unNb, Realisateur|null $unReal = null)
    {
        $this->idFilm = $unId;
        $this->nomFilm = $unNom;
        $this->nbEntrees = $unNb;
        $this->sonRealisateur = $unReal;
    }

    public function getIdFilm(): int
    {
        return $this->idFilm;
    }

    public function getNomFilm(): string
    {
        return $this->nomFilm;
    }

    public function getNbEntrees(): int
    {
        return $this->nbEntrees;
    }

    public function setNbEntrees(int $unNb): void
    {
        $this->nbEntrees = $unNb;
    }

    public function getSonRealisateur(): Realisateur|null
    {
        return $this->sonRealisateur;
    }

    public function getListActeur(): array
    {
        return $this->listActeur;
    }

    public function setListActeur(Acteur $listActeur): void
    {
        $this->listActeur[] = $listActeur;
    }

    public function getCA(): int|float
    {
        return $this->ca = $this->getNbEntrees() * TARIF_PLACE_CINE;
    }
}