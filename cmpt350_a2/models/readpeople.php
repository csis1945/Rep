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

$sql = "SELECT cardno, firstname, lastname, email FROM people";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<strong>Library Card Number:</strong> " . $row["cardno"]. " <strong>Customer Name: </strong>" . $row["firstname"]. " " . $row["lastname"]. "<strong> Email:</strong> ". $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 