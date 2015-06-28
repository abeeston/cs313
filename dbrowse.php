<!DOCTYPE html>
<html lang="en">
<head>
    <title>Browse</title>
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
                <a class="navbar-brand" href="dancehome.php">Competition Home</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="dbrowse.php">Browse</a></li>
                    <li><a href="dsearch.php">Search</a></li>
                    <li><a href="dselect.php">Score a Competition</a></li>
                    <li style="padding-left: 750px"><a href="dadmin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Browse Events<span class="glyphicon glyphicon-list"></span><br/><small> What are you looking for? </small> </h1>
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
                        <h2>Most Recent First</h2>
                    </div>
                    <div id="test">
                        <h1> All That Jazz </h1>
                        <h4> March 14, 2015 </h4>
                        <pre> A high school level competition of jazz studios in the Utah North region </pre>
                        <a href="allthatjazz.php">More</a>

                        <h1> Swing Finals 2015 </h1>
                        <h4> March 3, 2015 </h4>
                        <pre> The final competition for the Great Basin Swing teams </pre>
                        <a href="swingfinals.php">More</a>

                        <h1> Dance Fever </h1>
                        <h4> April 29, 2015 </h4>
                        <pre> A competition held for girls aged 5 through 11 from studios throughout Davis County </pre>
                        <a href="dancefever.php">More</a><br/><br/>
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