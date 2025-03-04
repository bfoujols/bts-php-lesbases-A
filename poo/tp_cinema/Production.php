<?php

class Production
{
    private array $listInvestisseurs = [];

    public function getListInvestisseur(): array
    {
        return $this->listInvestisseurs;
    }

    public function setListInvestisseur(Investisseur $listInvestisseur): void
    {
        $this->listInvestisseurs[] = $listInvestisseur;
    }
}