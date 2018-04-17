<?
require('../cs135-project/backend/queries.php');
require('../cs135-project/backend/dbconn.php');
$conn = connect_to_db("DRAW");
session_start();

?>

<!DOCTYPE html>

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

  <legend for="classYear">Class Year:
  <select required>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
  </select> 
  </legend> 

  <legend for="roomType">Preferred Room Type:
  <select>
      <option value="single">Single</option>
      <option value="double">Double</option>
      <option value="triple">Triple</option>
  </select> 
  </legend> 

  <legend for="roommateID">Roommate's ID Number (If Applicable):
  <input type="text" name="roommateID" id ="roommateID" value="" onblur = "studentIDVal()" required> </legend>


<input type ='Submit' value = 'Submit' name = 'Submit'> </input>

</body>
</html>