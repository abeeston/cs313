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
                <a class="navbar-brand" href="moviehome.php">Movie Database</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="moviehome.php">Home</a></li>
                    <li><a href="browse.php">Browse</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="add.php">Add a Movie</a></li>
                    <li style="padding-left: 750px"><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Movie Recommendation System <br/><small> Find movies that match your tastes </small> </h1>
            </div>
        </div>
    </nav><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="container-fluid">
                    <div class="jumbotron" id="col1">
                        <h2> Browse Movies </h2>
                        <a href='browse.php' class="btn btn-info btn-lg">
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
                        <h2> Create a Review </h2>
                        <a href="add.php" class="btn btn-info btn-lg">
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
