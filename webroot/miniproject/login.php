<?php
  $Username = $_POST["username"];
  $Password = $_POST["password"];
  $test = "test";
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");
  echo "<p>Username: " . $Username;
  echo "<p>Password: " . $Password;
  echo "<p>test: " . $test;
  // Creates connection
  $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
  // Checks connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   echo "<p>test2";
  }
  else {
    $sql = "SELECT password FROM USERS WHERE username='$Username'";
    $result = $conn->query($sql);
    echo "<p> $result->num_rows: " . $result->num_rows;
    $result = $result->fetch_assoc();
    $password = $result["password"];
    echo "<p>password: " . $password;
    echo "<p>test";
    if($password)
    {
      echo "<p>test1";
      if ($Password==$password)
      {
        session_start();
        echo "<p>You are logged";
        // include 'AddPost.html';
      }
      else {
        echo "<p>test3";
      }
    }
    else {
      echo "<p>test4";
    }
}
$conn->close();
?>
