<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bityeartwo2024!";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->select_db($dbname);

$sql = "INSERT INTO article (userid, title, contents, dateofcreation)
VALUES ('$_POST[user]', '$_POST[title]', '$_POST[content]', '$_POST[creation]')";

if ($conn->query($sql) === TRUE) {
    echo " data inserted successfully<br>";
} else {
    echo "Error inserting sample data: " . $conn->error;
}

// Close connection
$conn->close();
?>
