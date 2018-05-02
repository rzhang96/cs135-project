<?php
  require('../backend/dbconn.php');
  $conn = connect_to_db("DRAW");
  require('../backend/queries.php');
  session_start();
  $cookie_name = "id";
  // print_r($_SESSION);
    // print_r($_COOKIE);
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 <!-- script for adding room here -->
  <link rel="stylesheet" type="text/css" href="room.css">


<title>Wohlford Hall</title>

<h2>Wohlford Hall </h2>
	<form name="roomSelect"  method="post" action = "registered.php">
    
  <legend for="roomID">Room Number:
	    <select name="room_id" required>
        <?php 
            $sql = mysqli_query($conn, "SELECT room_id from Room r where r.room_id NOT IN (SELECT room_id from Reservation res where res.building_id = 01) AND r.building_id = 01");
            while ($row = $sql -> fetch_assoc()){
                echo "<option value =". $row['room_id']. ">".$row['room_id']. "</option>";  
            }
           ?>

	    </select> 
  </legend> 



<input type ='Submit' value = 'Submit' name = 'Submit'> </input>
</form>
     

</html>