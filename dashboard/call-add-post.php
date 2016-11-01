<?php include 'config.php'?>
<?php

$event = $_POST['event'];
$call = $_POST['call'];
$time = $_POST['time'];
$order = $_POST['order'];

$sql = "INSERT INTO `event`(`event`, `eventcall`, `time`, `order`) 
          VALUES ('$event', '$call', '$time', '$order')";

if ($connection->query($sql) === TRUE) {
    header("Location: /dashboard");
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>