<?php
include 'config.php';
$event = $_POST['event'];
$querySQL = "DELETE FROM `score` WHERE `event` = '$event'";
$sql = $querySQL;

if ($connection->query($sql) === TRUE) {
    header("Location: /dashboard/score-add.php");
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>