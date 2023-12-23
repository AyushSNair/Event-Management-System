<?php
session_start();

if(!isset($_SESSION['update']) || $_SESSION['update']!=true){
  
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Data</title>
  <style>
.creator-class{
  margin-top: 10px;
  margin-right: 150px;
  width: 250px;
}

.container-class{
margin-left 0px;
}

.font{
  font-family: Roboto;
}
  </style>
  
  </head>
  <body>
  <?php
$connection = mysqli_connect("localhost","root","Aryan@2004");
$db = mysqli_select_db($connection , 'event5022140' );


$sno = $_POST['sno'];

$query = "SELECT * FROM event140 WHERE sno=$sno    ";

$query_run = mysqli_query($connection , $query);

if($query_run)
{
   while($row = mysqli_fetch_array($query_run))
   {
?>
<div class="container">

<div class="jumbotron">
<h2>Update Data</h2>
<hr>


<form action="" method="post">
  <input type = "hidden" name="sno" value="<?php echo $row['sno'] ?>">
  <div class="form-group">
    <label for="nameofstudent">Name Of Student</label>
    <input type="text" name="nameofstudent" class="form-control" value="<?php echo $row['nameofstudent'] ?>"  id="nameofstudent" placeholder="Enter your name">
  </div>
  

  <div class="form-group">
    <label for="nameofevent">Event Name</label>
    <input type="text" name="nameofevent" class="form-control" value="<?php echo $row['nameofevent'] ?>" id="nameofevent" placeholder="Enter event name">
  </div>
  
  <div class="form-group">
    <label for="eventDate">Date</label>
    <input type="date" name="eventDate" class="form-control" value="<?php echo $row['eventDate'] ?>" id="eventDate" placeholder="Enter date">
  </div>

  <div class="form-group">
    <label for="eventTime">Time</label>
    <input type="time" name="eventTime" class="form-control" value="<?php echo $row['eventTime'] ?>"  id="eventTime" placeholder="Enter time">
  </div>

  <div class="form-group">
    <label for="eventVenue">Venue</label>
    <input type="text" name="eventVenue" class="form-control" value="<?php echo $row['eventVenue'] ?>" id="eventVenue" placeholder="Enter venue">
  </div>

  <div class="form-group">
    <label for="coordinatorName">Name</label>
    <input type="text" name="coordinatorName" class="form-control" value="<?php echo $row['coordinatorName'] ?>"  id="coordinatorName" placeholder="Enter name">
  </div>


  <div class="form-group">
    <label for="eventBudget">Budget</label>
    <input type="text" name="eventBudget" class="form-control" value="<?php echo $row['eventBudget'] ?>" id="eventBudget" placeholder="Enter budget">
  </div>

<button type="submit" name="update" class="btn btn-primary"> Update Data </button>


<a href = "event-manager.php" class="btn btn-danger"> CANCEL </a>

<div class="container-class">
  <h5 class="creator-class">
   <b class="font"> Event Created By : </b>@<?php  echo$_SESSION['username']?>
  </h5>
</div>
</form>

<?php
if(isset($_POST['update']))
{
$nameofstudent = $_POST['nameofstudent'];
$nameofevent = $_POST['nameofevent'];
$eventDate = $_POST['eventDate'];
$eventTime = $_POST['eventTime'];
$eventVenue = $_POST['eventVenue'];
$coordinatorName = $_POST['coordinatorName'];
$eventBudget = $_POST['eventBudget'];

$query = "UPDATE event140  SET  nameofstudent='$nameofstudent' , nameofevent='$nameofevent' , eventDate= '$eventDate' , eventTime = '$eventTime' , eventVenue = '$eventVenue' , coordinatorName= '$coordinatorName' , eventBudget = '$eventBudget'  WHERE sno='$sno'   ";

$query_run = mysqli_query($connection , $query);

if($query_run)
{
  echo '<script> alert("Data Updated"); </script>';
header("location: event-manager.php");
}
else{
  echo '<script> alert("Data Not Updated"); </script>';
}
}

?>


</div>

</div>

<?php
   }
}
else{
  echo '<script> alert("NO RECORD FOUND"); </script>';
}
  
  
  ?>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>