<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bityeartwo2024!";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Select the database
$conn->select_db($dbname);

$sql = "INSERT INTO multimedia (userid, type, location,upload_date)
VALUES ('$_POST[user]', '$_POST[type]', '$_POST[location]', '$_POST[upload]')";

if ($conn->query($sql) === TRUE) {
    echo " data inserted successfully<br>";
} else {
    echo "Error inserting sample data: " . $conn->error;
}

// Close connection
$conn->close();
?>
