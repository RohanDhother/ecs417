<?php
$Title = $POST["title"];
$Content = $POST["content"];
$Date = date("d/m/Y");
$Time = date("H:i");
$Password = $POST["password"];
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
$Postlists = array();
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else {
$sql = "INSERT INTO Posts (title, content, date_set, time_set) VALUES ('$Title', '$Content','$Date', '$Time')";
include 'index.php';
}
$conn->close();
?>
