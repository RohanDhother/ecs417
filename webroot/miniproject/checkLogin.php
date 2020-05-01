<?php
  $sessionStart = true;
  if (session_status() == PHP_SESSION_NONE)
  {
    $sessionStart = false;
  }
  echo '<script>var sessionStart = ' . json_encode($sessionStart) . ';</script>';
  echo '<script type="text/JavaScript">',
        'loginpage(sessionStart);',
        '</script>'
        ;
?>
