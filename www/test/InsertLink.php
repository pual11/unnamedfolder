<?php

$nameG = $_GET["name"];
$linkG = $_GET["link"];

if($nameG or $LinkG === !NULL){

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "videos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO vids ( name, link)
VALUES ('$nameG', '$linkG')";

if ($conn->query($sql) === TRUE) {
    echo "New video added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>