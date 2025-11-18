<pre>
<?php

echo'Exercice1<br>';
$a = 3;
//$a …. 3 doit être true
var_dump($a == 3);
var_dump($a === 3);
var_dump($a <= 3);
var_dump($a >= 3);

echo'<br>Exercice2<br>';
$a = "3";

//$a …. 3 doit être true
var_dump($a == 3);
var_dump($a !== 3);

//$a …. 3 doit être false
var_dump($a === 3);
var_dump($a < 3);
var_dump($a > 3);
var_dump($a <> 3);
var_dump($a  != 3);

echo'<br>Exercice3<br>';
$a = true;

var_dump($a == true); //true
var_dump($a < 3);//false
var_dump($a === true);//true
var_dump($a == 1);//true
var_dump($a <> 3);//false
var_dump($a == "coucou");//true
var_dump($a == "null");//true
var_dump($a == 110);//true
var_dump($a === 3);//false
var_dump($a == 0);//false
var_dump($a != 3);//false
var_dump($a !== 3);//true
var_dump($a != null);//true
var_dump($a !== null);//true

?>


