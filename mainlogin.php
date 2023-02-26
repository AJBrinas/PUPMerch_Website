<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Main Log In</title>
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
      <h1>Main Login</h1>
      <form action="adminlog.php" method="post">
        <div class="pass">
            <button type="submit" name="login"class="click">Admin</button> 
        <!-- <button type="submit" name="login" class="click" value="">Login</button> -->
        </div>
        </form>    
        <form action="UserLog.php" method="post">
        <div class="pass">
            <button type="submit" name="login" class="click">User</button> 
        <!-- <button type="submit" name="login" class="click" value="">Login</button> -->
        </div>
      </form>
    </div>
  </body>
</html>

