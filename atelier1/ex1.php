<?php 
$j=rand(1,7);
$x=rand(0,4);
switch($j){
    case 1 :
        echo("dimanche");
        break;
    case 2 :
        echo("lundi");
        break;
    case 3 :
        echo("mardi");
        break;
    case 4 :
        echo("mercredi");
        break;
    case 5 :
         echo("jeudi");
         break;
    case 6 :
        echo("vendredi");
        break;
    case 7 :
        echo("samdi");
        break;

}
switch($x){
    case 0 :
    case 1 :
    case 2:
        echo("le nombre est inferieur à 3");
        break;
    case 3 :
        echo("nombre egale à 3");
        break;
    case 4 :
        echo("superieur à 3");
        break;
    }