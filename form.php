<?php

require 'vendor/autoload.php';
use api\Request;




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body class="light-blue lighten-2">
<div class="container">
    <br>
    <div class="row">
        <div class="col s12">
            <div class="card center-align blue-grey darken-3">
                <div class="card-content white-text">
                    <img src="https://www.theodo.fr/uploads/blog//2016/05/octocat.png" alt="">
                    <h2>Generate Your Github Snippet</h2>

                    <form action="code.php" method="post">
                        <div class="input-field col s12">
                            <label for="username">Put Username Github</label>
                            <input id="username" type="text" class="validate" name="username">


                        </div>
                        <button class="btn waves-effect waves-light light-blue darken-1" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>