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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Fetch the ID from the query result
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        
        // Store both username and ID in the session
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        
        header("Location: home page.html"); 
        exit();
    } else {
        $error = "Invalid username or password";
    }
}

$conn->close();
?>

