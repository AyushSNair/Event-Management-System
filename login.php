<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/_dbconnect.php';

$username = $_POST["username"];
$password = $_POST["password"];
$branch  = $_POST["branch"];
$division = $_POST["division"];

$sql = "Select * from userk where username='$username' AND password='$password' AND branch='$branch' AND division='$division' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1){
  $login = true;
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  header("location: welcome.php");
}

else{
  $showError = "Invalid Credentials";
}
}
?>



<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
  background-color: black;
  height: 100px;
}

.semester-class{
  width: 645px;
}

.nav-link{
  color: white;
  padding-top: 30px;
}

.text-center{
  margin-top: 20px;
}

.form-group{
  margin-top: 25px;
}

.form-outline{
  margin-top: 25px;
}

.semester-class{
  margin-top: 25px;
}

.btn {
  margin-top: 25px;
}
.text-center{
  color: white;
}

.event{
  color: white;
}

.bold-text{
  color: white;
}
</style>

  </head>
  <body >
<div class=sign-nav-flex> 
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/Main-Menu.html"><strong>Back To Main-Menu</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/loginsystem/signup.php"><strong>Go To Sign-Up Page</strong></a>
  </li>
  <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"
            ><strong class="event">Event Manager(Disabled)</strong></a
            >
        </li>
  </ul>

  <?php
  if($login){
  echo' 
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in.
  
</div>';
}

if($showError){
  echo' 
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>'.$showError.'
  
</div>';
}
?>
</div>

 
<div class="container">

<h1 class="text-center" >Login Below</h1>

<form  action="/loginsystem/login.php" method="post">
  <div class="form-group col-md-6 ">
    <label for="username"><b class="bold-text">Username</b></label>
    <input type="text" class="form-control" id="username"  name="username" aria-describedby="emailHelp" placeholder="Enter Username">
   
  </div>
  <div class="form-group col-md-6">
    <label for="password"><b class="bold-text" >Password</b></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>

  <div class="form-outline col-md-6" data-mdb-input-init>
<label class="form-label" for="typeText"><b class="bold-text">Branch</b></label>
  <input type="text" id="typeText" class="form-control" name="branch" placeholder="Enter Branch" />
  
</div>


<div class="semester-class">
  <label><b class="bold-text">Division</b></label>
<select class="form-select " aria-label="Default select example" name="division" >
  <option selected>--Division--</option>
  <option value="A">A</option>
  <option value="B">B</option>
  
</select>
</div>
  

 
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>

</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>