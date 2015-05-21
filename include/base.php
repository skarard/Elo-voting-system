<?php
session_start();

$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "poll"; // the name of the database that you are going to use for this project
$dbuser = "root"; // the username that you created, or were given, to access your database
$dbpass = "google123"; // the password that you created, or were given, to access your database

$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysqli_error($mysqli));
mysqli_select_db($mysqli, $dbname) or die("MySQL Error: " . mysqli_error($mysqli));
?>