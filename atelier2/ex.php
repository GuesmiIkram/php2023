<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ISET RADES</font></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Basculer la navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link" href="ex.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ex1</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex2.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ex2</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ex3</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex4.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ex4</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex5.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ex5</font></font></a>
        
       
    </div>
  </div>
</nav>
<div class="container mt-3">
<?php
$notes = array("rami" => 7.5, "mohamed" => 19.0, "amira" => 15.5, "asma" => 10.0, "ahmed" => 9.5, "yassin" => 15.5, "islam" => 12.0);
$bonne_note=0;
$nometud="";
foreach($notes as $indice =>$valeur)
{
    if ($valeur>=10)
    {
        echo $indice."  ". $valeur."<br>" ;
    }
    if($valeur>$bonne_note)
    {
        $bonne_note=$valeur;
        $nometud=$indice;
    }

}
$taille = count($notes);
echo "le nombre des étudiant est   ". $taille ."<br>";
echo "l'étudiant qui a la mailleur note est " .$nometud."<br>";

?> 
<table class="table">
    <tr class="table-success">
        <th>nom etudiant</th>
        <th>note</th>
    </tr>
    <?php
    $notes = array("rami" => 7.5, "mohamed" => 19.0, "amira" => 15.5, "asma" => 10.0, "ahmed" => 9.5, "yassin" => 15.5, "islam" => 12.0);

    foreach ($notes as $indice => $valeur) {
        echo "<tr>";
        echo "<td>" . $indice . "</td>";
        echo "<td>" . $valeur . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php
$notes = array("rami" => 7.5, "mohamed" => 19.0, "amira" => 15.5, "asma" => 10.0, "ahmed" => 9.5, "yassin" => 15.5, "islam" => 12.0);
asort($notes);
echo "le tableau trier est : <br>";
foreach ($notes as $indice => $valeur) {
    
    echo $indice."  ". $valeur."<br>" ;
}

krsort($notes);
echo "le tableau trié selon l'ordre décroissant des noms : <br>";
foreach ($notes as $indice => $valeur) {
    echo $indice . "  " . $valeur . "<br>";
}
$moy=0;
$ind=0;
foreach ($notes as $indice => $valeur) {
    $moy=$moy+$valeur;
    $ind++;
}
$moy=$moy/$ind;
echo "la moyenne de la classe est  ".$moy;



?>
</div>
</body>
</html>
