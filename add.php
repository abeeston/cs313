<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
        function validate()
        {
            var rating = document.getElementById("rating").value;
            if (rating > 5 || rating < 0)
            {
               alert("Error - The rating must be between 0 and 5");
               document.getElementById("rating").focus();
               return false;
            }
            return true;
        }
    </script>
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
                <a class="navbar-brand" href="moviehome.php">Movie Database</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="moviehome.php">Home</a></li>
                    <li><a href="browse.php">Browse</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li class="active"><a href="add.php">Add a Movie</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Add a Review <span class="glyphicon glyphicon-plus"></span><br/><small> Tell us what you think </small> </h1>
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
                        <h2> Please fill in the following information </h2>
                    </div>
                    <form id="form" action="browseresults.php" method="post" onsubmit="return validate()">
                            <label for="movie">Select a Movie</label>
                            <select class="form-control" name="movie" id="movie">
<?php

$dbUser = 'abeeston';
$dbPass = 'moviepassword';
$dbHost = '127.0.0.1';
$dbName = 'movies';

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

    $query2 = "SELECT * FROM movie";

    foreach ($db->query($query2) as $row2)
    {
        echo '<option value="' . $row2['id'] . '">' . $row2['title'] . "</option>\n";
    } 
}
catch(PDOEXCEPTION $ex)
{
    echo "Something bad happened: " . $ex;
    die();
}

?>
                            </select><br/><br/>
                            <label for="rating">Rating <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span></label>
                            <input type="text" class="form-control" id="rating" maxlength="1"></input>
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" maxlength="100"></input>
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" maxlength="1000" rows="10"></textarea> <br/>
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