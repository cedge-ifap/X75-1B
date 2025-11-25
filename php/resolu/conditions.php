<?php
echo '<h2>Exercice 1</h2>';
$resultat = 15;
if ($resultat >= 10) {
    echo 'C\'est bien vous avez eu la moyenne ou plus au test';
} else {
    echo 'Vous n\'avez pas eu la moyenne au test';
}
echo '<h2>Exercice 2</h2>';
$budget = 1553.89;
$achats = 1554.76;

if ($budget >= $achats) echo 'budget suffisant';
else echo 'Budget trop faible';

echo '<h2>Exercice 3</h2>';
//Si la variable age est inférieur à 18 ans, afficher "Tu es mineur ", sinon "Vous êtes majeur".
$age = 18;

$age < 18 ? $txt = 'Tu es mineur' : $txt = 'Vous êtes majeur';
echo $txt;

echo '<h2>Exercice 4</h2>';
//En fonction de l'heure, afficher ces messages :
//< à 12h: Bonne matinée
//12h à 14h: Bonne appétit
//> 14h a 19 Bonne aprés midi
//sin non bon soirée

$h = 15;
if ($h < 12) echo 'bonne matinée';
elseif ($h >= 12 && $h < 14) echo 'bonne appétit';
elseif ($h >= 14 && $h < 19) echo 'bonne après midi';
else echo 'bonne soirée';

echo '<h2>Exercice 5</h2>';

$age = 15;
$origin = 'français';
if ($age >= 18 && ($origin == "belge" || $origin == 'Belge')) {
    echo 'Vous avez 18 ans ou plus et êtes Belge';
} elseif ($age >= 18) {
    echo 'Vous avez 18 ans ou plus et êtes étranger';
} else {
    echo 'Vous n\'êtes pas majeur';
}

echo '<h2>Exercice 6</h2>';

if ($age >= 18) {
    if ($origin == "belge" || $origin == 'Belge') {
        echo 'Vous avez 18 ans ou plus et êtes Belge';
    } else {
        echo 'Vous avez 18 ans ou plus et êtes étranger';
    }
} else {
    echo 'Vous n\'êtes pas majeur';
}

echo '<br><br>Exercice 7<br><br>';

$nombre = 15;
if ($nombre % 3 == 0 && $nombre % 5 == 0)
    echo "Le nombre $nombre est multiple de 3 et 5.";
else
    echo "Le nombre $nombre n'a pas multiple de 3 et 5.";