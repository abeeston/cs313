<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add a Review</title>
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
                <h1><br/>Score an Event</h1>
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
                    <form id="form" action="daddresult.php" method="post" onsubmit="return validate()">
                        <?php

$eid = $_POST['event'];
echo "<input type='hidden' value='$eid' name='eid'/>";

?>
                            <label for="movie">Participant name: </label>
                            <input type="text" class="form-control" name="name"/>
                            <label for="movie"></label>
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>Category</th>
                                    <th>Score</th>
                                    <th>Comments</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Execution</td>
                                    <td><input type="text" name="s1" size="2">/10</td>
                                    <td><input type="text"  name="c1"></td>
                                  </tr>
                                  <tr>
                                    <td>Energy</td>
                                    <td><input type="text"   name="s2" size="2">/10</td>
                                    <td><input type="text"  name="c2" ></td>
                                  </tr>
                                  <tr>
                                    <td>Control of Movement</td>
                                    <td><input type="text"  name="s3"  size="2">/10</td>
                                    <td><input type="text"  name="c3" ></td>
                                  </tr>
                                  <tr>
                                    <td>Visual Effects</td>
                                    <td><input type="text"  name="s4"  size="2">/10</td>
                                    <td><input type="text"  name="c4" ></td>
                                  </tr>
                                  <tr>
                                    <td>Choreography/Creativity</td>
                                    <td><input type="text"  name="s5"  size="2">/10</td>
                                    <td><input type="text"  name="c5" ></td>
                                  </tr>
                                  <tr>
                                    <td>Overall Effect</td>
                                    <td><input type="text"  name="s6"  size="2">/10</td>
                                    <td><input type="text"  name="c6" ></td>
                                  </tr>
                                </tbody>
                              </table>
                            <label for="content">Additional Comments:</label>
                            <textarea class="form-control" name="content" maxlength="1000" rows="4"></textarea> <br/>
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