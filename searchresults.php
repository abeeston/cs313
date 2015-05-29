<?php

$keyword = $_POST['keyword'];
$genre = $_POST['genre'];

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
        #test {
            background-color: white;            
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
                    <li class="active"><a href="search.php">Search</a></li>
                    <li><a href="add.php">Add a Movie</a></li>
                    <li style="padding-left: 750px"><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Here's what we found... <br/><small> See what you're looking for? </small> </h1>
            </div>
        </div>
    </nav><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div id="test">
                <div class="container-fluid">
                    <div class="jumbotron" id="col2">
                        <h2> Search Results for
<?php
    echo $genre . " movies ";
    if ($keyword != "")
    {
        echo "containing \"$keyword\"";
    }
?>
                        </h2>
                    </div>
                    <?php

$keyword = $_POST['keyword'];
$genre = $_POST['genre'];

// $dbUser = 'abeeston';
// $dbPass = 'moviepassword';
// $dbHost = '127.0.0.1';
// $dbName = 'movies';

$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbName = "movies";

$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($keyword == "") {
    try 
    {
        $query2 = "SELECT * FROM movie m
        JOIN moviegenre mg ON (m.id = mg.movieid)
        JOIN genre g on (mg.genreid = g.id)"; 
        foreach ($db->query($query2) as $row2)
        {
            if ($genre == $row2['name'])
            {
                echo '<h3>' . $row2['title'] . " (" . $row2['year'] . ")" . '<br/>';
            }
        }
        echo "</h3><hr/>";
    }
    catch(PDOEXCEPTION $ex)
    {
        echo "ERROR: " . $ex;
        die();
    }
}
else
{
    try
    {
        //$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query2 = "SELECT * FROM movie m
        JOIN moviegenre mg ON (m.id = mg.movieid)
        JOIN genre g on (mg.genreid = g.id)
        WHERE title LIKE '%$keyword%'"; 
        foreach ($db->query($query2) as $row2)
        {
            if ($genre == $row2['name'])
            {
                echo '<h3>' . $row2['title'] . " (" . $row2['year'] . ")" . '<br/>';
            }
            echo '</h3>';
        }
    }
    catch(PDOEXCEPTION $ex)
    {
        echo "ERROR: " . $ex;
        die();
    }
}
?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <br/><br/>
</body>
</html>