Drop DATABASE IF EXISTS DRAW;

CREATE DATABASE DRAW;

USE DRAW;

CREATE TABLE User(
	student_id INT UNSIGNED NOT NULL PRIMARY KEY,
	name VARCHAR(256) NOT NULL,
	room_preference VARCHAR(256) NOT NULL,
	-- Need to assign time slot as the user submits their form
	timeslot INT UNSIGNED NOT NULL,
	class VARCHAR(256) NOT NULL
);


CREATE TABLE Building(
	building_id INT UNSIGNED NOT NULL PRIMARY KEY,
	name VARCHAR(256) NOT NULL
);


CREATE TABLE Room(
	room_id INT UNSIGNED NOT NULL PRIMARY KEY,
	building_id INT UNSIGNED NOT NULL,
	capacity INT UNSIGNED NOT NULL,
	FOREIGN KEY (building_id) REFERENCES Building(building_id)
);

CREATE TABLE Reservation(
	res_id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	room_id INT UNSIGNED NOT NULL,
	owner INT UNSIGNED NOT NULL,
	building_id INT UNSIGNED NOT NULL,
	time_stamp INT UNSIGNED NOT NULL,
	FOREIGN KEY (owner) REFERENCES User (student_id),
	FOREIGN KEY (room_id) REFERENCES Room(room_id),
	FOREIGN KEY (building_id) REFERENCES Building(building_id)
);

-- INSERT INTO Building VALUES (01, "Wholford");

-- INSERT INTO Room VALUES (01, 01, 1);
-- INSERT INTO Room VALUES (02, 01, 1);
-- INSERT INTO Room VALUES (03, 01, 1);
-- INSERT INTO Room VALUES (04, 01, 1);
-- INSERT INTO Room VALUES (05, 01, 1);
-- INSERT INTO Room VALUES (06, 01, 1);
-- INSERT INTO Room VALUES (07, 01, 1);
-- INSERT INTO Room VALUES (08, 01, 1);
-- INSERT INTO Room VALUES (09, 01, 1);
-- INSERT INTO Room VALUES (10, 01, 1);
-- INSERT INTO Room VALUES (11, 01, 1);
-- INSERT INTO Room VALUES (12, 01, 1);




