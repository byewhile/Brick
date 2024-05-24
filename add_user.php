<?php
$phone = $_POST["phone"];

if (preg_match('/[a-zа-яё]/iu', $phone) || strlen($phone) < 12) {
    header("Location: auth.php?error");
    exit;
}

require_once "db.php";
$sql = "SELECT `id` FROM `users` WHERE phone = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        setcookie("user_id", $row['id'], time() + 900);
        $conn->close();
        header("Location: profile.php");
        exit;
    }
} else {
    $sql = "INSERT INTO `users` (phone) VALUES ('$phone')";
    $conn->query($sql);

    $sql = "SELECT `id` FROM `users` WHERE phone = '$phone'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        setcookie("user_id", $row['id'], time() + 900);
        $conn->close();
        header("Location: profile.php");
    }
}
