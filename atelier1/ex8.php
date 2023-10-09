<!DOCTYPE html>
<html>
<head>
 <title>pair ou impaire</title>
</head>
<body>
 <h1>pair ou impair</h1>
 <form method="post">
 <label for="val1">Val 1 :</label>
 <input type="number" name="val1" id="val1" required><br>
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {
 $val1 = $_POST['val1'];
 if($val1%2==0)
    echo "nombre pair";
 else
    echo "nombre impair";
 }
 ?>