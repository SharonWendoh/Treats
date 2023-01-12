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
    <title>LOGIN</title>

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
                <div class="col-lg-5">
                    <img src="../images/womenFashion.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1  class="font-weight-bold py-3" style="font-family: 'Lobster', cursive;"> Drip Wear</h1>
                    <h4>Sign into your account</h4>
                         
                </div>
                         <?php if (session()->get('success')): ?>
                            <div class="alert alert-success" role="alert">
                            <?= session()->get('success') ?>                
                        </div> 
                        <?php endif; ?>  
                    <form action="/" method="POST">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email Address" name="email" class="form-control my-3 p-3" id="email" value="<?= set_value('email')?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="*******" name="password" class="form-control my-3 p-3" id="password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="login" class="btn3 mt-3 mb-5">Login</button>
                            </div>
                        </div>
                        <a href="#">Forgot Password</a>
                        <p>Don't have an account? <a href="/registration">Register here</a></p>
                        <?php if(isset($validation)): ?>
                        <div class="col-lg-7">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>                </div>    
                            </div>
                        </div>
                    <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>


