<?php

//test password
$username = $_POST['username'];
$password = $_POST['password'];

// $dbUser = 'abeeston';
// $dbPass = 'moviepassword';
// $dbHost = '127.0.0.1';
// $dbName = 'movies';

$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbName = 'movies';
try {

$found = false;

$pdo = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName . ";" , $dbUser , $dbPass);

$query = $pdo->prepare("SELECT username, password FROM user WHERE username = :username");
$query->bindValue(':username', $username, PDO::PARAM_STR);
$query->execute();

    while($row = $query->fetch(PDO::FETCH_ASSOC)) {

        if ($password == $row['password']) {
            $found = true;
        }
    }
    if ($found == false) {
        header("Location: admin.php");
    }
} catch (PDOException $err) {
    echo $err;
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #CCCCCC;
        }
        .col-sm-6 {
            text-align: center;
        }
        .jumbotron {
            background-color: #222222; 
            color: #DDDDDD;
        }
        #col1 {
            background-color: #cc3333;
        }
        #col2 {
            background-color: #009933;
        }
        #col3 {
            background-color: #333399;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="moviehome.php">Movie Database</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="moviehome.php">Home</a></li>
                    <li><a href="browse.php">Browse</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="add.php">Add a Movie</a></li>
                    <li style="padding-left: 750px"><a href="admin.php"><span class="glyphicon glyphicon-user" class="active"></span> Admin</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Admin <span class="glyphicon glyphicon-user" class="active"></span><br/></h1>
            </div>
        </div>
    </nav><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div class="container-fluid">
                    <div class="jumbotron" id="col3">
                        <h2> What would you like to do? </h2>
                    </div>
                    <a href="addmovie.php" class="btn btn-info" role="button">Add a movie</a>
                    <a href="addtopic.php" class="btn btn-info" role="button">Add a topic</a>
                    <a href="removereview.php" class="btn btn-info" role="button">Remove a review</a>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <br/><br/>
</body>
</html>