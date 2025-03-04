<?php
include ("Investisseur.php");
include ("Production.php");
include ("Realisateur.php");
include ("Acteur.php");
include ("Film.php");

echo "TP Cinema \n";

const TARIF_PLACE_CINE = 7.5;

$Jim = new Realisateur("Jimenez", "Cédric");
$Gozian = new Realisateur("Gozian", "Yann");
$Reeves = new Realisateur("Reeves", "Matt");

$GilleLellouche = new Acteur("Lellouche", "Gilles", false);
$FrancoisCivil = new Acteur("Civil", "François", false);
$LeklouKarim = new Acteur("Leklou", "Karim", true);
$NineyPierre = new Acteur("Niney", "Pierre", true);
$DeLaageLou = new Acteur("De-Laage", "Lou", false);
$DussolierAndre = new Acteur("Dussolier", "Andre", true);
$PattinsonRobert = new Acteur("Pattinson", "Robert", true);
$KravitzZoe = new Acteur("Kravitz", "Zoe", false);
$DanoPaul = new Acteur("Dano", "Paul", false);

$listFilm = [];

$listFilm[0] = new Film(1, "Bac Nord", 563921, $Jim);
$listFilm[0]->setNbEntrees(789345);
$listFilm[0]->setListActeur($FrancoisCivil);
$listFilm[0]->setListActeur($LeklouKarim);
$listFilm[0]->setListActeur($DussolierAndre);
$listFilm[0]->setListInvestisseur((new Investisseur("Canal+", 200, 80)));
$listFilm[0]->setListInvestisseur((new Investisseur("FranceTV", 150, 10)));

$listFilm[1] = new Film(2, "Boite Noir", 432789);
$listFilm[1]->setListActeur($GilleLellouche);
$listFilm[1]->setListActeur($FrancoisCivil);
$listFilm[1]->setNbEntrees(13456543);
$listFilm[1]->setListInvestisseur((new Investisseur("Canal+", 200, 10)));

$listFilm[2] = new Film(3, "Batman", 879214, $Reeves);
$listFilm[2]->setListActeur($LeklouKarim);
$listFilm[2]->setListActeur($DussolierAndre);
$listFilm[2]->setListActeur($PattinsonRobert);
$listFilm[2]->setListInvestisseur((new Investisseur("M6", 90, 60)));
$listFilm[2]->setListInvestisseur((new Investisseur("Tf1", 120, 40)));

foreach ($listFilm as $unFilm) {
    echo "Info sur le film ==> " . $unFilm->getIdFilm()
        . " - " . $unFilm->getNomFilm()
        . " - " . $unFilm->getNbEntrees()
        . " - " . $unFilm->getCA();
        if ($unFilm->getSonRealisateur() != null) {
            echo  " - " . $unFilm->getSonRealisateur()->getNomRealisateur()
            . " - " . $unFilm->getSonRealisateur()->getPrenomRealisateur();
        }
        echo "\n";
    echo "Info sur les acteurs ==>\n ";
    foreach ($unFilm->getListActeur() as $unActeur) {
        echo $unActeur->getNom()
            . " - " . $unActeur->getPrenom()
            . " - " . ($unActeur->isEstCesarise() === 0  ? "false" : "true")
            . "\n";
    }
    echo "Info sur les invest ==>\n ";
    foreach ($unFilm->getListInvestisseur() as $unInvestisseur) {
        echo $unInvestisseur->getSociete() . "\n";
    }
}