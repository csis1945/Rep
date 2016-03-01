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

$sql = "SELECT isbn, title, author FROM books";
$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<strong>Book ISBN: </strong>" . $row["isbn"]. " <strong>Book Title: </strong>" . $row["title"]. " <strong>Book Author: </strong>" . $row["author"]. "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);



?> 