<?php
function insertperson($cardno,$fname,$lname,$email){
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

$sql = "INSERT INTO people (cardno,firstname, lastname, email)
VALUES (". $cardno . ", '" . $fname . "','" . $lname . "' , '" . $email . "')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}


//insertperson(12345,'mad','cow','maaadf');

?> 