<?php
require_once "../db.php";

$tomilino_park_flats = array();
$tomilino_park_flats_count = 0;

$sql = "SELECT * FROM `flats` WHERE project = 'Томилино Парк'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $tomilino_park_flats_count = $result->num_rows;

    for ($i = 0; $i < $tomilino_park_flats_count; $i++) {
        while ($row = $result->fetch_row()) {
            for ($j = 0; $j < $result->field_count; $j++) { 
                $tomilino_park_flats[$i][$j] = $row[$j];
            }
            break;
        }
        $tomilino_park_flats[$i] = array_values(array_diff($tomilino_park_flats[$i], array('')));
    }
}

$sql = "SELECT * FROM `flats` WHERE project = 'Прибрежный Парк'";
$result = $conn->query($sql);

$pribrezhnyj_park_flats = array();
$pribrezhnyj_park_flats_count = 0;

if ($result->num_rows > 0) {
    $pribrezhnyj_park_flats_count = $result->num_rows;

    for ($i = 0; $i < $pribrezhnyj_park_flats_count; $i++) {
        while ($row = $result->fetch_row()) {
            for ($j = 0; $j < $result->field_count; $j++) { 
                $pribrezhnyj_park_flats[$i][$j] = $row[$j];
            }
            break;
        }
        $pribrezhnyj_park_flats[$i] = array_values(array_diff($pribrezhnyj_park_flats[$i], array('')));
    }
}

$sql = "SELECT * FROM `flats` WHERE project = 'Новоград Павлино'";
$result = $conn->query($sql);

$novograd_pavlino_flats = array();
$novograd_pavlino_flats_count = 0;

if ($result->num_rows > 0) {
    $novograd_pavlino_flats_count = $result->num_rows;

    for ($i = 0; $i < $novograd_pavlino_flats_count; $i++) {
        while ($row = $result->fetch_row()) {
            for ($j = 0; $j < $result->field_count; $j++) { 
                $novograd_pavlino_flats[$i][$j] = $row[$j];
            }
            break;
        }
        $novograd_pavlino_flats[$i] = array_values(array_diff($novograd_pavlino_flats[$i], array('')));
    }
}