<?php
  $Username = $POST["username"];
  $Password = $POST["password"];

  if ($Username=="Rohan" && $Password=="password")
  {
    session_start();
    echo "<style> #login-box {display: none;}</style>";
    echo "You are logged";
  }
?>
