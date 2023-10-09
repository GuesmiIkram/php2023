<?php

$ch1 = " Au début, ils rient de vous, ensuite ils vous combattent, et à la fin, vous gagnez <br/>";
$resultat = ucwords($ch1); 
$resultat = str_replace("gagner", "GAGNER", $resultat);
echo $resultat . "\n"; 
$mots = str_word_count($ch1); 
echo "Nombre de mots dans la chaîne : " . $mots;
?>
