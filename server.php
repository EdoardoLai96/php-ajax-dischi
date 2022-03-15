<?php

include __DIR__ . '/database.php';



$oggettoJson = json_encode($database);

header('Content-Type: application/json');

echo $oggettoJson;

?>