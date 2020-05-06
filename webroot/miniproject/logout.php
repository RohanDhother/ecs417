<?php
  session_start();
// remove all session variables
try{
  // session_unset();
  //
  // // destroy the session
  session_destroy();
  header('Location: http://cakephp-mysql-persistent-rohandhotherecs417.bde1.qmul-eecs.openshiftapps.com/miniproject/index.php');
  // include "index.php";
}
catch (Exception $e){}
 ?>
