<!DOCTYPE html>
<html lang="en">
<head>
    <title>Remove a Review</title>
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
                        <h2> Which review will you be removing? </h2>
                    </div>
                    <form id="form" action="removefinal.php" method="post" onsubmit="return validate()">
                            <label for="movie">Select a Movie</label>
                            <select class="form-control" name="reviewid" id="movie">
<?php

// $dbUser = 'abeeston';
// $dbPass = 'moviepassword';
// $dbHost = '127.0.0.1';
// $dbName = 'movies';

$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbName = "movies";

try
{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query2 = "SELECT title, r.id, content FROM review r
    JOIN movie m ON r.movieid = m.id";

    foreach ($db->query($query2) as $row2)
    {
        echo '<option value="' . $row2['id'] . '">' . $row2['title'] . ": " . $row2['content'] . "</option>\n";
    } 
}
catch(PDOEXCEPTION $ex)
{
    echo "Something bad happened: " . $ex;
    die();
}

?>
                    </select><br/><br/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <br/><br/>
</body>
</html>