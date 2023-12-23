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
          rgba(140, 140, 218, 0.8),
            rgba(3, 3, 38, 0.8)
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
  transition: opacity 1s;
}

.button:hover{
  opacity: 0.5;
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

footer{
      position: absolute;
      bottom: 0;
      left: 0;
      right:0;
      background-color: #111;
      height: auto;
      width: 100vw;
      font-family: "Open Sans";
      padding-top: 1px;
      color: #fff;
    }

    .footer-content{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    text-align: center;
    }

    .footer-content h3{
      font-size: 1.8rem;
      font-weight: 400;
      text-transform: capitalize;
      line-height: 3rem;
    }

    .footer-content p{
      max-width: 500px;
      margin: 10px auto;
      line-height: 28px;
      font-size: 14px;
    }

    .footer-bottom{
      background-color: #000;
      width: 100vw;
      padding: 20px 0;
      text-align: center;
      height: 30px;
      padding: 5px;
    }

    .footer-bottom p{
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
    }

    .footer-bottom span{
      text-transform: uppercase;
      opacity: .4;
      font-weight: 200;
    }

    .about-class{
    color: white;
    }
    </style>
  </head>
  <body>

<div class="top">
<img class="fcrit-logo" src="fcritlogo.png">
<h1 class="top-text"> EVENT-MANAGER</h1>
<a class="log" href="/loginsystem/logout.php"><strong>logout</strong></a>
</div> 


<div class="rect-class">
<div class="container">
  <h1 class="text-center">
    Welcome  <?php  echo$_SESSION['username']?>
  </h1>
</div>

<div class="flex">..</div>

<div><button class="button"><a class="link" href="http://localhost/loginsystem/event-manager.php"><b>Go To Campus Event-Manager</b></a></button></div>
</div>
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <footer>
  <div class="footer-content">
    <h3><a class="about-class" href="about-us.html" target="_blank">About Us</a></h3>
  </div>

  <div class="footer-bottom">
    <p><span>Department of </span>INFORMATION TECHNOLOGY</p>
  </div>
</footer>
  </body>
</html>