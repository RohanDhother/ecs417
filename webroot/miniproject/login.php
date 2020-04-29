<?php
  $Username = $POST["username"];
  $Password = $POST["password"];
  $sql = "SELECT password FROM USER WHERE username=$Username)";
  $password = $result->fetch_assoc();
  if ($Password==$password)
  {
    session_start();
    echo "You are logged";
  }
?>
