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
    $sql = "SELECT Cast(CURRENT_TIMESTAMP AS datetime);";
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
    echo "<p>result: " . $result;
    $result_array = array();
    for($i = 0;$i<count($result);$i++)
    {
      echo "<p> result " . $i . ": " . $result[$i];
      $result_array[] = $result[$i];
    }
    $DateandTime = $result_array[0];
    echo "<p>dateandtime: " . $DateandTime;
    $sql = "INSERT INTO POSTS (title, content, dateandtime)VALUES ($Title, $Content, $DateandTime)";
    echo "<p>sql: " . $sql;
    echo "<p>test2";
  }
  $conn->close();
}
return include 'index.php';
?>
