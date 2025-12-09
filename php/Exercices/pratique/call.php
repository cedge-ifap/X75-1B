<?php

// /api/api.php?endpoint=menu
// /api/api.php?endpoint=translations&lang=en
header('Content-Type: application/json; charset=utf-8');

// 1. Récupère l'endpoint demandé dans l'URL
$endpoint = $_GET['endpoint'] ?? null;

// 2. Liste des endpoints autorisés (sécurité de base)
$allowed = [
    'menu',
    'qualities',
    'last-project',
    'testimonials',
    'translations'
];

if (!$endpoint || !in_array($endpoint, $allowed)) {
    http_response_code(400);
    echo json_encode(['error' => 'Endpoint invalide']);
    exit;
}

// 3. Construit le chemin du fichier JSON
$file = __DIR__ . '/json/' . $endpoint . '.json';

// 4. Vérifie que le fichier existe
if (!file_exists($file)) {
    http_response_code(404);
    echo json_encode(['error' => 'Fichier JSON introuvable']);
    exit;
}

// 5. Lit le fichier JSON
$json = file_get_contents($file);
$data = json_decode($json, true);

// 6. Cas particulier : translations (on filtre par langue)
if ($endpoint === 'translations') {

    $lang = $_GET['lang'] ?? 'fr';

    if (!isset($data[$lang])) {
        $lang = 'fr';
    }

    echo json_encode([
        'lang' => $lang,
        'translations' => $data[$lang]
    ]);
    exit;
}

// 7. Réponse par défaut : on renvoie le JSON tel quel
echo json_encode($data);