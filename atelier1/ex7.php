<?php 
$a=3.1;
$b=6.4;
$resultat=$a<=>$b;
switch ($resultat) {
    case -1:
        echo "$a est inférieur à $b";
        break;
    case 0:
        echo "$a est égal à $b";
        break;
    case 1:
        echo "$a est supérieur à $b";
        break;
}
?>