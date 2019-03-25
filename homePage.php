<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
        <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
        <link href="ex21.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><<a href="register.php"></form>"><span class="glyphicon glyphicon-log-in"></span> register </a></li>

                    </ul>
                </div>
            </div>
        </nav>
    <center>
        <h1>  ISBN-E Library </h1> </center>
    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-2 sidenav">

                <?php
                if (!empty($_SESSION)) {
                    echo "<html> <div id='message'> </html>";
                    echo "Hey " . $_SESSION['firstName'] . "!" . '<br>';
                    echo "<br>";
                    echo '<ul class="nav navbar-nav navbar">';
                    echo '<li><a href="logOut.php"></form>"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>';
                    echo '</ul>';
                    echo '</div>';
                } else {
                    echo "Welcome Guest!";
                }
                ?>

              
            </div>
            <div class="col-sm-8 text-left"> 
                <div class="form-group">
                    <label for="username"></label>
                    <input type="text" class="form-control"  placeholder="username" name="username">
                    <br>
                    <label for="password"></label>
                    <input type="text" class="form-control"  placeholder="password" name="password">
                    <br>
                    <input type="submit" class="form-control button"  value="login">
                    <br>
                </div>
                <h4> Don't have an account? please register via the link below</h4>
                <a href="register.php"></form>register </a>
            </div>

        </div>
    </div>

    <footer class="container-fluid text-center">


        <p>Contact information: <a href="https://outlook.live.com/owa/">
                library@hotmail.co.uk</a></p>
    </footer>


</body>
</html>