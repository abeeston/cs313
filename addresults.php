<?php

$id = $_POST['movie'];
$rating = $_POST['rating'];
$subject = $_POST['subject'];
$content = $_POST['content'];

$name = "";
$year = "";
$numratings = 0;
$totalrating = 0;
$avrating = 0;

$dbUser = 'abeeston';
$dbPass = 'moviepassword';
$dbHost = '127.0.0.1';
$dbName = 'movies';

// $dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
// $dbPass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
// $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
// $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
// $dbName = "movies";

// Insert the input data into the database
try 
{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query->$db->prepare("INSERT INTO review (movieid, rating, subject, content) VALUES (:id, :rating, :subject, :content)");

    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->bindValue(':rating', $rating, PDO::PARAM_STR);
    $query->bindValue(':subject', $subject, PDO::PARAM_STR);
    $query->bindValue(':content', $content, PDO::PARAM_STR);

    $query->execute();
    //$db->exec($query);
}
catch (PDOEXCEPTION $ex)
{
    echo "Something bad happened: " . $ex;
    die();
}

// Get the title and rating data for display later
try
{
    // Movie title
    $query1 = "SELECT * FROM movie WHERE id = :id";
    $query1->bindValue(':id', $id, PDO::PARAM_STR);
    foreach ($db->query($query1) as $row1)
    {
        $name = $row1['title'];
        $year = $row1['year'];
    } 

    // Movie ratings
    $query1 = "SELECT * FROM review WHERE movieid = :id";
    foreach ($db->query($query1) as $row1)
    {
        $numratings++;
        $totalrating += $row1['rating'];
    } 
    $avrating = round($totalrating / $numratings);
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
    <title>Movie Recommendation</title>
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
            background-color: #6633cc;
            text-align: center;
        }
        #col2 {
            background-color: #009933;
        }
        #title {
            color: #6633CC;
        }
        #rating {
            text-align: left;
        }
        #col3 {
            background-color: #333399;
        }
        #test {
            background-color: white;   
            text-align: left;         
        }
        #star {
            font-size: 50px;
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
                    <li style="padding-left: 750px"><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>
<?php
   
    echo $name . "   <small>" . $year . "</small>";
?>
                </h1>
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
<?php
    for ($i = 0; $i < 5; $i++)
    {
        if ($avrating > $i)
        {
            echo "<span class='glyphicon glyphicon-star' id='star'></span>";
        }
        else
        {
            echo "<span class='glyphicon glyphicon-star-empty' id='star'></span>";
        }
    }
?>
                    </div>
                    <div id="test">
<?php

try
{
    // Movie title
    $query1 = "SELECT * FROM movie WHERE id = $id";
    foreach ($db->query($query1) as $row1)
    {
        echo "<h2>" . $row1['title'] . " (" . $row1['year'] . ")</h2>";
    } 
    echo "<hr/>";
    
    // Movie genres
    echo "<h3 id='title'>Genres</h3>";
    $query1 = "SELECT * FROM moviegenre mg 
    JOIN genre g ON g.id = mg.genreid
    WHERE mg.movieid = $id";

    foreach ($db->query($query1) as $row1)
    {
        echo "<h5>" . $row1['name'] . "</h5>";
    }

    // Movie ratings
    echo "<h3 id='title'>Ratings</h3>";
    $query1 = "SELECT * FROM review WHERE movieid = $id";
    foreach ($db->query($query1) as $row1)
    {
        echo "<h4>" . $row1['rating'] . " stars</h4>";
        echo "<h5><i>" . $row1['subject'] . "</i></h5>";
        echo "<h5>" . $row1['content'] . "</h5><br/>";
    } 
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
    <br/><br/><br/><br/><br/><br/>
</body>
</html>