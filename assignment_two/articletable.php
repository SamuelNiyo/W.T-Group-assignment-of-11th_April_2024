<?php

$servername = "localhost"; 
$username = "admin"; 
$password = ""; 
$dbname = "bityeartwo2024!";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM article";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data in profile Table</title>
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
<button><a href="profiletable.php">profile Data</a></button>
<button><a href="liketable.php">Like Data</a></button>
<button><a href="unliketable.php">Unlike Data</a></button>
<button><a href="roletable.php">Role Data</a></button>
<button><a href="commenttable.php">Comment Data</a></button>
<button><a href="articletable.php">Article Data</a></button>
<button><a href="multimediatable.php">Multimedia Data</a></button>
<button><a href="friendtable.php">Friend Data</a></button>
</div></center>
<center><h2>Data in article Table</h2></center>


<table>
    <tr>
    <th>ARTICLE ID</th>
        <th>USER ID</th>
        <th>TITLE</th>
        <th>CONTENTS</th>
        <th>DATE OF CREATION</th>
    
    </tr>
    <?php
  
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["artid"]."</td>";
            echo "<td>".$row["userid"]."</td>";
             echo "<td>".$row["title"]."</td>";
            echo "<td>".$row["contents"]."</td>";
            echo "<td>".$row["dateofcreation"]."</td>";
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
