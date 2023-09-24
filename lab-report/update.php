<?php
$servername = "localhost:80";
$username = "root";
$password = "";
$database_name = "userData";

$mysqli = new mysqli($localhost, $username, $password, $database_name);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST["update"])) {
    // Retrieved data from the form 
    $id = $_POST["id"];
    $newName = $_POST["name"];
    $newPassword = $_POST["password"];
    $newEmail = $_POST["email"];

    // Updated query here
  $updateQuery = "UPDATE users SET username='$newName', password='$newPassword', email='$newEmail' WHERE id=$id"; // Replace with your table name

    // Execute the update query here
    if ($mysqli->query($updateQuery) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}

$mysqli->close();
?>
