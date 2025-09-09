

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


 ?>