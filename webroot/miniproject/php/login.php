<?php
  session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $Email = $_POST["email"];
  $Password = $_POST["password"];
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");
  $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   $conn->close();}
  else {
    $sql = "SELECT password FROM USERS WHERE email='$Email'";
    $result = $conn->query($sql);
    $result = $result->fetch_assoc();
    $password = $result["password"];
    if($password)
    {
      if ($Password==$password)
      {
        session_start();
        $_SESSION["email"] = $Email;
        $conn->close();
        header('Location: http://cakephp-mysql-persistent-rohandhotherecs417.bde1.qmul-eecs.openshiftapps.com/miniproject/AddPost.html');
      }
      else {
        $conn->close();
        include '../miniproject/index.php';
        echo '<script type="text/JavaScript">',
              'alert("Password wrong");',
              '</script>'
              ;
      }
    }
    else {
      $conn->close();
      include '../miniproject/index.php';
      echo '<script type="text/JavaScript">',
            'alert("Email Wrong");',
            '</script>'
            ;
    }
}
}
?>
