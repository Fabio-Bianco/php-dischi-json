<?php

require_once __DIR__ . '/functions.php';

if (isset($_POST['id'])) {
    $id_disco = $_POST['id'];
    deleteDisc($id_disco);
}

// Reindirizza alla pagina principale
header('Location: index.php');
exit;
