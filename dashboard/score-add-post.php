<?php include 'config.php'?>
<?php

$event = $_POST['event'];
$red = $_POST['red'];
$blue = $_POST['blue'];
$green = $_POST['green'];
$yellow = $_POST['yellow'];
$date = date("U");

$sql = "INSERT INTO `score`(`event`, `red`, `blue`, `green`, `yellow`, `date`) 
          VALUES ('$event', '$red', '$blue', '$green', '$yellow', '$date')";

if ($connection->query($sql) === TRUE) {
    header("Location: /dashboard");
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>