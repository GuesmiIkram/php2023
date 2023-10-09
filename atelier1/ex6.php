<!DOCTYPE html>
<html>
<head>
 <title>Formulaire d'addition</title>
</head>
<body>
 <h1>Formulaire d'addition</h1>
 <form method="post">
 <label for="val1">Val 1 :</label>
 <input type="number" name="val1" id="val1" required><br>
 <label for="val2">Val 2 :</label>
 <input type="number" name="val2" id="val2" required><br>
 <input type="submit" value="Additionner">
 </form>
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $val1 = $_POST['val1'];
 $val2 = $_POST['val2'];
 $res= $val1 + $val2;
 echo "Résultat de l'addition : $res";
 }
 ?>
</body>
</html>