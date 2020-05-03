<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $Title = $_POST["title"];
  $Content = $_POST["content"];
  // $DateandTime = date('Y-m-d H:i');
  // $Date = strval($Date);
  // $Time = date("H:i");
  // $Time = strval($Time);
  // $DateandTime = $Date . " " . $Time;
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
    $Title = strval($Title);
    $Content = strval($Content);
    $sql = "SELECT CURRENT_TIMESTAMP;";
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
    echo "result: " . $result;
    $DateandTime = $result["CURRENT_TIMESTAMP"];
    $sql = "INSERT INTO POSTS (title, content, dateandtime)VALUES ($Title, $Content, $DateandTime)";
    echo "<p>sql: " . $sql;
    echo "<p>test2";
  }
  $conn->close();
}
return include 'index.php';
?>
