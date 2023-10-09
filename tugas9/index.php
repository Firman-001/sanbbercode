<?php
require_once('animal.php');
require_once('Frog.php');
require_once('ape.php');

$sheep = new Animal("shaun");
echo "name :" . $sheep->name . "<br>"; // "shaun"
echo "legs :" . $sheep->legs . "<br>"; // 4
echo "cold_blooded :" . $sheep->cold_blooded . "<br>"."<br>"; // "no"

$kodok = new Frog("buduk");

echo "Name: " . $kodok -> name . "<br>";
echo "Legs: " . $kodok -> legs . "<br>";
echo "Cold blooded: " . $kodok -> cold_blooded . "<br>";
$kodok -> jump();

$sungokong = new Ape("kera sakti");

echo "Name: " . $sungokong -> name . "<br>";
echo "Legs: " . $sungokong -> legs . "<br>";
echo "Cold blooded: " . $sungokong -> cold_blooded . "<br>";
$sungokong -> yell();

?>