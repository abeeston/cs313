<?php

$total = 13;

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
            padding-left: 125px;
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
                        <h2> Please answer each question </h2>
                        <a href="resultsb.php" role="button" class="btn btn-primary btn-large">View Results</a>
                    </div>
                </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <br/><br/><br/>
</body>
</html>
