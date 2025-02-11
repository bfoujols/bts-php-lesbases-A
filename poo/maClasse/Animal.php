<?php

class Animal
{
    private array $listCat = [];

    /**
     * @param Cat $cat Ajout de l'obj Cat
     * @return void
     */
    public function setListCat(Cat $cat): void
    {
        $this->listCat[] = $cat;
    }

    /**
     * @return array Liste des chats
     */
    public function getListCat(): array
    {
        return $this->listCat;
    }
}