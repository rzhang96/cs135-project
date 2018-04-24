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


INSERT INTO Building VALUES (01, "Wohlford1");
INSERT INTO Building VALUES (02, "Wohlford2");
INSERT INTO Building VALUES (03, "Wohlford3");
INSERT INTO Building VALUES (04, "Wohlford4");
INSERT INTO Building VALUES (05, "Wohlford5");
INSERT INTO Building VALUES (06, "Wohlford6");
INSERT INTO Building VALUES (07, "Wohlford7");
INSERT INTO Building VALUES (08, "Wohlford8");
INSERT INTO Building VALUES (09, "Wohlford9");
INSERT INTO Building VALUES (10, "Wohlford10");
INSERT INTO Building VALUES (11, "Wohlford11");
INSERT INTO Building VALUES (12, "Wohlford12");




