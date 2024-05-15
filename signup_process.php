<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'mydb';
$con = mysqli_connect($host, $user, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$DOB = $_POST["DOB"];

$sql = "INSERT INTO user (firstname, lastname, emailid, pass, DOB) VALUES ('$fname', '$lname', '$email', '$password', '$DOB')";

if (mysqli_query($con, $sql)) {
    echo "$fname registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
