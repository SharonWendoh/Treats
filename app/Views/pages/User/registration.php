<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Explora&family=Lobster&display=swap" rel="stylesheet">
    <title>REGISTER</title>

    <style>
        body{
            background: rgb(158, 193, 197);
        }
        
    </style>
</head>
<body>
    
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-7 px-5 pt-5">
                    <h1  class="font-weight-bold py-3" style="font-family: 'Lobster', cursive;"> Drip Wear</h1>
                    <h4>Create new account</h4>
                    <form action="/registration" method="POST">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="First Name" name="firstname" class="form-control my-3 p-2" id="firstname" value="<?= set_value('firstname')?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="Last Name" name="lastname" class="form-control my-3 p-2" id="lastname" value="<?= set_value('lastname')?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="Gender" name="gender" class="form-control my-3 p-2" id="gender" value="<?= set_value('gender')?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email Address" name="email" class="form-control my-3 p-2" id="email" value="<?= set_value('email')?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Password" name="password" class="form-control my-3 p-2" id="password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Confirm Password" name="password_confirm" class="form-control my-3 p-2" id="password_confirm">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn3 mt-3 mb-5">Register</button>
                            </div>
                        </div>
                        <p>Have an account? <a href="/">Login</a></p>
                    </form>
                    <?php if(isset($validation)): ?>
                        <div class="col-lg-7">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>                </div>    
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-5">
                    <img src="../images/womenFashion.jpg" class="img-fluid" alt="">
                </div>
            </div>

            
    </section>
 