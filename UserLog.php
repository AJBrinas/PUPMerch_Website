<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Customer Log In</title>
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
      <h1>User Login</h1>
      <form action="home.php" method="post">
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
            <button type="submit" name="login" class="click">Login</button> 
        <!-- <button type="submit" name="login" class="click" value="">Login</button> -->
        </div>
        <div class="signup_link">Not a member? <a href="register.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>

