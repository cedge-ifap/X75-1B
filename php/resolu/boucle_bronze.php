<pre>
<?php


echo '<h2>Niveau Bronze</h2>';
echo '<h3>Exercice 1</h3>';

/*
 * Affichez une liste de course contenant 10 articles. Pour cela créez un tableau $list indexé.
 * En utilisant la boucle foreach, affichez la liste sous forme de liste à point <ul><li>
 */

$list = [
    "Champignon",
    "Sucre",
    "Sel",
    "Sauce soja",
    "Vinaigre de riz noir",
    "Sauce poisson",
    "Sauce d'huitre",
    "Gingembre",
    "Riz",
    "Crevettes"
];

echo "<ul>";
foreach ($list as $item) {
    echo '<li>' . $item . '</li>';
}
echo "</ul>";

echo '<h3>Exercice 2</h3>';
/*
 * Réutilisez le code précédent mais affichez le numéro d'ordre de 1 à 10 au début de la ligne.
 * Ceci en récupérant le numéro de la clé.
 */
echo "<ul>";
foreach ($list as $key => $item) {
    echo '<li>' . ($key + 1) . ' ' . $item . '</li>';
}
echo "</ul>";

echo '<h3>Exercice 3</h3>';
/*
 * Réutilisez le code précédent. N'affichez pas l'item 2 et 3 et n'affichez que 4 produits.
 * Pour cela il faut utiliser exclusivement les instructions continue; et break;
 */
echo "<ul>";
foreach ($list as $key => $item) {
    if ($key == 1 || $key == 2) continue;
    echo '<li>' . ($key + 1) . ' ' . $item . '</li>';
    if ($key == 5) break;
}
echo "</ul>";

echo '<h3>Exercice 4</h3>';
/*
 * Réutilisez le code de l'exercice 2. Affichez que les produits impaires. Pour cela créez une $variable $afficher = true;
 * avant le foreach. Changez la valeur de celle ci pour arriver à l’objectif.
 */

echo "<ul>";
$afficher = true;
foreach ($list as $key => $item) {
    if ($afficher) echo '<li>' . ($key + 1) . ' ' . $item . '</li>';
    $afficher = !$afficher;
}
echo "</ul>";

echo '<h3>Exercice 5</h3>';
/*
 * Réutilisez la variable $list de l’exercice 1. affichez la liste à l'envers (de 10 à 0).
 * N'utilisez plus foreach mais for pour y arriver. Pensez aux clés pour y arriver.
 */

echo "<ul>";

for ($i = 9; $i > -1; $i--) {
    echo '<li>' . ($i + 1) . ' ' . $list[$i] . '</li>';
}
echo "</ul>";


echo '<h3>Exercice 6</h3>';
/*
 * Déclarez un tableau multi-dimentionnel, qui contient les 4 saisons, lesquelles contiennent des légumes (2/saison),
 * lesquels contiennent les clés "quantité" et "prix". Profitez des clés pour vous faciliter la vie :-)
 * Les saisons sont uniques et les légumes le sont également (unicité par saison)
Affichez la liste de cette facon :
<ul>
	<li>Ete</li>
	<li>
		<ul>
			<li>Fruit 1 : (quantité : 3 , prix : 10€)</li>
			<li>Fruit 2 : (quantité : 3 , prix : 10€)</li>
		</ul>
	</li>
</ul>
…..
 */
$tableau = [
    "ete" => [
        "tomates" => [
            "prix" => 12.3,
            "quantite" => 4
        ],
        "poivrons" => [
            "prix" => 9.2,
            "quantite" => 2
        ],
    ],
    "automne" => [
        "navets" => [
            "prix" => 2.1,
            "quantite" => 12
        ],
        "oignons" => [
            "prix" => 2.90,
            "quantite" => 4
        ],
    ],
    "hiver" => [
        "potimaron" => [
            "prix" => 12.3,
            "quantite" => 4
        ],
        "pomme de terre" => [
            "prix" => 9.2,
            "quantite" => 2
        ],
    ],
    "printemps" => [
        "salade verte" => [
            "prix" => 2.1,
            "quantite" => 12
        ],
        "radis" => [
            "prix" => 2.90,
            "quantite" => 4
        ],
    ]
];

echo '<ul>';
// On affiche la liste des saisons :
foreach ($tableau as $saison => $legumes) {

    // La saison :
    echo '<li>' . $saison . '</li>';
    // La liste de légumes de la saison en cours :
    echo '<li>';
    echo '<ul>';
    foreach ($legumes as $legume => $caracteristiques) {
        // Le début de la ligne du légume : "Légume 1 : ( ..."
        echo '<li>' . $legume . ' : (';
        // la suite de la ligne du légume : "quantité : 3, prix 4,"
        foreach ($caracteristiques as $nom => $valeur) {
            echo $nom . " : " . $valeur . ",";
        }
        // La parenthèse à la fin de la ligne du légume, et la fin du </li> :
        echo ')</li>';
    }
    // Fin du tableau de liste de légumes pour la saison
    echo '</ul>';
    echo '</li>';
}
echo '</ul>';