
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

$sql = "INSERT INTO friends (userid,friendid)
VALUES ('$_POST[userid]', '$_POST[friendid]')";

if ($conn->query($sql) === TRUE) {
    echo "data inserted  successfully<br>";
} else {
    echo "Error inserting  data: " . $conn->error;
}

// Close connection
$conn->close();
?>
