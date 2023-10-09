<?php

echo "<h1> calcul sur variables </h1>";

$tva=0.2;
$prix=150;
$nombre=10;

$prixht=$prix*$nombre;
$prixttc=$prixht /(1+$tva);


echo "Prix total HT pour les 10 articles : " . $prixht . " euros<br>";
echo "Prix total TTC pour les 10 articles : " . $prixttc . " euros<br>";
?>