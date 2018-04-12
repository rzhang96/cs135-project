Drop DATABASE IF EXISTS DRAW;

CREATE DATABASE DRAW;

USE DRAW;

CREATE TABLE User{
	student_id INT UNSIGNED NOT NULL,
	room_preference VARCHAR(256) NOT NULL,
	-- Need to assign timeslot as the user submits their form
	timeslot INT UNSIGNED NOT NULL,
	class VARCHAR(256) NOT NULL
}

CREATE TABLE Reservation{
	room_id INT UNSIGNED NOT NULL,
	occupants VARCHAR (256) NOT NULL,
	building_id INT UNSIGNED NOT NULL,
	time_stamp INT UNSIGNED NOT NULL,
	FOREIGN KEY (occupants) REFERENCES User(roommate)
}

CREATE TABLE Room{
	room_id INT UNSIGNED NOT NULL PRIMARY KEY,
	building_id INT UNSIGNED NOT NULL,
	capacity INT UNSINGED NOT NULL,
	FOREIGN KEY (building_id) REFERENCES Building(building_id)
}

CREATE TABLE Building{
	building_id INT UNSIGNED NOT NULL PRIMARY KEY
	name VARCHAR(256) NOT NULL,
}