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
	CREATE TABLE people (
	cardno INT(6) PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50)
	
	);
/*
	CREATE TABLE books(
	isbn VARCHAR(10) PRIMARY KEY,
	title VARCHAR(30) NOT NULL,
	author VARCHAR(30) NOT NULL
	);
	
	
	CREATE TABLE borrowing(
	b_cardno INT(6),
	b_isbn VARCHAR(10),
	FOREIGN KEY (b_cardno) REFERENCES people(cardno),
	FOREIGN KEY (b_isbn) REFERENCES books(isbn)
	);
*/	
	";

if (mysqli_query($conn, $sql)) {
    echo "Tables created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 