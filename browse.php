<?php

$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbName = "movies";

echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPass<br />\n";

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
            text-align: center;
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
                        <form id="form" action="browseresults.php" method="post">
                            <h4> Select a Movie </h4>
                            <select class="form-control" name="movie" id="movie">
<?php

$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbName = "movies";

try
{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query2 = "SELECT * FROM movie";

    foreach ($db->query($query2) as $row2)
    {
        echo '<option value="' . $row2['id'] . '">' . $row2['title'] . "</option>\n";
    } 
    //echo '</h4>';
}
catch(PDOEXCEPTION $ex)
{
    echo "Something bad happened: " . $ex;
    die();
}

?>
                            </select><br/>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <br/><br/><br/><br/><br/><br/>
</body>
</html>