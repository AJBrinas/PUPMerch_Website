
<?php
session_start();
error_reporting(0);
include('config/config.php');
if ($_SESSION['adminlog'] != '') {
    header("location: admin/dashboard.php");
    exit;
} else if ($_SESSION['UserLog'] != '') {
    header("location: UserLog.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Log In</title>
    <link rel="stylesheet" href="css/users.css">
  </head>
  <body>

    <script src="js/slideshow.js" defer></script>
        <header class="intro">
            <div class="intro-slideshow">
        <img src="img/1.png" class="slideshow-img">
        <img src="img/2.png" class="slideshow-img">
        <img src="img/3.png" class="slideshow-img">
        <img src="img/4.png" class="slideshow-img">
            </div>
        </header>


    <div class="center">
      <h1>Admin Login</h1>
      <form action="admin/dashboard.php" method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
          
        </div>
        <div class="pass">
            <button type="submit" name="login"  class="click">Login</button> 
        </div>
      </form>
    </div>

  </body>
</html>

