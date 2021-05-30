<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/Rede-Logo.jpg" type="image/x-icon">
    <title>REDE Scalable Energy Management Pvt. Ltd.</title>

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
                    <a class="nav-link" href="our-products.html">Our Products</a>
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
                        <a class="dropdown-item" href="PHP/customer-login.php">Customer Login</a>
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

    <!-- Carousel Start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="services.html">
                    <img class="d-block w-100" src="images/banner/services.jpg">
                </a>
            </div>
            <div class="carousel-item">
                <a href="products/protocol-analyzer.html">
                    <img class="d-block w-100" src="images/banner/protocol-analyzer.jpg">
                </a>
            </div>
            <div class="carousel-item">
                <a href="products/FRTU.html">
                    <img class="d-block w-100" src="images/banner/frtu.jpg">
                </a>
            </div>
            <div class="carousel-item">
                <a href="products/RTU.html">
                    <img class="d-block w-100" src="images/banner/rtu.jpg">
                </a>
            </div>
            <div class="carousel-item">
                <a href="products/scada.html">
                    <img class="d-block w-100" src="images/banner/scada.jpg">
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->

    <!-- Industires We Work With Section Start -->
    <div class="bg-light w-100 py-5">
        <div class="container text-center">
            <h1 class="p-5"><span style="color: #E91E63;">INDUSTRIES</span> We Work With</h1>
            <p class="lead pb-5">Infinite possibilities, endless opportunities.</p>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center flex-wrap">
                <div class="col-12 col-md-3">
                    <img class="mx-auto d-block" src="images/industry/p&e.jpg" alt="power and energy"
                        style="border-radius: 100%; width: 200px; height: 200px;">
                    <h6 style="text-align: center;">Power and Energy Industry</h6>
                    <p style="text-align: center;">In this domain we have many products like energy managment, load
                        shedding, energy monitoring and analysis, power factor control system.</p>
                </div>
                <div class="col-12 col-md-3">
                    <img class="mx-auto d-block" src="images/industry/steel.jpg" alt="steel"
                        style="border-radius: 100%; width: 200px; height: 200px;">
                    <h6 style="text-align: center;">Steel Industry</h6>
                    <p style="text-align: center;">We have many applications for furnace monitoring and control.</p>
                </div>
                <div class="col-12 col-md-3">
                    <img class="mx-auto d-block" src="images/industry/mining.jpg" alt="steel"
                        style="border-radius: 100%; width: 200px; height: 200px;">
                    <h6 style="text-align: center;">Mining Industry</h6>
                    <p style="text-align: center;">In Mining, our product includes vehical monitoring, RFID, Gate
                        Control System etc.</p>
                </div>
                <div class="col-12 col-md-3">
                    <img class="mx-auto d-block" src="images/industry/cement.jpg" alt="steel"
                        style="border-radius: 100%; width: 200px; height: 200px;">
                    <h6 style="text-align: center;">Cement Industry</h6>
                    <p style="text-align: center;">In cement industries our expertise mainly on industrial automation
                        and data acquisition.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Industires We Work With Section End -->

    <!-- Experiecne Section Start -->
    <section class="experience bg-light py-5">
        <h1 class="py-5" style="font-weight: bolder; text-align: center;">More than <span style="color: #E91E63;">14
                YEARS</span> of Experience</h1>
        <div class="container-edit">
            <div class="card-edit">
                <div class="content-edit">
                    <h2><i class="fas fa-shapes"></i></h2>
                    <h3>Projects</h3>
                    <p>321 Projects Completed</p>
                </div>
            </div>
            <div class="card-edit">
                <div class="content-edit">
                    <h2><i class="fas fa-users"></i></h2>
                    <h3>Skilled Professionals</h3>
                    <p>35+ highly skilled engineers</p>
                </div>
            </div>
            <div class="card-edit">
                <div class="content-edit">
                    <h2><i class="fas fa-plane"></i></h2>
                    <h3>Distributors</h3>
                    <p>8 Distributors around the globe</p>
                </div>
            </div>
            <div class="card-edit">
                <div class="content-edit">
                    <h2><i class="fas fa-crown"></i></h2>
                    <h3>Customers</h3>
                    <p>300+ Satisfied Customers</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Experiecne Section End -->

    <!-- Partners Section Start -->
    <section class="partners">
        <h1 style="font-weight: bolder; text-align: center; padding-top: 20px; padding-bottom: 20px;">Our <span
                style="color: #E91E63;">Partners</span></h1>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 justify-content-center align-items-center fade-in from-left">
                    <h3 style="color: #E91E63;">RS Consultancy</h3>
                    <p>RS Consultancy provides Smart Grid Applications, Energy Monitoring And Management, Water
                        Monitoring System And Improvement services for clients in INDIA & ABROAD. They have been
                        pioneers in the industry for many years and are known for taking innovative steps.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 justify-content-center align-items-center fade-in from-right">
                    <img src="images/rs.png" class="mx-auto d-block" alt="rs">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 justify-content-center align-items-center fade-in from-left">
                    <img src="images/advantech-2.png" class="mx-auto d-block" alt="rs">
                </div>
                <div class="col-12 col-md-6 col-lg-6 justify-content-center align-items-center fade-in from-right">
                    <h3 style="color: #E91E63;">Advantech</h3>
                    <p>Advantech’s corporate vision is to enable an intelligent planet. The company is a global leader
                        in the fields of IoT intelligent systems and embedded platforms. To embrace the trends of IoT,
                        big data, and artificial intelligence, Advantech promotes IoT hardware and software solutions
                        with the Edge Intelligence WISE-PaaS core to assist business partners and clients in connecting
                        their industrial chains. Advantech is also working with business partners to co-create business
                        ecosystems that accelerate the goal of industrial intelligence.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners Section End -->

    <!-- Certification Section Start -->
    <section class="dark bg-light">
        <div class="content">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 justify-content-center align-items-center">
                    <h4 class="text-center">Certified by <span
                            style="font-weight: bold; color: #E91E63;">ADVANTECH</span></h4><br>
                    <img src="images/advantech.png" class="gsap mx-auto d-block" alt="advantech-logo">
                </div>
                <div class="col-12 col-md-6 col-lg-6 justify-content-center align-items-center">
                    <h4 class="text-center">Secured by <span style="font-weight: bold; color: #E91E63;">COMODO CA</span>
                    </h4><br>
                    <img src="images/Comodo.jpg" class="gsap mx-auto d-block" alt="comodo-logo">
                </div>
            </div>
        </div>
    </section>
    <!-- Our Products Section End -->

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
                        <p><i class="fas fa-home me-3"></i> Office No. 140, Bizzbay mall, Opp. SBI Bank, NIBM-Undri Road, Kondhwa, Pune – 411048</p>
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
            © 2021 Copyright:
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

    <script>
        let tl = gsap.timeline({
            scrollTrigger: {
                trigger: '.dark',
                start: "center bottom"
            }
        });

        tl.from(".gsap", { x: 200, opacity: 0, duration: 1.5 })
            .from(".content", { y: 300, opacity: 0, duration: 1 }, "-=1")

        VanillaTilt.init(document.querySelectorAll(".card-edit"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1
        });
    </script>
</body>

</html>