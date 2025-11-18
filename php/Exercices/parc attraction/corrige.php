<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Parc d'Attractions - Billetterie</title>
</head>
<body>

<h1>Billetterie du Parc</h1>

<?php
    $nom = "Pierre";
    $age = 30;
    $taille = 111;
    // Normal (30€), Premium (45€), VIP (60€)
    $prix_ref = "vip";

    if($prix_ref === "normal"){
        $prix = 30;
    }elseif($prix_ref === "premium"){
        $prix = 45;
    }elseif($prix_ref === "vip"){
        $prix = 60;
    }else{
        echo "Erreur : prix invalide";
        exit;
    }

    // Vérification des conditions d'accès
    if ($age < 5 || $taille < 110) {
        echo "<h3>Désolé $nom, tu es trop petit ou trop jeune pour entrer 😢</h3>";
        exit;
    }

    // Calcul de la réduction selon l'âge
    $reduction = 0;

    if ($age < 10) {
        $reduction = 30;
    } elseif ($age < 18) {
        $reduction = 15;
    } elseif ($age >= 60) {
        $reduction = 20;
    }

    // Calcul du prix final
    $prixFinal = $prix - ($prix * $reduction / 100);

    // Affichage du ticket
    echo "<h3>🎟 Ticket de $nom :</h3>";
    echo "Âge : $age ans<br>";
    echo "Taille : $taille cm<br>";
    echo "Prix du Pack : $prix €<br>";
    echo "Réduction : $reduction %<br>";
    echo "<strong>Prix final : " . number_format($prixFinal, 2) . " €</strong><br><br>";

    // Bonus si +40€
    if ($prixFinal > 40) {
        echo "🎁 Bonus : 1 boisson OFFERTE !<br>";
    }
?>

</body>
</html>