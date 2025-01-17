<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

// Establishing database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Error handling for database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch multimedia data
$sql = "SELECT mid, userid, type, location, upload_date FROM multimedia where type = 'audio'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<html lang="en">
<head>
<!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <title>Friends Company Ltd - About us</title>
    <style>
        .container2{
            margin: 30px 150px;
        }
    </style>
     <link rel="stylesheet" type="text/css" href="2style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="box">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">BIT 2 HUYE</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="Home page.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="table.html">Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="list.html">List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="image.php">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="audio.php">Audio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="video.html">Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="articles.php">Articles</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Settings
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="login.html">Login</a></li>
                                            <li><a class="dropdown-item" href="registration.php">Register</a></li>
                                            <li><a class="dropdown-item" href="admin.html">Admin</a></li>
                                        </ul>
                                    </li>
                                    <li> 
                                        <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search"
                                                aria-label="Search">
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

        <!-- KWIZERA Bonheur -->
        <div class="card-body">
            <h2>Multimedia Items</h2>
            <div>
            <a href = "add-multimedia.html" class="btn btn-primary mb-4">ADD NEW MULTIMEDIA</a>
        </div>
            <div class="row gx-5">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4 mb-4">';
                        echo '<img src="' . $row['location'] . '" alt="' . $row['type'] . '" class="img-fluid">';
                        echo '<p>Type: ' . $row['type'] . '</p>';
                        echo '<p>Upload Date: ' . $row['upload_date'] . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No multimedia items found.</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Close database connection -->
    <?php
    $conn->close();
    ?>
</body>

</html>
