<?php 
//Start the session
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
  

  
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
                          <li><<a href="login.php"></form>"><span class="glyphicon glyphicon-log-in"></span> log in </a></li>

                    </ul>
               
            </div>
        </nav>
       
    
       
      
    
    </center>
    
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    <div class="col-sm-8 text-left"> 
       
       <center>
        <?php
        
        unset($_SESSION['username']);
        unset($_SESSION['password']);
      
        session_destroy();
        
        if(empty($_SESSION)){
            echo "<h1>You have successfully logged out. <br> Please log in again or go to the Home Page!</h1>";
        }
        
         //In the body of this page add code to test if the $_SESSION superglobal is empty. 
        //If it is empty add code to display the message “Welcome Guest
        
        ?>
        <br>
       
        </center>
    
        
   
    </div>
    
  </div>
</div>

      
     </body>
</html>
