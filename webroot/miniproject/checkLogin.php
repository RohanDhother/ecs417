<?php
  $sessionStart = true;
  echo "sessionStart: " . session_status();
  if (session_status() == PHP_SESSION_NONE)
  {
    $sessionStart = false;
  }
  echo '<script>var sessionStart = ' . json_encode($sessionStart) . ';</script>';
  echo '<script>var username = ' . json_encode($_SESSION["username"]) .  ';<script>';
  echo '<script type="text/JavaScript">',
        'loginpage(sessionStart, username);',
        '</script>'
        ;
?>
