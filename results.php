<?php

$cookie_name = "voted";
$cookie_value = "0";
setcookie($cookie_name, $cookie_value);

if($cookie_value >= 1)
{
    header("Location: error.php");
}

// get the values of votes from the page
$best = $_POST['best'];
$ultron = $_POST['ultron'];
$again = $_POST['again'];
$friend = $_POST['friend'];
$total = 13;

if (!isset($best) || !isset($ultron)  || !isset($again) || !isset($friend))
{
    header("Location: error2.php");
    //exit();
}
ini_set('precision', 2);

// initialize the array with all zeros
$results = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

$file = fopen("survey.txt", "r");

if($file) // read in existing values
{
    $content = file_get_contents("survey.txt");
    $results = explode("\n", $content);
}
else // create the new file if it doesn't exist
{
    $file = fopen("survey.txt", "w");
    fwrite($file2, implode("\n", $results));
}
fclose($file);

//update the results
$results[$best]++;
$results[$ultron]++;
$results[$again]++;
$results[$friend]++;
$results[$total]++;

//write the data to the file
$file2 = fopen("survey.txt", "w");
fwrite($file2, implode("\n", $results));
fclose($file2);

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
    <script>
        $(document).ready(function(){
            $('input').tooltip();   
        });
    </script>
    <style>
        body {
            background-color: #CCCCCC;
        }
        .col-sm-6 {
            background-color: #EEEEEE;
        }
        .jumbotron {
            background-color: #111111; 
            color: #FFFF33;
        }
        #display {
            padding-left: 150px;
        }
        h3 {
            color: #888888;
        }
        h2 {
            color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="survey.php">Survey Machine</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="survey.php">Home</a></li>
                    <li><a href="index.php">Amy Beeston Homepage</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="container-fluid">
                    <div class="jumbotron">
                        <h1> Survey Results </h1>
                        <img src="avengers.jpg" class="center-block" alt="Avengers Logo" width="130" height="100">
                    </div>
                    <div id="display">
                        <h2> Thank you for voting </h2>
                        <h3>Which Avenger is the Best?</h3>
                        <?php
                            echo "<h4>Iron Man: " . (($results[0]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>Thor: " . (($results[1]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>Hulk: " . (($results[2]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>Black Widow:" . (($results[3]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>Hawkeye: " . (($results[4]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>Captain America: " . (($results[5]/$results[13]) * 100) . "%</h4>";
                        ?>
                        <h3> What did you think of <br/>Avengers Age of Ultron? </h3>
                        <?php
                            echo "<h4>Great: " . (($results[6]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>Average: " . (($results[7]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>Poor: " . (($results[8]/$results[13]) * 100) . "%</h4>";
                        ?>
                        <h3> Would you recommend this <br/>movie to a friend? </h3>
                        <?php
                            echo "<h4>Yes: " . (($results[9]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>No: " . (($results[10]/$results[13]) * 100) . "%</h4>";
                        ?>
                        <h3> Would you see it again? </h3>
                        <?php
                            echo "<h4>Yes: " . (($results[11]/$results[13]) * 100) . "%</h4>";
                            echo "<h4>No: " . (($results[12]/$results[13]) * 100) . "%</h4>";
                        ?>
                    </div>
                </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <br/><br/><br/>
</body>
</html>
