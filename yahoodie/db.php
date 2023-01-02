<?php
$host = "localhost:3307";
$user = "root"; // ganti dengan username database km
$password = "Arya312610@"; // ganti dengan password database km
$database = "yahoodie";

$mysqli = new mysqli($host, $user, $password, $database);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}