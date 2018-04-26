<?php
  require('../backend/dbconn.php');
  $conn = connect_to_db("DRAW");
  require('../backend/queries.php');
  session_start();
  $cookie_name = "id";
  print_r($_SESSION);
  print_r($_COOKIE);
?>

<!DOCTYPE html>


<?php
   if (isset($_POST["Submit"])){
    $room_id = $_POST["room_id"];
    $building_id = 01;
    $time_stamp = time();
    
    if (!isset($_SESSION[$cookie_name])){
      echo "Cookie named " . $cookie_name . " is not set";
    } else{
      $owner = $_SESSION[$cookie_name];
    }

    mysqli_stmt_execute($resSelect);
    $resSelect -> bind_result($resID);
    
    if($resSelect -> fetch()){
      echo "You have already made a reservation.";
    } else{
      mysqli_stmt_execute($resInsert);
      print_r($conn->error);
      echo "Thanks for choosing your room! ". $room_id . "<br>";

    }
    mysqli_stmt_close($resSelect);
    mysqli_stmt_close($resInsert);
  }
  session_unset();
  session_destroy();
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 <!-- script for adding room here -->
  <link rel="stylesheet" type="text/css" href="room.css">


<title>Done</title>

<h2>Thank you for choosing your Room! </h2>

</html>