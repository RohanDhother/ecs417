<?php
  session_start();
$_SESSION["username"] = "";
include "main.html";
include "checkLogin.php";
include "viewBlog.php";
?>
