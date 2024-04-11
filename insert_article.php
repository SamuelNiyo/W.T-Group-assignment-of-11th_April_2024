<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$contents = $_POST['contents'];
$userid = $_SESSION['user_id'];
$userid = $_SESSION['user_id'];

$sql = "INSERT INTO article (title,userid, contents) VALUES ('$title','$userid', '$contents')";
 
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully<br>";
    header("Location: articles.php");
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>
