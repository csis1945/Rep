<?php
function deleteborrowing($cardno){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM borrowing WHERE b_cardno=" . $cardno   ;

if ($conn->query($sql) === TRUE) {
    echo "Records deleted successfully";
} else {
    echo "Error deleting records: " . $conn->error;
}

$conn->close();
}
?> 