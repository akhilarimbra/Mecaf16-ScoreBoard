<?php

$servername = "localhost";
$username = "akhilarimbra";
$password = "arimbra";
$dbname = "mecaf16";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>