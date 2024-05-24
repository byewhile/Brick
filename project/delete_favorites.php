<?php
if (!isset($_COOKIE["user_id"])) {
    header("Location: ../auth.php");
    exit;
}

$user_id = $_COOKIE["user_id"];
$flat_id = $_GET["id"];

if (!is_numeric($flat_id)) {
    header("Location: ../");
    exit;
}

require_once "../db.php";

$sql = "SELECT * FROM `favorites` WHERE user_id = '$user_id' AND flat_id = '$flat_id'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    header("Location: ../");
    exit;
}

$sql = "DELETE FROM `favorites` WHERE user_id = '$user_id' AND flat_id = '$flat_id'";
$conn->query($sql);

$conn->close();
header("Location: " . $_SERVER['HTTP_REFERER'] . "#$flat_id");