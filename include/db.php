<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "google123";
$dbname = "poll";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 