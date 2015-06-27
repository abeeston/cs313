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
                    <li class="active"><a href="dsearch.php">Search</a></li>
                    <li><a href="dselect.php">Score a Competition</a></li>
                    <li style="padding-left: 750px"><a href="dadmin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
            <div class="jumbotron">
                <h1><br/>Search <span class="glyphicon glyphicon-search"></span><br/></h1>
            </div>
        </div>
    </nav><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div class="container-fluid">
                    <div class="jumbotron" id="col2">
                        <h2> Advanced Search </h2>
                    </div>
                    <form id="form" action="searchresults.php" method="post">
                        <!--<h4> Select a Genre </h4>
                        <div class="form-group">
                            <select class="form-control" name="genre" id="genre">
                                <option>Ballet</option>
                                <option>Swing</option>
                                <option>Jazz</option>
                                <option>Hip Hop</option>
                                <option>Latin</option>
                                <option>Folk</option>
                                <option>Ballroom</option>
                            </select>
                        </div>-->
                        <label for="subject">Group</label>
                            <input type="text" class="form-control" name="subject" maxlength="100"></input><br/>
                            <label for="subject">Date</label>
                            <input type="text" name="subject" width="2" style="color: grey" value="Month (ex. 'May')"></input>
                            <input type="text" name="subject" width="4" style="color: grey" value="Day (ex. '01')"></input>
                            <input type="text" name="subject" width="5" style="color: grey" value="Year (ex. '2014')"></input><br/>
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