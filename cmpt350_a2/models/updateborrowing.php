<?php
function updateborrowing($cardno, $isbn, $newreturntime){
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

$sql = "UPDATE borrowing SET b_rtime = '" . $newreturntime . "' WHERE b_cardno = '" . $cardno . "' AND b_isbn = '" . $isbn . "'" ;

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?> 