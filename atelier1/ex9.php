<!DOCTYPE html>
<html>
<head>
 <title>multiple de 3 et 5</title>
</head>
<body>
 <h1>multiple de 3 et 5</h1>
 <form method="post">
 <label for="val1">Val 1 :</label>
 <input type="number" name="val1" id="val1" required><br>
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {
 $val1 = $_POST['val1'];
 if($val1% 3==0)
    echo "c'est un multiple de 3";
 else
    echo "n'est pas un multiple de 3";
    if($val1% 4==0)
    echo "c'est un multiple de 4";
 else
    echo "n'est pas un multiple de 4";
 }
 ?>