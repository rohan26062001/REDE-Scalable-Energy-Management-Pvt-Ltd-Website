<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/Rede-Logo.jpg" type="image/x-icon">
    <title>Contact Us | REDE Scalable Energy Management Pvt. Ltd.</title>

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
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/main.css" />
    <link rel="stylesheet" href="CSS/partners.css">
</head>

<style>
</style>

<body onload="myFunction()">
    <!-- Preloader Start -->
    <div id="loading"></div>
    <!-- Preloader End -->

    <!-- Scroll To Top Button -->
    <button id="btnScrollToTop">
        <i class="material-icons">arrow_upward</i>
    </button>
    <!-- Scroll To Top Button End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md navbar-light bg-light font-weight-bold" id="nav">
        <a href="#" class="navbar-brand">
            <img src="images/Rede-Logo.jpg" width="45" alt="" class="d-inline-block align-middle mr-2">
            <span><span style="color: #E91E63;">REDE</span> SCALABLE</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="our-products.php">Our Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="PHP/login.php">Employee Login</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Contact Form Starts -->
    <section class="contact">
        <div class="container my-5 bg-light py-5" style="border-radius: 16px;">
            <h2 class="text-center"><span style="color: #E91E63;">Contact</span> Us</h2>
                <form action="" method="POST">
                    <label for="name">Full Name</label><br>
                    <input type="text" name="name" id="name" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
                    <label for="phone">Phone Number:</label><br>
                    <input type="number" name="phone" id="phone" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
                    <label for="message">Message:</label><br>
                    <input type="text" name="message" id="message" style="width: 100%; height: 100px; border-color:#E91E63; border-radius: 15px;" required>
                    <br><br>

                    <button class="btn btn-primary w-100" name="send">Send Message</button><br><br>
                </form>
        </div>
    </section>
    <!-- Contact Form End -->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div style="letter-spacing: 1em;">
                <a href="https://www.linkedin.com/in/redescalable-india-60323a164/" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">REDE Scalable</h6>
                        <p>
                            <a href="/">www.redescalable.com</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="our-products.html" class="text-reset">Product</a>
                        </p>
                        <p>
                            <a href="services.html" class="text-reset">Service</a>
                        </p>
                        <p>
                            <a href="contact-us.php" class="text-reset">Contact Us</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Headquarters
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Block BB,Plot-118, Kolkata 700107</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:contact@redescalable.com">contact@redescalable.com</a>
                        </p>
                        <p><i class="fas fa-phone me-3"></i>+91 33 4063 0276</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            PUNE Office
                        </h6>
                        <p><i class="fas fa-home me-3"></i> Office No. 140, Bizzbay mall, Opp. SBI Bank, NIBM-Undri Road, Kondhwa, Pune ??? 411048</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:sales@redescalable.com">sales@redescalable.com</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            ?? 2021 Copyright:
            <a class="text-reset fw-bold" href="https://redescalable.com/">redescalable.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

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
    <!-- vanilla-tilt.js -->
    <script type="text/javascript" src="JS/vanilla-tilt.min.js"></script>
    <!-- observer.js -->
    <script src="JS/observer.js"></script>
    <script>
        var preloader = document.getElementById("loading");

        function myFunction() {
            preloader.style.display = 'none';
        };

        const btnScrollToTop = document.querySelector("#btnScrollToTop");

        btnScrollToTop.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>

<?php
include("PHP/connection.php");

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    $message = $_POST['message'];
    $sql = "INSERT INTO `query`(`name`, `email`, `phone`, `time`, `message`) VALUES ('$name','$email','$phone','$date','$message')";
    $result = mysqli_query($con, $sql);

    if ($result) {
    ?>
        <script>
            alert("Message Sent Successfully");
            window.location.href = "index.php";
        </script>
    <?php
        exit();
    } 
    else {
    ?>
        <script>
            alert("Failed to Send Message");
        </script>
<?php
        exit();
        }
    }
?>