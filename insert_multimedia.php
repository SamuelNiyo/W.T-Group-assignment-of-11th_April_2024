<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST["type"];
    $upload_date = $_POST["upload_date"];
    $userid = $_POST["userid"];
    if (isset($_FILES['location'])) {
        $file = $_FILES['location'];
        if ($file['error'] === UPLOAD_ERR_OK) {
            $target_directory = 'uploads/multimedia/';
            if (!file_exists($target_directory)) {
                mkdir($target_directory, 0777, true);
            }
            $target_file = $target_directory . basename($file['name']);
            if (move_uploaded_file($file['tmp_name'], $target_file)) {
                $sql = "INSERT INTO multimedia (type, location, upload_date, userid) 
        VALUES ('$type', '$target_file', '$upload_date', $userid)";
                
                if ($conn->query($sql) === TRUE) {
                    echo "Multimedia item inserted successfully!";
                } else {
                    echo "Error inserting multimedia item: " . $conn->error;
                }
            } else {
                echo "Error moving uploaded file.";
            }
        } else {
            echo "File upload error.";
        }
    } else {
        echo "No file uploaded.";
    }
    
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
