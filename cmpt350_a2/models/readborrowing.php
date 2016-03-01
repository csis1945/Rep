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

$sql = "SELECT b_cardno, b_isbn,b_stime,b_rtime FROM borrowing";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Card Number: " . $row["b_cardno"]. " Book ISBN: " . $row["b_isbn"] . " Date Lent " . $row["b_stime"] . " Date Returned " . $row["b_rtime"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 