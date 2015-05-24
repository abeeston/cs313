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
        #title {
            color: #cc3333;
        }
        #rating {
            text-align: left;
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
                    <li class="active"><a href="browse.php">Browse</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="add.php">Add a Movie</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Browse <span class="glyphicon glyphicon-list"></span><br/><small> What are you looking for? </small> </h1>
            </div>
        </div>
    </nav><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div class="container-fluid" id="test">
                    <div class="jumbotron" id="col1">
                        <h2> Browse our collection </h2>
                    </div>
                    <div id="test">
<?php

$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbName = "movies";

echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPass<br />\n";

try
{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query2 = "SELECT * FROM movie m 
    JOIN moviegenre mg ON m.id = mg.movieid 
    JOIN genre g ON g.id = mg.genreid
    JOIN review r ON r.movieid = m.id
    WHERE m.id = mg.movieid";

    $title = "starting";
    $display = true;
    foreach ($db->query($query2) as $row2)
    {
        if ($title != $row2['title']) 
        {
            $title = $row2['title'];
            echo '<h2 id="title">' . $row2['title'] . " (" . $row2['year'] . ')<br/><hr/></h2><h4> <u>- Genres - </u><br/>';
            $display = false;
        }
        echo $row2['name'] . '  <br/>  ';
       
        if ($display == false)
        {
            $display = true;
            echo "<h4 id=\"rating\">" . $row2['rating'] . " stars<br/> " . $row2['subject'] . "<br/>" . "<h5 id=\"rating\">" . $row2['content'] . "</h5></h4>";
        }
    } 
    echo '</h4>';
}
catch(PDOEXCEPTION $ex)
{
    echo "Something bad happened: " . $ex;
    die();
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