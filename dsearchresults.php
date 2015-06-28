<?php

$type = $_POST['type'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
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
                <a class="navbar-brand" href="dancehome.php">Competition Home</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="dbrowse.php">Browse</a></li>
                    <li><a href="dsearch.php">Search</a></li>
                    <li class="active"><a href="dselect.php">Score a Competition</a></li>
                    <li style="padding-left: 750px"><a href="dadmin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
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
                        <?php
                            echo "<h2>Search Results for \"" . $type . "\"</h2>";
                        ?>
                    </div>
<?php

if ($type == "Ballet") {
    echo "<h4> We're sorry, there are currently no events of that genre in our records </h4>";
} else if ($type == "Swing") {
    echo "<a href=\"swingfinals.php\">Swing Finals - March 3, 2015</a>";
} else if ($type == "Jazz") {

} else if ($type == "Hip Hop") {
    echo "<h4> We're sorry, there are currently no events of that genre in our records </h4>";
} else if ($type == "Latin") {
    echo "<h4> We're sorry, there are currently no events of that genre in our records </h4>";
} else if ($type == "Folk") {
    echo "<h4> We're sorry, there are currently no events of that genre in our records </h4>";
} else if ($type == "Ballroom") {
    echo "<h4> We're sorry, there are currently no events of that genre in our records </h4>";
} else {

} 


echo "<br/><br/>";

?>

                    <!--<h1> Swing Finals 2015 </h1>
                        <h4> March 3, 2015 </h4>
                        <pre> The final competition for the Great Basin Swing teams </pre>
                        <a href="#">More</a>

                        <h1> Swing Fever </h1>
                        <h4> April 29, 2015 </h4>
                        <pre> A competition held for youth aged 5 through 11 from studios throughout Davis County </pre>
                        <a href="#">More</a>-->
                    </div> <br/> <br/>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <br/><br/>
</body>
</html>