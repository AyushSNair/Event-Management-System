<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login </title>

    <style>

body {
        background-color: whitesmoke;
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(
            rgba(0, 0, 50, 0.8),
            rgba(0, 0, 50, 0.8)
          ),
          url(Corporate-Event-Planning.jpg);
        background-position: center;
        background-size: cover;
        position: relative;
      } 

.nav{
  display: flex;
  justify-content: space-between;
  
}

.text-center{
  margin-top: 50px;
  
}


.top{
  display: flex;
 background-color: black;
 height: 100px;
 justify-content: space-between;
 align-items: center;
 color: white;
}

.top-text{
  
}

.button{
  border-style: solid;
  margin-left: 628px;
  padding: 20px;
  border-radius: 20px;
}
.text-center{
  margin-top: 200px;
  color: white;
}

.link{
  color: black;
}

.log{
  color: white;
  margin-right: 25px;
}

.fcrit-logo{
  width: 60px;
  margin-left: 20px;
}
    </style>
  </head>
  <body>

<div class="top">
<img class="fcrit-logo" src="fcritlogo.png">
<h1 class="top-text"> EVENT-MANAGER</h1>
<a class="log" href="/loginsystem/logout.php"><strong>logout</strong></a>
</div> 



<div class="container">
  <h1 class="text-center">
    Welcome - <?php  echo$_SESSION['username']?>
  </h1>
</div>

<div class="flex">..</div>

<div><button class="button"><a class="link" href="http://localhost/loginsystem/event-manager.php"><b>Go To Campus Event-Manager</b></a></button></div>
   
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
  </body>
</html>