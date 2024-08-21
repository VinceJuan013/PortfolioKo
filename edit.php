<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>

<h2>Edit Profile</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbprofile";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   

    $sql = "SELECT * FROM profile ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $photo = $row["photo"];
        $photo_2 = $row["photo_2"];
    } else {
        echo "Product not found.";
    }
}
?>

<form action="update_profile.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
    Photo: <input type="text" name="photo" value="<?php echo $photo; ?>"><br><br>
    Photo_2: <input type="text" name="photo_2" value="<?php echo $photo_2; ?>"><br><br>
    <input type="submit" value="Update">
</form>

<?php
$conn->close();
?>

</body>
</html>
