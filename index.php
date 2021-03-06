﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Amy Beeston Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        #navbar {
            background-color: #000022;
        }
        .carousel-inner > .item > img {
            margin: 0 auto;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $('#carousel').carousel();
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-inverse" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Amy Beeston Homepage</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="aboutme.html">About Me</a></li>
                    <li><a href="assignments.html">Assignments</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">
                <h1>Amy Beeston</h1> <hr />
                <h4>Welcome to the official home page of Amy Beeston</h4>
            </div>
        </div>
    </nav>
    <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/family.jpg.jpg" alt="Family" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>My family</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="img/romeral.jpg.jpg" alt="Romeral" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>My mission in Rancagua, Chile</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="img/brothers.jpg.jpg" alt="Brothers" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Me with my little brothers</h3>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</body>
</html>
