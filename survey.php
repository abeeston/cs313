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
        function validate() {
            var isChecked = $('best').prop('checked');
            if (isChecked) {
                return true;
            }
            else {
                return false;
            }
        }
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
        #form {
            padding-left: 150px;
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
    </nav><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="container-fluid">
                    <div class="jumbotron">
                        <h1> Survey Machine </h1>
                        <img src="avengers.jpg" class="center-block" alt="Avengers Logo" width="130" height="100">
                    </div>
                    <form id="form" action="results.php" method="post">
                        <h3>Which Avenger is the Best?</h3>
                        <div class="radio">
                            <label><input type="radio" name="best" value="0" title="What?! No.">Iron Man</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="best" value="1" title="Good second choice...">Thor</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="best" value="2" title="Nope.">Hulk</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="best" value="3" title="Meh">Black Widow</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="best" value="4" title="Really?">Hawkeye</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="best" value="5" title="You have chosen well">Captain America</label>
                        </div>
                        <h3> What did you think of <br/>Avengers Age of Ultron? </h3>
                        <div class="radio">
                            <label><input type="radio" name="ultron" value="6">Best one yet!</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="ultron" value="7" title="Me too. They should have killed off an avenger">Good</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="ultron" value="8">Not a fan</label>
                        </div>
                        <h3> Would you recommend this <br/> movie to a friend? </h3>
                        <div class="radio">
                            <label><input type="radio" name="friend" value="9">Yes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="friend" value="10">No</label>
                        </div>
                        <h3> Would you see it again? </h3>
                        <div class="radio">
                            <label><input type="radio" name="again" value="11">Yes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="again" value="12" title="Yeah, ain't nobody got money for that">Nope</label>
                        </div> <br/>
                    <a href="resultsb.php" role="button" class="btn btn-primary btn-large">View Results</a>
                    <button type="submit" class="btn btn-success">Vote Now</button>
                </form>  <br/><br/>
            </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <br/><br/>
</body>
</html>
