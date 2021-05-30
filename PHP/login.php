<?php
    session_start();
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/Rede-Logo.jpg" type="image/x-icon">
    <title>Employee Login | REDE Scalable Energy Management Pvt. Ltd.</title>

    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">

    <!-- Icon Library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />

    <!-- Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- BS4 -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/main.css" />
</head>

<style>
    .container{
        box-shadow: inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);;
    }
</style>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md navbar-light bg-light font-weight-bold" id="nav">
        <a href="#" class="navbar-brand">
            <img src="images/Rede-Logo.jpg" width="45" alt="" class="d-inline-block align-middle mr-2">
            <span><span style="color: #E91E63;">REDE</span> SCALABLE</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../our-products.html">Our Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../services.html">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.php">Employee Login</a>
                        <a class="dropdown-item" href="customer-login.php">Customer Login</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Login Form Start -->
    <div class="container bg-light my-5 p-2" style="border-radius: 16px;">
        <div class="row">
            <div class="col-12 col-md-7">
                <img src="../images/login.jpg" style="border-radius: 16px; width: 100%;" alt="login">
            </div>
            <div class="col-12 col-md-5 my-auto">
                <h2 class="text-center"><span style="color: #E91E63;">Employee Login</span> Form</h2>
                <form action="validation.php" method="POST">
                    <label for="emp_id">Employee Id:</label><br>
                    <input type="text" name="id" id="emp_id" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br><br>

                    <button class="btn btn-primary w-100" name="login">Login</button><br><br>
                </form>
                <p class="text-center">Don't have an account? <span><a href="signup.php">Sign Up!</a></span></p>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
</body>

</html>