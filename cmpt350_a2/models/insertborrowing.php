<?php
function insertborrowing($bcardno,$bisbn,$stime,$rtime){
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

$sql = "INSERT INTO borrowing(b_cardno,b_isbn,b_stime,b_rtime)
VALUES ('" . $bcardno . "','" . $bisbn . "','" . $stime . "','" . $rtime . "')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?> 