<?php

$rawData = file_get_contents('./database/dischi.json');
$discs = json_decode($rawData, true);

header('Content-Type: application/json');

if (isset($_GET['searchbar']) && $_GET['searchbar'] != '') {
    $searchedDisc = [];
    foreach ($discs as $disc) {
        if (str_contains(strtolower($disc['title']), strtolower($_GET['searchbar']))) {
            $searchedDisc[] = $disc;
        }
    }
    echo json_encode($searchedDisc);
}

// echo $searchedDisc;
else {
    echo $rawData;
}
