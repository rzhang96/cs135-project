<?php

	$query = "INSERT INTO User (student_id, name, room_preference, timeslot, class) VALUES (?,?,?,?,?)";
	$uInsert = $conn->prepare($query);
	if ($uInsert) {
		$uInsert->bind_param("issss", $student_id, $name, $room_preference, $timeslot, $class);
	} else {
		print_r($conn->error);
	}

	$query = "SELECT name from User where student_id=?";
	$uSelect = $conn->prepare ($query);
	if ($uSelect) {
		$uSelect->bind_param("i", $student_id);
	} else {
		print_r($conn->error);
	}

	$query = "INSERT INTO Reservation (room_id, owner, building_id, time_stamp) Values (?,?,?,?)";
	$resInsert = $conn->prepare($query);
	if ($resInsert) {
		$resInsert->bind_param("iiii", $room_id, $owner, $building_id, $time_stamp);
	} else {
		print_r($conn->error);
	}


	$query = "SELECT res_id from Reservation where owner=?";
	$resSelect = $conn->prepare ($query);
	if ($resSelect) {
		$resSelect->bind_param("i", $owner);
	} else {
		print_r($conn->error);
	}


?>
