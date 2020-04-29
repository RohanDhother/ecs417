<?php
  $Username = $POST["username"];
  $Password = $POST["password"];
   $sql = "SELECT password FROM USER WHERE username=$Username)";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $password = $row["password"];
      }
    }
  if ($Password==$password)
  {
    session_start();
    echo "You are logged";
  }
?>
