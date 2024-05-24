<?php
$user_favorites = array();

if (isset($_COOKIE["user_id"])) {
    require_once "db.php";

    $user_id = $_COOKIE["user_id"];

    $sql = "SELECT `flat_id` FROM `favorites` WHERE user_id = '$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($user_favorites, $row["flat_id"]);
        }
    }

    $plan = array();
    $type = array();
    $overall_size = array();
    $project = array();
    $price = array();

    foreach ($user_favorites as $flat_id) {
        $sql = "SELECT plan, type, overall_size, project, price FROM `flats` WHERE id = '$flat_id'";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            array_push($plan, $row["plan"]);
            array_push($type, $row["type"]);
            array_push($overall_size, $row["overall_size"]);
            array_push($project, $row["project"]);
            array_push($price, $row["price"]);
        }
    }
    $conn->close();
}