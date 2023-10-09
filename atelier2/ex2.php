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
     $tabpays1=["Italie", "espagne", "france","Allemagne"];
     echo "Contenu du tableau tabpays1 :<br>";
     foreach($tabpays1 as $indice =>$valeur)
{
    
        echo  $valeur."<br>" ;
    }
sort($tabpays1) ;
echo"<h2>tri selon l'ordre croissant<br></h2>";
foreach($tabpays1 as $indice =>$valeur)
{
    
        echo  $valeur."<br>" ;
    }

rsort($tabpays1);
echo"<h2>tri selon l'ordre decroissant<br></h2>";
foreach($tabpays1 as $indice =>$valeur)
{
    
        echo  $valeur."<br>" ;
    }
 $tabpays2 = array(
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "Italie" => "Rome",
        "Espagne" => "Madrid",
        
    );
    ksort($tabpays2); 

echo "Contenu du tableau tabpays2 trié par ordre alphabétique croissant des pays :<br>";
foreach ($tabpays2 as $pays => $capitale) {
    echo "Pays : " . $pays . ", Capitale : " . $capitale . "<br>";
}

krsort($tabpays2); 

echo "Contenu du tableau tabpays2 trié par ordre alphabétique décroissant des pays :<br>";
foreach ($tabpays2 as $pays => $capitale) {
    echo "Pays : " . $pays . ", Capitale : " . $capitale . "<br>";
}
?>
</div>

</body>
</html>