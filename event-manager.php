<?php
 $showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  include 'partials/_eventconnect.php';

$nameofstudent = $_POST["nameofstudent"];
$nameofevent = $_POST["nameofevent"];
$eventDate = $_POST["eventDate"];
$eventTime = $_POST["eventTime"];
$eventVenue = $_POST["eventVenue"];
$coordinatorName = $_POST["coordinatorName"];
$eventBudget = $_POST["eventBudget"];



$exists = false; 
 if($exists == false){
  $sql = "INSERT INTO `event140` (`nameofstudent`, `nameofevent`,`eventDate`,`eventTime`, `eventVenue`, `coordinatorName`, `eventBudget`) VALUES ('$nameofstudent', '$nameofevent','$eventDate','$eventTime', '$eventVenue', '$coordinatorName','$eventBudget')";

  $result = mysqli_query($conn, $sql);
  if ($result){
    $showAlert = true;
  }
 }
}

require_once('partials/_eventconnect.php');
$query = "select * from event140";
$result = mysqli_query($conn,$query);




?>

<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Event-Manager</title>

    <style>
body{
  background-color: rgb(250,250,220);
}
      
.top{
  display: flex;
 background-color: #ADD8E6;
 height: 100px;
 justify-content: space-between;
 align-items: center;
}

.top-text{
  
}

.btn-add-data{
  padding: 10px 15px;
  cursor: pointer;
  background-color: black;
  color: white;
  border-radius: 6px;
  border-style: solid;
  margin-left: 55px;
  margin-top: 2px;
   transition: opacity 0.15s;
}

.overlay{
  width: 100%;
  position: fixed;
  top: 0%;
  background: rgba(0,0,0,0.5);
  height: 100vh;
  z-index:-1;
  opacity: 0;
  transition: 1s;
  
}

.add-data-form button{
 background-color: black;
  color: white;
  padding: 10px 15px;
 border-radius: 4px;
 border-style: solid;
 transition: opacity 0.15s;
}

.add-data-form button:hover{
  opacity: 0.8;
}

.add-data-form button:active{
  background-color: green;
}

.btn-add-data:hover{
 opacity: 0.8;

}

.btn-add-data:active{
  opacity: 0.4;
}

.showoverlay{
opacity: 1;
z-index: 1;
}

.add-data-form{
  width: 350px;
  padding: 30px 20px;
  border-radius: 8px;
  background-color: white;
  position: absolute;
  z-index: 9;
  left: 50%;
  top: -50%;
  transform: translate(-50%,-50%);
  box-shadow: 0px 0px 10px 3px #cccc;
transition : 2s;
}

.showadd-data-form{
  top: 50%;
}

.add-data-form input{
  width: 100%;
  margin-bottom: 15px;
  height: 35px;

}

.add-data-form span{
  position: absolute;
  color: black;
 padding-left:10px;
 padding-right:10px;
  right: 2px;
  top: 2px;
  widh: 30px;
  height: 30px;
  background-color: white;
  text-align: center;
  
  border-radius: 4px;
  transition: 0.5s;
  transition: opacity 0.5s;
}

.add-data-form span:hover{
  background-color: red;
}

.add-data-form span:active{
  
  opacity: 0.8;
}

.span-class{
  cursor: pointer;
  
}

.welcome-style{
  margin-left: 55px;
  margin-top: 8px;

}

.nav-logout{
  color: white;
transition: opacity 0.15s;

}

.nav-logout:hover{
  color:black;

}

.logout-button:hover{
  background-color: red;
}

.logout-button{
  border-radius: 4px;
  border-style: solid;
  border-width: 0.5px;
  margin-right: 10px;
  
  background-color: black;
  transition: background-color 0.15s;
}

.fcrit-logo{
  width: 60px;
  margin-left: 20px;
}
    </style>
  </head>
  <body >
    
  <div class="top">
<img class="fcrit-logo" src="fcritlogo.png">
<h1 class="top-text"> EVENT-MANAGER</h1>
<button class="logout-button"><a class="nav-logout" href="/loginsystem/logout.php" >logout</a></button>
</div> 

<?php
  if($showAlert){
  echo' 
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong>Your Event is Now Successfully Added.
  
</div>';
}


?>


<div class="welcome-style">
  <h4 >
    Welcome - <?php  echo$_SESSION['username']?>
  </h4>
</div>


  <button class="btn-add-data" onclick="showModal()" >Add Data</button>

  <div class="overlay" onclick="closeModal()" ></div>
  
<div class="add-data-form">
  <form action="/loginsystem/event-manager.php" method="post">
    <span class="span-class" onclick="closeModal()" >&times;</span>
  <div class="form-group">
    <label for="nameofstudent">Name Of The Student</label>
    <input type="text" class="form-control" id="nameofstudent" aria-describedby="emailHelp" placeholder="Name Of The Student" name="nameofstudent">
    
  </div>


  <div class="form-group">
    <label for="nameofevent">Event Name</label>
    <input type="text" class="form-control" id="nameofevent" aria-describedby="emailHelp" placeholder="Event Name" name="nameofevent">
    
  </div>

  <div class="form-group ">
    <label for="eventDate">Event Date</label>
    <input type="date" class="form-control" id="eventDate" name="eventDate"
        aria-describedby="emailHelp" placeholder="Select Event Date" required>
</div>


<div class="form-group ">
    <label for="eventTime">Event Time</label>
    <input type="time" class="form-control" id="eventTime" name="eventTime"
        aria-describedby="emailHelp" placeholder="Enter Event Time" required>
</div>

<div class="form-group ">
    <label for="eventVenue">Event Venue</label>
    <input type="text" class="form-control" id="eventVenue" name="eventVenue"
        aria-describedby="emailHelp" placeholder="Enter Event Venue" required>
</div>

<div class="form-group ">
    <label for="coordinatorName">Coordinator's Name</label>
    <input type="text" class="form-control" id="coordinatorName" name="coordinatorName"
        aria-describedby="emailHelp" placeholder="Enter Coordinator's Name" required>
</div>

<div class="form-group ">
    <label for="eventBudget">Event Budget</label>
    <input type="text" class="form-control" id="eventBudget" name="eventBudget"
        aria-describedby="emailHelp" placeholder="Enter Event Budget" required>
</div>


  
  <button type="submit" class="submit-btn">Submit</button>
</form>
</div>

<div class="container">
<div cass="row mt-5">
<div class="col">
  <div class="card mt-5">
    <div class="class-header">
      <h2 class=" display-6 text-center" color: white; >Event Details</h2>
</div>
<div class="card-body">
<table class="table table-bordered text-center">
  <tr class="bg-dark text-white">
  <td>Sr.No.</td>   
<td>Name Of Student</td>
<td>Event Name</td>
<td>Event Date</td>
<td>Event Time</td>
<td>Event Venue</td>
<td>Coordinator's Name</td>
<td>Event Budget</td>
<td>Edit</td>
<td> Delete</td>
  </tr>

  <tr>
    <?php

while($row = mysqli_fetch_assoc($result))
 {
?>
  <td><?php echo $row['sno']; ?></td>
  <td><?php echo $row['nameofstudent']; ?></td>
  <td><?php echo $row['nameofevent']; ?></td>
  <td><?php echo $row['eventDate']; ?></td>
  <td><?php echo $row['eventTime']; ?></td>
  <td><?php echo $row['eventVenue']; ?></td>
  <td><?php echo $row['coordinatorName']; ?></td>
  <td><?php echo $row['eventBudget']; ?></td>

  <form action="updatedata.php" method="post">
  <input type="hidden" name="sno" value="<?php echo $row['sno'] ?>"> 
  <td> <input type="submit" name="edit" class="btn btn-success" value="EDIT">   </td>
 </form>

  <form action="delete.php" method="post">
  <input type="hidden" name="sno" value="<?php echo $row['sno'] ?>">  
 

  <td><input type="submit" name="delete" class="btn btn-danger" value="Delete"></td> 
 </form>
</form>



</tr>
<?php
 }

?>

 
</div>
</div>
</div>
</div>
</div>
  


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
  <script>
    function showModal(){
      document.querySelector('.overlay').classList.add('showoverlay');
      document.querySelector('.add-data-form').classList.add('showadd-data-form');
      
    }

    function closeModal(){
      document.querySelector('.overlay').classList.remove('showoverlay');
      document.querySelector('.add-data-form').classList.remove('showadd-data-form');
      
    }
  </script>
 
</html>
