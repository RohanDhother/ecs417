<?php
  $Username = $POST["username"];
  $Password = $POST["password"];
   $sql = "SELECT * USERS (firstName, lastName, email, password)
   VALUES ('$fname', '$sname', '$email', '$pass1')";

  if ($Username=="Rohan" && $Password=="password")
  {
    session_start();
    echo "<style> #login-box {display: none;}</style>";
    echo "You are logged";
  }
?>
