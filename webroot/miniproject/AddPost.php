<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $Title = $_POST["title"];
  $Content = $_POST["content"];
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
    $sql = "INSERT INTO POSTS (title, content, dateandtime)VALUES ('$Title', '$Content', GETUTCDATE());";
    if ($conn->query($sql) === TRUE) {
          return include 'index.php';
 }
  }
  $conn->close();
}
?>
