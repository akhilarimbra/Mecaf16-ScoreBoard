<?php include 'config.php'?>
<?php

$event = $_POST['event'];
$call = $_POST['call'];
$time = $_POST['time'];
$sql = "UPDATE `event` SET `eventcall`='$call',`time`='$time' WHERE `event` = '$event'";

if ($connection->query($sql) === TRUE) {
    header("Location: /dashboard");
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>