<?php
  $Username = $POST["username"];
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
  $sql = "SELECT password FROM USER WHERE username=$Username)";
  $password = $conn->query($sql);
  echo $password;
  if($password)
  {
    if ($Password==$password)
    {
      session_start();
      echo "You are logged";
      // include 'AddPost.html';
    }
    else {
      echo "test3";
    }
  }
  else {
    echo "test4";
  }
}
$conn->close();
?>
