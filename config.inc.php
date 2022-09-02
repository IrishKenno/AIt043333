<?php
$servername = "localhost"; //hosting / 127.0.0.1
$username = "root"; //yser database
$password = ""; //user password
$dbname = "db_basic_php"; //database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Create character set to utf8
$conn -> set_charset("utf8");

// Check connection
/*
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
else{
    echo "Connect Successfully!";
}*/
?>