<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
	$sql="

	CREATE TABLE books(
	isbn VARCHAR(10) PRIMARY KEY,
	title VARCHAR(30) NOT NULL,
	author VARCHAR(30) NOT NULL
	);
	
	
	";

if (mysqli_query($conn, $sql)) {
    echo "Tables created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 