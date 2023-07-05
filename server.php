<?php

$rawData = file_get_contents('./database/dischi.json');

// $dischi = json_encode($rawData);

header('Content-Type: application/json');

echo $rawData;
