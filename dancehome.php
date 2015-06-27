<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dance Competition Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #CCCCCC;
        }
        .col-sm-4 {
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
                    <li><a href="search.php">Search</a></li>
                    <li><a href="dselect.php">Score a Competition</a></li>
                    <li style="padding-left: 750px"><a href="dadmin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Dance Competition Home</h1>
            </div>
        </div>
    </nav><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="container-fluid">
                    <div class="jumbotron" id="col1">
                        <h2> Browse Events </h2>
                        <a href='dbrowse.php' class="btn btn-info btn-lg">
                             <span class="glyphicon glyphicon-th-list"></span> List
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container-fluid">
                    <div class="jumbotron" id="col2">
                        <h2> Advanced Search </h2>
                        <a href="search.php" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-search"></span> Search 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container-fluid">
                    <div class="jumbotron" id="col3">
                        <h2> Score an Event </h2>
                        <a href="dselect.php" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-plus"></span> Add 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
</body>
</html>
