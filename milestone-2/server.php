<?php
    require __DIR__ . '/database.php';

    $selected_genre = $_GET['genre'];

    if (empty($selected_genre)) {
        $json = json_encode($database);
    }else {
        $filtered_disc = [];
        foreach($database as $element)
        if ($element['genre'] === $selected_genre) {
            $filtered_disc[] = $element;
        }
        $json = json_encode($filtered_discs);
    }

    header('Content-Type: application/json');

    echo $json
?>