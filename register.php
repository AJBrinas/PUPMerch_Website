
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Customer Log In</title>
        <link rel="stylesheet" href="css/register.css">
      </head>

    <body>
        
        
        <link rel="stylesheet" href="css/users.css">
        <script src="js/slideshow.js" defer></script>
            <header class="intro">
                <div class="intro-slideshow">
            <img src="img/5.png" class="slideshow-img">
            <img src="img/6.png" class="slideshow-img">
            <img src="img/7.png" class="slideshow-img">
            <img src="img/8.png" class="slideshow-img">
                </div>
            </header>

    

        <div class="reg">
        <form action="config/post.php" method="post" name="signupForm" >
            <h2 align="center">SIGN UP</h2>


            <table>     

            <tr>
                <td>
                    <input type="text" name="fname" placeholder="First Name" id="fname" required>	
                </td>
            </tr>
                <td>
                    <input type="text" name="lname" placeholder="Last Name" id="fname" required>
                </td>
            </tr>
             
            <tr>
                <td >
                   
                    <input type="text" name="address" placeholder="Address" id="address" required>
                </td>
            </tr> 
            <tr>
                <td >
                   
                    <input type="text" name="city" placeholder="City" id="city" required>
                </td>
            </tr>
            
            <tr>
                <td >
                   
                    <input type="text" name="phone" placeholder="Contact Number" id="phone" required>
                </td>
            </tr>
            <tr>
                <td >
                   
                    <input type="email" name="email" placeholder="Email" id="email" required>
                    
                </td>
            </tr>
            <tr>	
                <td >
                    <input type="username" name="username" placeholder="Username" id="username" required>
                    
                </td>
            </tr>
            <tr>	
                <td >
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    
                </td>
            </tr>
            
            <tr>
            <td >
                <input type="submit" name="customer" value="Sign Up" class="click">
            </td>
            </tr>
            
            </table>
            </form>
        </div>
            
    </body>
</html>
    
