<?php
 if(!isset($_SESSION)) {session_start();}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Welcome you have just been registered <?php if (isset($_SESSION['name'])) {
      echo $_SESSION['name'];
    } ?></h2>
    <a href="login.php">LOG IN</a>
    
  </body>
</html>
