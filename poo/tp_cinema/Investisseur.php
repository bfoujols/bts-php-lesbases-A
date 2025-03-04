<?php

class Investisseur
{
    private string $societe;
    private int $capital;
    private int $pourtageInvestissement = 0;

    public function __construct(string $societe, int $capital, int $pourtageInvestissement)
    {
        $this->societe = $societe;
        $this->capital = $capital;
        $this->pourtageInvestissement = $pourtageInvestissement;
    }

    public function getSociete(): string
    {
        return $this->societe;
    }

    public function getCapital(): int
    {
        return $this->capital;
    }
}