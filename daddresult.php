<?php

$eid = $_POST['eid'];
$name= $_POST['name'];
$s1 = $_POST['s1'];
$c1 = $_POST['c1'];
$s2 = $_POST['s2'];
$c2 = $_POST['c2'];
$s3 = $_POST['s3'];
$c3 = $_POST['c3'];
$s4 = $_POST['s4'];
$c4 = $_POST['c4'];
$s5 = $_POST['s5'];
$c5 = $_POST['c5'];
$s6 = $_POST['s6'];
$c6 = $_POST['c6'];
$content = $_POST['content'];

// $dbUser = 'user';
// $dbPass = 'pass';
// $dbHost = '127.0.0.1';
// $dbName = 'dance';

$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbName = "dance";

try
{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert input data to movie database
    $query = "INSERT INTO participant (eventid, name, remark, s1, c1, s2, c2, s3, c3, s4, c4, s5, c5, s6, c6) VALUES ('" . $eid . "', '" . $name . "', '" . $content . "', '" . $s1 . "', '" . $c1 . "', '" . $s2 . "', '" . $c2 . "', '" . $s3 . "', '" . $c3 . "', '" . $s4 . "', '" . $c4 . "', '" . $s5 . "', '" . $c5 . "', '" . $s6 . "', '" . $c6 . "')";
    $db->exec($query);
}
catch(PDOEXCEPTION $ex)
{
    echo "Something bad happened: " . $ex;
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add a Review</title>
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
            text-align: left;
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
                <a class="navbar-brand" href="dancehome.php">Competition Home</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="dbrowse.php">Browse</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li class="active"><a href="dselect.php">Score a Competition</a></li>
                    <li style="padding-left: 750px"><a href="dadmin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Score an Event</h1>
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
                        <h2> Successfully Submitted </h2>
                    </div>
                    <div style="text-align: center">
                        <h3> Scores will be posted after the administrator has reviewed them </h3>
                        <form id="form" action="dselect.php" method="post">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Score another participant</button>
                        </form>
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