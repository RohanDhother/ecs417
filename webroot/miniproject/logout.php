<?php
// remove all session variables
try{
  session_unset();

  // destroy the session
  session_destroy();
  return include "index.php";
}
catch (Exception $e){}
 ?>
