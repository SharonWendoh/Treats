
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    
    <div class="background">
    <div class="wrapper"> 
        <div class="logo">
            <img src="images/2021-07-04 (2).png" alt="">
            <p></p>

        </div>
        <div>
            
            <ul class="navigation-area" id="navLinks">
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="#">TREAT BOXES & SPECIALS</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">FEEDBACK</a></li>
            </ul>
            
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="register">
                    <h2>REGISTER</h2>
                    <form action="process_register.php" method="post">
                        <input type="text" name="fname" class="input-box" placeholder="Name" required>
                        <input type="email" name="email" class="input-box" placeholder="Enter Email" required>
                        <input type="number" name="phone_number" class="input-box" placeholder="Enter phone number" required>
                        <input type="password" name="password" class="input-box" placeholder="Password" required>
                        <button type="submit" class="submit-btn">Submit</button>
                        <input type="checkbox" ><span>Remember Me</span>
                        <input type="checkbox" value="Client" name="admin_checkbox"><span>Client</span>
                    </form>
                    <button type="button" onclick="window.location.href='login.php'"  class="">I have an account</button>
                    
    
                    <a href="#">Forgot Password ?</a>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>