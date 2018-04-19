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


CREATE TABLE Building{
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
	res_id INT UNSIGNED NOT NULL AUTO INCREMENT PRIMARY KEY,
	room_id INT UNSIGNED NOT NULL,
	-- Make the student_id's
	-- roomates 
	-- Need to update this file and queries.php
	owner INT UNSIGNED NOT NULL,
	roommates VARCHAR (256) ARRAY,
	building_id INT UNSIGNED NOT NULL,
	time_stamp INT UNSIGNED NOT NULL,
	FOREIGN KEY (owner) REFERENCES User (student_id),
	FOREIGN KEY(room_id) REFERENCES Room(room_id),
	FOREIGN KEY (building_id) REFERENCES Building(building_id)
);



INSERT INTO Building (01, Wohlford)
INSERT INTO Building (02, Boswell)
INSERT INTO Building (03, Green)
INSERT INTO Building (04, Appleby)

INSERT INTO Room (101, 01, 2)
INSERT INTO Room (102, 01, 2)
INSERT INTO Room (103, 01, 2)
INSERT INTO Room (104, 01, 2)
INSERT INTO Room (105, 01, 2)
INSERT INTO Room (106, 01, 2)
INSERT INTO Room (107, 01, 2)
INSERT INTO Room (108, 01, 2)
INSERT INTO Room (109, 01, 2)
INSERT INTO Room (110, 01, 2)
INSERT INTO Room (111, 01, 2)
INSERT INTO Room (112, 01, 2)
INSERT INTO Room (113, 01, 2)
INSERT INTO Room (114, 01, 2)
INSERT INTO Room (115, 01, 2)
INSERT INTO Room (116, 01, 2)


