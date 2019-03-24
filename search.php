<!DOCTYPE html>
<?php
session_start();

?>
      
      
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        
        
        
        <?php
            $_SESSION["firstName"] =$_POST['firstName'];
            $_SESSION["lastName"] = $_POST['lastName'];
            $_SESSION["email"] = $_POST['email'];
            
 
       if(!empty($_SESSION)){
                   echo "Welcome " . $_SESSION["firstName"] . '<br>';
                   echo "last name is  " . $_SESSION['lastName'] . '<br>';
                   echo "email is " . $_SESSION["email"] . '<br>';
                  
       }
        ?>
        
        // add a form that has a search bar 
        // click on search button another button will appear (request) use JS.
        // request will direct u to a confirmation page. re-direct direct to search page.
    </body>
</html>
