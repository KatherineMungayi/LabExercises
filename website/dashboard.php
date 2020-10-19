<?php if(!isset($_SESSION)) {session_start();}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Welcome <?php if (isset($_SESSION['name'])) {
      echo $_SESSION['name'];
    } ?></h2>
    <p>Redirect to login.php when you start workin on it</p>
  </body>
</html>
