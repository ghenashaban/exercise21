<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">             
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
   <link href="stylesheet.css" rel="stylesheet" type="text/css"/>

  
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
             <li><a href="homePage.php">Home</a></li>
        
             
      </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"></form>"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      </ul> 
      
      
    </div>
  </div>
</nav>
       
    <center>  <h1 class="hide"> Be a Member today for Free! </h1>
       
      
    
    </center>
    
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    <div class="col-sm-8 text-left"> 
       
       <center>
        <?php
        
        unset($_SESSION['username']);
        unset($_SESSION['colour']);
        unset($_SESSION['animal']);
        unset ($_SESSION['profilePic']);
        session_destroy();
        
        if(empty($_SESSION)){
            echo "<h1>You have successfully logged out. <br> Please log in again or go to the Home Page!</h1>";
        }
        //In the body of this page add code to test if the $_SESSION superglobal is empty. 
        //If it is empty add code to display the message “Welcome Guest
        ?>
        <br>
        </center>
         <center>
    <img src="images/logged out.jpg" alt="" id="loggedOut"/>
    </center>
        
   
    </div>
    
  </div>
</div>

      
   
          
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    </body>
</html>
