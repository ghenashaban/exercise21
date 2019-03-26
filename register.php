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
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="homePage.php">home</a></li>
            
        
      
      </ul>
       
      
    </div>
  </div>
</nav>
       
    <center>  <h1 class="hide"> Be a Member today for Free! </h1>
       
      
    
    </center>
    
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        <p>
    </div>
    <div class="col-sm-8 text-left"> 
        <center> <h1 class="dontAppear">Become a member Today!</h1> 
            <div class="text">
         <?php
        
        if(!empty($_SESSION)){
           
         
            echo "<h1> You are still logged in!</h1>";
           
            echo "<html> <div id='message'> </html>";
     echo "Your Name is: " . $_SESSION['username'] . '<br>';
        echo "Your address is: " . $_SESSION['address'] . '<br>';
        echo "Your favourite animal is: " . $_SESSION['animal'] . '<br>';
       
       echo"Your profile picture is:";
        echo "<div id='image'>";
        echo "<img src=' ";
         echo $_SESSION['profilePic'];
             echo " ' alt='picture' height=400px width=400px/>";
          echo "</div>";
     echo '<ul class="nav navbar-nav navbar">';
        echo '<li><a href="logOut.php"></form>"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>';
     echo '</ul>';
     echo '</div>';
        }
        
        ?>
            </div>
             </center>
       
        <div class="dontAppear">
            <div class="paddingForm">
                <form action="login.php" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
            
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control"   placeholder="Enter first name" name="firstName" autofocus="true">
    <br>
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control"  placeholder="Enter last name" name="lastName">
    <br>
    <label for="email">email</label>
    <input type="email" class="form-control"   placeholder="email" name="email">
    <br>
    <label for="Address"></label>
    <input type="text" class="form-control" placeholder="Address" name="address">
    <br>
    <label for="username"></label>
    <input type="text" class="form-control"  placeholder="username" name="username">
    <br>
    <label for="password"></label>
    <input type="text" class="form-control"  placeholder="password" name="password">
    <br>
  

    <input type="submit" class="form-control button"  value="Register">
    <br>
  </div>
            </div>
  </div>

        </form>
   
    </div>
  
  </div>
</div>

          

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
<?php if(!empty($_SESSION)){ ;?>
    
    $(document).ready(function(){
 
    $(".dontAppear").hide(500);
  });
 
<?php } ;?>
    
</script>


    </body>
</html>
