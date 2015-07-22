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
                <a class="navbar-brand" href="dancehome.php">Competition Home</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="dbrowse.php">Browse</a></li>
                    <li><a href="dsearch.php">Search</a></li>
                    <li><a href="dselect.php">Score a Competition</a></li>
                    <li class="active" style="padding-left: 750px"><a href="dadmin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
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
                        <h2> Scores submitted recently </h2>
                    </div>
                    <div style="text-align: center; background-color: white">
                    <?php

    //test password


// $dbUser = 'user';
// $dbPass = 'pass';
// $dbHost = '127.0.0.1';
// $dbName = 'dance';

$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
$dbName = "dance";

//echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPass<br />\n";

try
{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query2 = "SELECT * FROM participant";

    foreach ($db->query($query2) as $row2)
    {
        echo "<hr/><h3 style=\"color: #333399\">" . $row2['name'] . "</h3>";
        echo "<table class=\"table table-hover\">
                                <thead>
                                  <tr>
                                    <th>Category</th>
                                    <th>Score</th>
                                    <th>Comments</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Execution</td>
                                    <td>" . $row2['s1'] . "/10</td>
                                    <td>" . $row2['c1'] . "</td>
                                  </tr>
                                  <tr>
                                    <td>Energy</td>
                                    <td>" . $row2['s2'] . "/10</td>
                                    <td>" . $row2['c2'] . "</td>
                                  </tr>
                                  <tr>
                                    <td>Control of Movement</td>
                                    <td>" . $row2['s3'] . "/10</td>
                                    <td>" . $row2['c3'] . "</td>
                                  </tr>
                                  <tr>
                                    <td>Visual Effects</td>
                                    <td>" . $row2['s4'] . "/10</td>
                                    <td>" . $row2['c4'] . "</td>
                                  </tr>
                                  <tr>
                                    <td>Choreography/Creativity</td>
                                    <td>" . $row2['s5'] . "/10</td>
                                    <td>" . $row2['c5'] . "</td>
                                  </tr>
                                  <tr>
                                    <td>Overall Effect</td>
                                    <td>" . $row2['s6'] . "/10</td>
                                    <td>" . $row2['c6'] . "</td>
                                  </tr>
                                </tbody>
                              </table>";
                              echo "<h5>Comments:</h5>" . $row2['remark'] . "<br/>";
    } 
}
catch(PDOEXCEPTION $ex)
{
    echo "Something bad happened: " . $ex;
    die();
}



?>
                    <!--<a href="addmovie.php" class="btn btn-info" role="button">Add an Event</a>
                    <a href="addtopic.php" class="btn btn-info" role="button">Add a Participant</a>-->
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
