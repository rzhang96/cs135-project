<?php
require('../backend/dbconn.php');
$conn = connect_to_db("DRAW");
require('../backend/queries.php');
session_start();
?>

<!DOCTYPE html>



<?php

  if (isset($_POST["Submit"])){
    $student_id = $_POST["studentID"];
    $name = $_POST["name"];
    $room_preference = $_POST["room_Type"];
    $class = $_POST["classYear"];

    echo "**** $student_id $name $room_preference $class";
    mysqli_stmt_execute($uSelect);
    $uSelect -> bind_result($uName); // not used 
    if($uSelect -> fetch()){
// checks to see if the user is has already been created
      echo "Welcome back! ".$name ."<br>";
    }else{
     
      $timeslot = mt_rand(9,15).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT);
      echo "Timeslot: $timeslot";
      mysqli_stmt_execute($uInsert);
      print_r($conn->error);
      echo "Thanks for registering! ". $name . "<br>";

    }

      $cookie_name = "id";
      $cookie_value = $student_id;
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    $_SESSION[$cookie_name] = $cookie_value;
    print_r($_SESSION);  
    mysqli_stmt_close($uSelect);
    mysqli_stmt_close($uInsert);
  }

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
  <link rel="stylesheet" type="text/css" href="roomSelect.css">
  <script type="text/javascript">
      $(document).ready(function(){
           $("#auen").click(function(){
               $("#two").load("auen.html");
           });
      });
      $(document).ready(function(){
           $("#wohlford").click(function(){
               $("#two").load("wohlford.html");
           });
      });
  </script>

</head>
<title>Pick Your Room!</title>




<body>

<!-- Page content -->
<center>
  <h1>Pick Your Room!</h1>
</center>
<section class="container">
  <div id = "menu" class = "one">
    <ul>
      <li><a href="#benson" id = "benson">Benson Hall</a></li>
      <li><a href="#berger" id = "berger">Berger Hall</a></li>
      <li><a href="#crown" id = "crown">Crown Hall</a></li>
      <li><a href="#claremont" id = "claremont">Claremont Hall</a></li>
      <li><a href="#marks" id = "marks">Marks Hall</a></li>
      <li><a href="#stark" id = "stark">Stark Hall</a></li>
      <li><a href="#fawcett" id = "fawcett">Fawcett Hall</a></li>
      <li><a href="#auen" id = "auen">Auen Hall</a></li>
      <li><a href="#appleby" id = "appleby">Appleby Hall</a></li>
      <li><a href="#boswell" id = "boswell">Boswell Hall</a></li>
      <li><a href="#green" id = "green">Green Hall</a></li>
      <li><a href="wohlford.php" id = "wohlford">Wohlford Hall</a></li>
    </ul> 
  </div>
  <div id = "two" class = "two">
    Click a dorm on the left side to start!
  </div>
</section>

</body>
</html>