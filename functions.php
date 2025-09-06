

<?php

function getDisch() {

    $dicscs_json = file_get_contents(__DIR__ . '/dischi.json');

    return json_decode($dicscs_json, true); 

}



 ?>