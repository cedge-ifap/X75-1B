<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendu Complet</title>
    <link rel="stylesheet" href="style.css">
    <style>*{margin: 0;padding: 0}</style>
</head>
<body>
<pre>
<?php

echo'<h3>Exercice 1</h3><br>';
$name = "Champignon";
var_dump($name);

echo'<h3>Exercice 2</h3><br>';
$lastname = "Dupond";
$firstname = "Laurence";
$age = 12;
var_dump($firstname, $lastname, $age);

echo'<h3>Exercice 3</h3><br>';
$km = 1;
var_dump($km);

$km = 3;
var_dump($km);

$km = 125;
var_dump($km);

echo'<h3>Exercice 4</h3><br>';
$string = "Hello";
$int = 123;
$float = 12.3;
$bool = true;
var_dump($string, $int, $float, $bool);


echo'<h3>Exercice 5</h3><br>';
//Les variables sont initialisées à l'exercice 2

echo 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans.';


echo'<h3>Exercice 6</h3><br>';

$var1 = 3;
$var2 = 4;
$var3 = 5;
echo $var1 + $var2;
echo '<br>';

echo $var3 / $var2;
echo '<br>';

echo $var1 + $var3 * $var2;
echo '<br>';

echo'<h3>Exercice 7</h3><br>';
echo (8+2*2)/(12/4+3);


//Exercice 7 : Afficher le résultat de (8+2×2)÷(12÷4+3)


?>
</pre>
