<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $Title = $_POST["title"];
  $Content = $_POST["content"];
  $Date = date("d/m/Y");
  $Time = date("H:i");
  echo "<p>title: " . $Title;
  echo "<p>content: " . $Content;
  echo "<p>date: " . $Date;
  echo "<p>time: " . $Time;
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");
  // Creates connection
  $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
  // Checks connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else {
    echo "<p>test";
    $sql = "INSERT INTO Posts (title, content, date_set, time_set) VALUES ('$Title', '$Content','$Date', '$Time')";
    echo "<p>sql: " . $sql;
    echo "<p>test2";
  }
  $conn->close();
}
return include 'index.php';
?>
