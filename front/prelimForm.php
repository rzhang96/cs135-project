<?
require('../cs135-project/backend/queries.php');
require('../cs135-project/backend/dbconn.php');
$conn = connect_to_db("DRAW");
session_start();

?>

<!DOCTYPE html>
<!-- need to write teh getTime document -->
$student_id, $name, $room_preference, $timeslot, $class
<?
  if (isset($_POST["Submit"])){
    $student_id = $_POST["studentID"];
    $name = $_POST["name"];
    $room_preference = $_POST["roomType"];
    $class = $_POST["classYear"];
    mysqli_stmt_execut($uSelect);
    $uSelect -> bind_result($uName);
    if($uSelect -> fetch()){
// checks to see if the user is has already been created
      echo "Welcome back! ".$uName "<br>"
    }
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
<form name="frmRegister" method="post">

  <legend for="studentID">Student ID Number:
  <input type="text" name="studentID" id ="studentID" value="" onblur = "studentIDVal()" required> </legend>

  <legend for="name">First and Last Name:
  <input type="text" name="name" id ="name" value="" onblur = "name()" required> </legend>

  <legend for="classYear">Class Year:
  <select required>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
  </select> 
  <input type = "number" name = "classYear" id = "classYear" value = "">
  </legend> 

  <legend for="roomType">Preferred Room Type:
  <select>
      <option value="single">Single</option>
      <option value="double">Double</option>
      <option value="triple">Triple</option>
  </select> 
  <input type = "text" name = "roomType" id = "roomType" value = "">
  </legend> 

  <legend for="roommateID">Roommate's ID Number (If Applicable):
  <input type="number" name="roommateID" id ="roommateID" value="" onblur = "studentIDVal()" required> </legend>


<input type ='Submit' value = 'Submit' name = 'Submit' > </input>

</body>
</html>