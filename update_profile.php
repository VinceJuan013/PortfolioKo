<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbprofile";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$name = $_POST['name'];
$photo = $_POST['photo'];
$photo_2 = $_POST['photo_2'];


$sql = "UPDATE Profile SET name='$name', photo='$photo', photo_2='$photo_2' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
