<?php
  session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $Username = $_POST["username"];
  $Password = $_POST["password"];
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
   $conn->close();
  }
  else {
    $sql = "SELECT password FROM USERS WHERE username='$Username'";
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
    $password = $result["password"];
    if($password)
    {
      if ($Password==$password)
      {
        session_start();
        $_SESSION["username"] = $Username;
        $conn->close();
        return include 'AddPost.html';
      }
      else {
        $conn->close();
        return include 'index.php';
      }
    }
    else {
      $conn->close();
      return include 'index.php';
    }
}
}
?>
