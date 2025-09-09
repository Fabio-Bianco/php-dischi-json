<?php


require_once __DIR__ . '/functions.php';

if (
    isset($_POST['titolo'], $_POST['artista'], $_POST['genere'], $_POST['anno'], $_POST['cover'])
) {
    $nuovoDisco = [
        'titolo' => $_POST['titolo'],
        'artista' => $_POST['artista'],
        'genere' => $_POST['genere'],
        'anno' => $_POST['anno'],
        'cover' => $_POST['cover'],
    ];

    addDisch($nuovoDisco);
}

// Torna alla home
header('Location: index.php');
exit;

?>