<?php

header('Content-Type: application/json');

// Charger le fichier JSON
$data = file_get_contents('./json/users.json', FILE_USE_INCLUDE_PATH);;

// Convertir en tableau PHP
$students = json_decode($data, true);

// Retourner la liste
echo json_encode($students);