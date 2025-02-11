<?php
// importer les classes
include ("Cat.php");
include ("Animal.php");

const LIST_GENDER = [
    1 => "Male",
    2 => "Female",
    3 => "Other"
];

$felix = new Cat();
$felix->setName("Félix");
$felix->setGender(3);
//var_dump($felix);
//echo $felix->getGender();

$listAnimal = new Animal();
$listAnimal->setListCat($felix);

$filou = new Cat();
$filou->setName("Filou");
$listAnimal->setListCat($filou);

foreach ($listAnimal->getListCat() as $catItem) {
    echo "Le nom des chats " . $catItem->getName() . "\n";
}

//var_dump($listAnimal->getListCat());
