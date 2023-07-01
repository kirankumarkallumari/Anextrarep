<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$email = $_POST['email'];

// Upload the health report file
$reportFile = $_FILES['report'];
$reportFileName = $reportFile['name'];
$reportTempPath = $reportFile['tmp_name'];
$reportPath = "uploads/" . $reportFileName; // Assuming "uploads" is a directory
