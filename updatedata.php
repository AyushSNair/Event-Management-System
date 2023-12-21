<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  <?php
  $connection = mysqli_connect("localhost", "root", "Aryan@2004");
  $db = mysqli_select_db($connection , 'event5022140');

  $sno = $_POST['sno'];

  $query = "SELECT * FROM event140 WHERE sno='$sno' ";  
  
  $query_run = mysqli_query($connection, $query);

  if($query_run)
  {
    while($row = mysqli_fetch_array($query_run))
    {
     ?>
<div class="container">

  <div class="jumbotron">
    <h2>Update Event-Details</h2>
     <hr>

     <div class="add-data-form">
  <form action="/loginsystem/event-manager.php" method="post">
    <input type="hidden" name="sno" value="<?php echo $row['sno'] ?>">
    <span class="span-class" onclick="closeModal()" >&times;</span>
  <div class="form-group">
    <label for="nameofstudent">Name Of The Student</label>
    <input type="text" class="form-control" value="<?php echo $row['nameofstudent'] ?>" id="nameofstudent" aria-describedby="emailHelp" placeholder="Name Of The Student" name="nameofstudent">
    
  </div>


  <div class="form-group">
    <label for="nameofevent">Event Name</label>
    <input type="text" class="form-control" value="<?php echo $row['eventname'] ?>" id="nameofevent" aria-describedby="emailHelp" placeholder="Event Name" name="eventname">
    
  </div>

  <div class="form-group ">
    <label for="eventDate">Event Date</label>
    <input type="date" class="form-control" value="<?php echo $row['eventDate'] ?>" id="eventDate" name="eventDate"
        aria-describedby="emailHelp" placeholder="Select Event Date" required>
</div>


<div class="form-group ">
    <label for="eventTime">Event Time</label>
    <input type="time" class="form-control" value="<?php echo $row['eventTime'] ?>" id="eventTime" name="eventTime"
        aria-describedby="emailHelp" placeholder="Enter Event Time" required>
</div>

<div class="form-group ">
    <label for="eventVenue">Event Venue</label>
    <input type="text" class="form-control" value="<?php echo $row['eventVenue'] ?>" id="eventVenue" name="eventVenue"
        aria-describedby="emailHelp" placeholder="Enter Event Venue" required>
</div>

<div class="form-group ">
    <label for="coordinatorName">Coordinator's Name</label>
    <input type="text" class="form-control" value="<?php echo $row['coordinatorName'] ?>" id="coordinatorName" name="coordinatorName"
        aria-describedby="emailHelp" placeholder="Enter Coordinator's Name" required>
</div>

<div class="form-group ">
    <label for="eventBudget">Event Budget</label>
    <input type="text" class="form-control" value="<?php echo $row['Event Budget'] ?>" id="eventBudget" name="eventBudget"
        aria-describedby="emailHelp" placeholder="Enter Event Budget" required>
</div>


  
  <button type="submit" class="btn btn-primary" name="update">Update Data</button>
</form>
</div>

  </div>
</div>


     <?php
    }
  }
  else
  {
    echo '<script> alert("No Record Found"); <script>';
  }
  ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>