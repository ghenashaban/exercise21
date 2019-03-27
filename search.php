<?php
// Start the session
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

                          <li><<a href="logOut.php"></form>"><span class="glyphicon glyphicon-log-in"></span> log out </a></li>

                    </ul>
               
            </div>
        </nav>
    <center>  
           <?php
// Start the session

       $_SESSION["username"] =$_POST['username'];
            $_SESSION["password"] = $_POST['password'];
            
            
 
       if(!empty($_SESSION)){
                   echo "Welcome " . $_SESSION["username"] . '<br>';
       }     
        ?>
          <div class="dropdown">
              Please search for the book using the below categories
              <br>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Search
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Author First Name</a>
    <a class="dropdown-item" href="#">Author Last Name </a>
    <a class="dropdown-item" href="#">Genre</a>
        <a class="dropdown-item" href="#">ISBN</a>
  </div>
</div>
       
      
    
    </center>
    
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        <p>
    </div>
    <div class="col-sm-8 text-left"> 
        <center> <h1 class="dontAppear">Become a member Today!</h1> 
            <div class="text">
      
            </div>
             </center>
            <div class="dontAppear">
            <div class="paddingForm">
                <form action="search.php" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
        
                <h4> Don't have an account? please register via the link below</h4>
                <a href="register.php"></form>register </a>
   
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