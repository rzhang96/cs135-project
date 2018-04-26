<?php
require('../backend/dbconn.php');
$conn = connect_to_db("DRAW");
require('../backend/queries.php');
session_start();
?>

<!DOCTYPE html>
<!-- need to write teh getTime document -->
<?php

  if (isset($_POST["Submit"])){
    $student_id = $_POST["studentID"];
    $name = $_POST["name"];
    $room_preference = $_POST["room_Type"];
    $class = $_POST["classYear"];


    mysqli_stmt_execute($resMade);
    $resMade->bind_result($uID);
    if($resMade -> fetch()){
      header("Location: registered.php");
      print_r($conn -> error);
    }

    // echo "**** $student_id $name $room_preference $class";

    $cookie_name = "user";
    $cookie_value = $student_id;
    setcookie($cookie_name, $cookie_value);

    echo "**** $student_id $name $room_preference $class";

    mysqli_stmt_execute($uSelect);
    $uSelect -> bind_result($uName); // not used 
    if($uSelect -> fetch()){
// checks to see if the user is has already been created
      echo "Welcome back! ".$name ."<br>";
    }else{
      $cookie_name = "id";
      $cookie_value = $student_id;
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

      $timeslot = mt_rand(9,15).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT);
      echo "Timeslot: $timeslot";
      mysqli_stmt_execute($uInsert);
      print_r($conn->error);
      echo "Thanks for registering! ". $name . "<br>";

    }

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="validateField.js"></script>

<title>Room Draw Preliminary Information</title>
</head>

<body>

<h2> Room Draw Preliminary Information</h2>

<fieldset>

<form name="frmRegister" method="post" action="roomSelect.php">


  <legend for="studentID">Student ID Number:
  <input type="text" name="studentID" id ="studentID" value="" onblur = "studentIDVal()" required> </legend>

  <legend for="name">First and Last Name:
  <input type="text" name="name" id ="name" value="" onblur = "name()" required> </legend>

  <legend for="classYear">Class Year:
  <select name="classYear" required>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
  </select> 
  </legend> 

  <legend for="roomType">Preferred Room Type:
  <select name="room_Type">
      <option value="single">Single</option>
      <option value="double">Double</option>
      <option value="triple">Triple</option>
  </select> 
  </legend> 

  <legend for="roommateID">Roommate's ID Number (If Applicable):
  <input type="number" name="roommateID" id ="roommateID" value="" onblur = "studentIDVal()" required> </legend>

  <input type='submit' value= 'Submit' name= 'Submit'> 

</form>
  <script type = "text/javascript">
     $(document).ready(function(){
        $("#roomSelect").click(function() {
          $("body").load("roomSelect.html");
        });
     });
  </script>

</body>
</html>