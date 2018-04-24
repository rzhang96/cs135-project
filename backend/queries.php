<?php

$query = "INSERT INTO User (student_id, name, room_preference, timeslot, class) VALUES (?,?,?,?,?)";
$uInsert = $conn->prepare($query);
$uInsert->bind_param("issis", $student_id, $name, $room_preference, $timeslot, $class);

$query = "SELECT name from User where student_id=?";
$uSelect = $conn->prepare ($query);
$uSelect->bind_param("id", $student_id);

$query = "INSERT INTO Reservation (res_id, room_id, owner, building_id, time_stamp) Values (?,?,?,?,?)";
$resInsert = $conn->prepare($query);
$resInsert->bind_param("iiii", $room_id, $owner, $building_id, $time_stamp);

$query = "SELECT id from Reservation where owner=?";
$resSelect = $conn->prepare ($query);
$resSelect->bind_param("i", $owner);

?>
