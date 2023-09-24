<?php
$servername = "localhost:80";
$username = "root";
$password = "";
$database_name = "userData";

$mysqli = new mysqli($localhost, $username, $password, $database_name);

if($mysqli->connect_error){
  die("connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM users";

$result = $mysqli->query($sql);


if(!$result){
  die("Query failed: " . $mysqli->error);
}

$row = $result->fetch_assoc();
$mysqli->close();
?>


<!DOCTYPE html>
<html>
<head>
<title>Display Data in Form</title>
</head>
<body>
<fieldset>
<legend>UpdatedForm</legend>
<form method="post" action="./update.php"> 
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<label for="name">Username:</label>
<input type="text" name="name" value="<?php echo $row['username']; ?>">
<br>
<label for="password">Password:</label>
<input type="password" name="password" value="<?php echo $row['password']; ?>">
<br>
<label for="email">Email:</label>
<input type="email" name="email" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="update" value="Update">
</form>
</fieldset>
</body>
</html>

