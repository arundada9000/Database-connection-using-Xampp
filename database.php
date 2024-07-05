<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "class"; //Change this to whatever database name you have

//create connection

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die('connection failed : ' . $conn->connect_error);
} else {
    echo "Registration Successful....";
}
