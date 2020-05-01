<?php
session_start();
session_unset();
// destroy the session
session_destroy();
include "main.html";
include "checkLogin.php";
include "viewBlog.php";
?>
