<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap.css">
    <title>Exercice 4</title>
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

   

<div class="container  mt-3">
    <?php
    
        $chaine="ikram guesmi";
        echo "La longueur de la chaîne est : " . strlen($chaine) . "<br>";
        $sousChaine = substr($chaine, $start,strlen($chaine) ) ;
        echo "La sous-chaîne extraite est : " . $sousChaine . "<br>";
         $chaineInverse=strrev($chaine);
        echo "La chaîne inversée est : " . $chaineInverse . "<br>";

    
    ?>
    
</div>
</body>
</html>
