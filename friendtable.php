<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "bityeartwo2024";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM friends";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data in like Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
            button{
            background-color: skyblue;
            color: white;
            font-size: 15px;
            padding: 5px;
            margin: 5px;
        }
        button a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<center><div>
<button><a href="multimediatable.php">Multimedia Data</a></button>
<button><a href="friendtable.php">Friend Data</a></button>
</div></center>
<center><h2>Data in Friend Table</h2></center>


<table>
    <tr>
    <th>LIKE ID</th>
        <th>USER ID</th>
        <th>CONTENT ID</th>
       
    
    </tr>
    <?php
  
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["fid"]."</td>";
            echo "<td>".$row["userid"]."</td>";
             echo "<td>".$row["friendid"]."</td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
</table>

<?php
// Close the connection
$conn->close();
?>

</body>
</html>
