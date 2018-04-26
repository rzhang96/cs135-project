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
  //session_unset();
  //session_destroy();
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


<title>Wohlford Hall</title>

<h2>Wohlford Hall </h2>
	<form name="roomSelect"  method="post">
  <legend for="roomID">Room Number:
	    <select name="room_id" required>
	    	<optgroup label="First Floor">
		        <option value="01">01</option>
		        <option value="02">02</option>
		        <option value="03">03</option>
		        <option value="04">04</option>
		        <option value="05">05</option>
		        <option value="06">06</option>
		        <option value="07">07</option>
		        <option value="08">08</option>
		        <option value="09">09</option>
		    </optgroup><!-- 
		    <optgroup label="Second Floor">
		        <option value="201">201 (D)</option>
		        <option value="202">202 (D)</option>
		        <option value="203">203 (D)</option>
		        <option value="204">204 (D)</option>
		        <option value="205">205 (D)</option>
		        <option value="206">206 (D)</option>
		        <option value="207">207 (D)</option>
		        <option value="208">208 (D)</option>
		        <option value="209">209 (D)</option>
		        <option value="210">210 (D)</option>
		        <option value="211">211 (D)</option>
		        <option value="212">212 (D)</option>
		        <option value="213">213 (D)</option>
		        <option value="214">214 (D)</option>
		        <option value="215">215 (D)</option>
		        <option value="216">216 (D)</option>
		        <option value="217">217 (D)</option>
		        <option value="218">218 (D)</option>
		        <option value="219">219 (D)</option>
		        <option value="220">220 (D)</option>
		    </optgroup> -->
	    </select> 
  </legend> 



<input type ='Submit' value = 'Submit' name = 'Submit'> </input>
</form>
      <!-- <table>
        <tr>
          <td><a id="00" onclick="" > </a> </td>
          <td id="01" onclick=""> </td> 
          <td id="02" onclick=""> </td>
          <td id="03" onclick=""> </td>
          <td id="04" onclick=""> </td>
          <td id="05" onclick=""> </td>
          <td id="06" onclick=""> </td>
          <td id="07" onclick=""> </td>
        </tr>
        <tr>
          <td id="10" onclick=""> </td>
          <td id="11" onclick=""> </td> 
          <td id="12" onclick=""> </td>
          <td id="13" onclick=""> </td>
          <td id="14" onclick=""> </td>
          <td id="15" onclick=""> </td>
          <td id="16" onclick=""> </td>
          <td id="17" onclick=""> </td>

        </tr>

    </table>

    <table>
        <tr>
          <td><a id="00" onclick="" > </a> </td>
          <td id="01" onclick=""> </td> 
          <td id="02" onclick=""> </td>
          <td id="03" onclick=""> </td>
          <td id="04" onclick=""> </td>
          <td id="05" onclick=""> </td>
          <td id="06" onclick=""> </td>
          <td id="07" onclick=""> </td>
        </tr>
        <tr>
          <td id="10" onclick=""> </td>
          <td id="11" onclick=""> </td> 
          <td id="12" onclick=""> </td>
          <td id="13" onclick=""> </td>
          <td id="14" onclick=""> </td>
          <td id="15" onclick=""> </td>
          <td id="16" onclick=""> </td>
          <td id="17" onclick=""> </td>

        </tr>

    </table> -->

</html>