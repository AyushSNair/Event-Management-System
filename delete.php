<?php
$connection = mysqli_connect("localhost", "root", "Aryan@2004");
$db = mysqli_select_db($connection, 'event5022140');

if(isset($_POST['delete']))
{
$sno = $_POST['sno'];

$query = "DELETE FROM event140 Where sno='$sno' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
echo '<script> alert("Data Deleted");  </script>  ';
header("location: /loginsystem/event-manager.php");
}
else{
  echo '<script> alert("Data Not Deleted");  </script>  ';
}
}

?>