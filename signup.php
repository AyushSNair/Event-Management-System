<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/_dbconnect.php';

$username = $_POST["username"];
$roll = $_POST["roll"];
$branch = $_POST["branch"];
$semester = $_POST["semester"];
$division = $_POST["division"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$exists=false;



if(($password == $cpassword) && ($username = $username) && ($roll == $roll) && ($branch == $branch) && ($semester == $semester) && ($division== $division ) && $exists==false){
$sql = "INSERT INTO `userk` ( `username`,`rollno`,`branch`,`semester`,`division`,`password`, `dt`) VALUES ('$username','$roll' , '$branch','$semester','$division','$password',current_timestamp())";
$result = mysqli_query($conn, $sql);
if ($result){
  $showAlert = true;
}
}

else if(($password != $cpassword) && ($username = $username) && ($roll == $roll) && ($branch == $branch) && ($semester == $semester) && ($division== $division ) && $exists==false){
  $showError = "Passwords Do Not Match";
}

else{
  $showError = "Please Enter All Details";
}
}

?>



<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
#CSS STYLES
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
height: 50px;
align-items: center;
}

.flex-sem{
  display: flex;
 justify-content: space-between;
 width: 200px;
 
}

.semester-class{
  width: 448px;
}

.sign-nav-flex{
  background-color: black;
  height: 100px;
}

.nav-link {
  color: white;
  padding-top: 30px;
 }

 .event{
  color: white;
 }

 .text-center{
  color: white;
 }

 .bold-text{
  color: white;
 }

 .form-class{
  padding-left: 400px;
 }
</style>

  </head>
  <body>
    #NAVIGATION BAR
<div class=sign-nav-flex> 
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/Main-Menu.html"><strong>Back To Main-Menu</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/loginsystem/login.php"><strong>Go To Login Page</strong></a>
  </li>
  <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"
            ><strong class="event">Event Manager(Disabled)</strong></a
          >
        </li>
  </ul>
<p></p>
  #ALERT MESSAGES
  <?php
  if($showAlert){
  echo' 
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>Your account is now created. You can login now.
  
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

 #SIGN-UP FORM
<div class="container">

<h1 class="text-center" >Sign Up To Our Website Now!</h1>

<form  action="/loginsystem/signup.php" method="post" class="form-class">
  <div class="form-group col-md-6">
    <label for="username"><b class="bold-text">Username</b></label>
    <input type="text" class="form-control" id="username"  name="username"
    aria-describedby="emailHelp"  placeholder="Enter Username">
</div>
<p></p>

    <div class="form-group col-md-6">
    <label class="form-label" for="typeNumber"><b class="bold-text">Roll Number</b></label>
    <input type="number" id="typeNumber"  name="roll" class="form-control" placeholder = "Enter Roll Number"/>
    
</div>

<p></p>

<div class="form-outline col-md-6" data-mdb-input-init>
<label class="form-label" for="typeText"><b class="bold-text">Branch</b></label>
  <input type="text" id="typeText" class="form-control" name="branch" placeholder="Enter Branch" />
  
</div>
 <p></p>
<div class="semester-class">
  <label><b class="bold-text">Semester</b></label>
<select class="form-select " aria-label="Default select example" name="semester" >
  <option selected>--Select Semester--</option>
  <option value="1">Semester1</option>
  <option value="2">Semester2</option>
  <option value="3">Semester3</option>
  <option value="4">Semester4</option>
  <option value="5">Semester5</option>
  <option value="6">Semester6</option>
  <option value="7">Semester7</option>
  <option value="8">Semester8</option>
</select>
</div>
<p></p>
<div class="semester-class">
  <label><b class="bold-text">Division</b></label>
<select class="form-select " aria-label="Default select example" name="division" >
  <option selected>--Division--</option>
  <option value="A">A</option>
  <option value="B">B</option>
  
</select>
</div>


<p></p>
  <div class="form-group col-md-6">
    <label for="password"><b class="bold-text">Password</b></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <p></p>

  <div class="form-group col-md-6">
    <label for="cpassword"><b class="bold-text">Confirm Password</b></label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password">
    <small id="emailHelp" class="form-text text-muted"><b class="bold-text">Make sure to type the same password.</b></small>
  </div>

 
  
  <button type="submit" class="btn btn-primary">Sign-Up</button>
</form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
