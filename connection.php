<?php
// Function to open a connection to the database
function openConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbProfileko";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>