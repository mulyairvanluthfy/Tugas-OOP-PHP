<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold blooded : " . $sheep->cold_blooded . "<br><br>";


$kodok = new Frog("buduk");
$kodok->jump();

$sungokong = new Ape("kera sakti");
$sungokong->yell();
?>