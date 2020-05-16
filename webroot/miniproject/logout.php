<?php
  session_start();
try{
  session_destroy();
  header('Location: http://cakephp-mysql-persistent-rohandhotherecs417.bde1.qmul-eecs.openshiftapps.com/miniproject/index.php');
}
catch (Exception $e){}
 ?>
