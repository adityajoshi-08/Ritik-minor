<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'mydb';
$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE emailid='$email'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "User doesn't exist";
} elseif ($row['pass'] != $password) {
    echo "Incorrect password";
} else {
    echo "User logged in successfully";
}

mysqli_close($con);
?>
