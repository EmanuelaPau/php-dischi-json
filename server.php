<?php
include __DIR__ . '/var.php';

$rawData = file_get_contents('./database/dischi.json');
$discs = json_decode($rawData, true);

header('Content-Type: application/json');

if (isset($keyword) &&  $keyword != '') {
    $searchedDisc = [];
    foreach ($discs as $disc) {
        if (str_contains(strtolower($disc['title']), strtolower($keyword))) {
            $searchedDisc[] = $disc;
        }
    }
    echo json_encode($searchedDisc);
}

// echo $searchedDisc;
else {
    echo $rawData;
}
