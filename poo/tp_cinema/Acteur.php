<?php

class Acteur
{
    private string $nom;
    private string $prenom;
    private bool $estCesarise;

    private array $refCesar = [
        0 => "Tu n'es pas Cezar et un looser :) ",
        1 => "Tu ES Cesar, Ave !!!"
    ];

    public function __construct(string $nom, string $prenom, bool $estCesarise)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->estCesarise = $estCesarise;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function isEstCesarise(): bool
    {
        return $this->estCesarise;
    }

    public function EchoIsEstCesariseToString(): string
    {
        return $this->refCesar[$this->estCesarise];
    }

    public function setEstCesarise(bool $estCesarise): void
    {
        $this->estCesarise = $estCesarise;
    }
}