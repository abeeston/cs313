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
                    <li class="active"><a href="search.php">Search</a></li>
                    <li><a href="add.php">Add a Movie</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Search <span class="glyphicon glyphicon-search"></span><br/><small> What are you looking for? </small> </h1>
            </div>
        </div>
    </nav><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div class="container-fluid">
                    <div class="jumbotron" id="col2">
                        <h2> Advanced Search </h2>
                    </div>
                    <form id="form" action="searchresults.php" method="post">
                        <h4> Select a Genre </h4>
                        <div class="form-group">
                            <select class="form-control" name="genre" id="genre">
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

    $query2 = "SELECT * FROM genre";

    foreach ($db->query($query2) as $row2)
    {
        echo '<option value="' . $row2['name'] . '">' . $row2['name'] . "</option>\n";
    } 
}
catch(PDOEXCEPTION $ex)
{
    echo "Something bad happened: " . $ex;
    die();
}

?>
                               <!-- <option value="Action">Action</option>
                                <option value="Animated">Animated</option>
                                <option value="Family">Family</option>
                                <option value="Horror">Horror</option>
                                <option value="Musical">Musical</option>
                                <option value="Sci-Fi">Sci-Fi</option>-->
                            </select>
                        </div>
                        <h4> Add a Keyword (optional) </h4>
                        <input name="keyword"></input><br/><br/>
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