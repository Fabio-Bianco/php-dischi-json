<?php

function getDisch() {

    $dicscs_json = file_get_contents(__DIR__ . '/dischi.json');

    return json_decode($dicscs_json, true); 

}

function addDisch($disco) {
    $file = __DIR__ . '/dischi.json';
    $dischi = json_decode(file_get_contents($file), true);
    $dischi[] = $disco;
    file_put_contents($file, json_encode($dischi, JSON_PRETTY_PRINT));
}

function deleteDisc($id) {
    $file = __DIR__ . '/dischi.json';
    $dischi = json_decode(file_get_contents($file), true);

    // Filtra l'array per rimuovere il disco con l'ID specificato
    $dischi_filtrati = array_filter($dischi, function($disco) use ($id) {
        return $disco['id'] !== $id;
    });

    // Re-indicizza l'array per evitare buchi se si usa array_values
    $dischi_finali = array_values($dischi_filtrati);

    file_put_contents($file, json_encode($dischi_finali, JSON_PRETTY_PRINT));
}


 ?>