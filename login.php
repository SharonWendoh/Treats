<?php
session_start();
include("connect.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE Email ='".$email."' AND Pasword='".$password."'";
    $result = $conn->query($sql);

    //if($result->num_rows > 0){
    //    $_SESSION['Email'] = $email;
   //     header("location:homepage.php");
   //     die;
   // }

    $row=mysqli_fetch_array($result);
    if($row["Hierachy"]=="Client"){
        $_SESSION['Email'] = $email;

        header("location:homepage.php");
    }
    else if($row["Hierachy"]=="Admin"){
        $_SESSION['Email'] = $email;

        header("<location:Admin/admin dashboard.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
                    <div class="login">
                        <h2>LOGIN</h2>
                        <form action="" method="post">
                            <input type="email" class="input-box" name= "email" placeholder="Enter email" required>
                            <input type="password" class="input-box" name= "password" placeholder="Password" required>
                            <button type="submit" class="submit-btn" name= "login">Login</button>
                            <input type="checkbox"><span>Remember Me</span>
                        </form>
                        <button type="button" onclick="window.location.href='register.php'" class="">Register</button>
                        <a href="#">Forgot Password</a>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</body>
</html>