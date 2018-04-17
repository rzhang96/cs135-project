<?php

$query = "INSERT INTO User (student_id, name, room_preference, timeslot, class) VALUES (?,?,?,?,?)";
$uInsert = $conn->prepare($query);
$uInsert->bind_param("issis", $student_id, $name, $room_preference, $timeslot, $class);

$query = "SELECT student_id from User where student_id=?";
$cSelect = $conn->prepare ($query);
$cSelect->bind_param("s", $name);

$query = "INSERT INTO Reservation (room_id, owner, building_id, time_stamp) Values (?,?,?,?)";
$resInsert = $conn->prepare($query);
$resInsert->bind_param("iiii", $room_id, $owner, $building_id, $time_stamp);

$query = "SELECT id from Reservation where owner=?";
$gSelect = $conn->prepare ($query);
$gSelect->bind_param("i", $owner);

?>
