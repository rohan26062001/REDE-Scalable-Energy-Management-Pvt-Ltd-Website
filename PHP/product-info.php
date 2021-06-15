<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/Rede-Logo.jpg" type="image/x-icon">
    <title>Product Information | REDE Scalable Energy Management Pvt. Ltd.</title>

    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">

    <!-- Icon Library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />

    <!-- Material Icons CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- BS4 -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- External Stylesheets -->
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/main.css" />
</head>

<style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #E91E63;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #E91E63;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #E91E63;
    }
</style>


<body onload="myFunction()">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../our-products.php">Our Products</a>
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

    <!-- Product Section Start -->
    <section id="product" class="my-3">
        <div class="container">
            <h1 class="text-center">Our <span style="color: #E91E63;">Products</span></h1>
            <p>We, The REDE Scalable is an engineering company offering solutions for utility protocol
                development, application programming interface and solutions for data acquisition, data
                analysis and data monitoring for various industrial applications.</p>
            <p>
                We have developed numerous customized solutions on various embedded platforms as
                RTU, FRTU and protocol gateways for different applications in power & energy, water,
                renewable energy, pollution control, as per customer requirements.</p>
            <div class="">
                <div class="row my-2">
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/Utility Protocol Gateway.jpeg" alt="Utility Protocol Gateway">
                        <h4>Utility Protocol Gateway</h4>
                        <p>Supports IEC61850,
                            IEC60870-5-101/103/104,
                            DNP3, DLMS, OPC UA/
                            DA, MQTT</p>

                    </div>
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/Feeder Remote Terminal Unit.jpeg" alt="Feeder Remote Terminal Unit">
                        <h4>Feeder Remote Terminal Unit</h4>
                        <p>Feeder Remote Terminal
                            Unit for RMU, CSS,
                            Tripping Controller, EFPI
                            Management.</p>

                    </div>
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/Remote Terminal Unit.jpeg" alt="Remote Terminal Unit">
                        <h4>Remote Terminal Unit</h4>
                        <p>Supports advance PLC
                            logic IEC 61131,
                            Hotswappable IOs,
                            IEC60870-5-101/103/104,
                            DNP3, DLMS, etc</p>

                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/Automatic Weather Station.jpeg" alt="Automatic Weather Station">
                        <h4>Automatic Weather Station</h4>
                        <p>Sensors, Data Logger,
                            Tripod, Web Based HMI</p>

                    </div>
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/Industrial Modem and Routers.jpeg" alt="Industrial Modem and Routers">
                        <h4>Industrial Modem and Routers</h4>
                        <p>2G/3G/4G LTE, MQTT,
                            VPN, Modbus, LoRa</p>

                    </div>
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/Industrial Ethernet Switches.jpeg" alt="Industrial Ethernet Switches">
                        <h4>Industrial Ethernet
                            Switches</h4>
                        <p>Unmanaged, Managed,
                            IEC61850-3 Compliant</p>

                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/Local Data Monitoring System.jpeg" alt="Local Data Monitoring System">
                        <h4>Local Data Monitoring System</h4>
                        <p>LDMS, Substation HMI,
                            SLD, Alarms, Events,
                            Reports, Trends, User
                            management</p>

                    </div>
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/Cloud Based Application.jpeg" alt="Cloud Based Application">
                        <h4>Cloud Based Application</h4>
                        <p>Custom cloud applications
                            Microsoft Azure, Amazon
                            Web Services, Restful API,
                            MQTT</p>

                    </div>
                    <div class="col-md-4 col-12 bg-light text-center py-2" style="border-radius: 16px;">
                        <img src="../images/products/On Site and Online Support Services.jpeg" alt="On Site and Online Support Services">
                        <h4>On Site and Online
                            Support Services</h4>
                        <p>FAT/SAT, Installation &
                            commissioning, product
                            configuration, data
                            mapping</p>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card-box" style="overflow-x: auto; ">
                        <h1 class="mt-0 header-title text-center">View <span style="color: #E91E63;">Products</h1>
                        <table class="styled-table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Feeder Remote Terminal Unit for Smart Grids</td>
                                    <td><a href="../products/FRTU.html" class="btn btn-primary" style="border-radius: 16px;">View Product</a></td>
                                </tr>
                                <tr class="active-row">
                                    <td>Remote Terminal Unit for Smart Grids</td>
                                    <td><a href="../products/RTU.html" class="btn btn-primary" style="border-radius: 16px;">View Product</a></td>
                                </tr>
                                <tr>
                                    <td>RS SCADA</td>
                                    <td><a href="../products/scada.html" class="btn btn-primary" style="border-radius: 16px;">View Product</a></td>
                                </tr>
                                <tr class="active-row">
                                    <td>RSK-PGA: EMBEDDED SOFT SOLUTION</td>
                                    <td><a href="../products/RSK-PGA.html" class="btn btn-primary" style="border-radius: 16px;">View Product</a></td>
                                </tr>
                                <tr>
                                    <td>Automatic Weather Station</td>
                                    <td><a href="../resources/AWS_Brochure.pdf" class="btn btn-primary" style="border-radius: 16px;" download="">View Product</a></td>
                                </tr>
                                <tr class="active-row">
                                    <td>RSKPGA1251 Gateway</td>
                                    <td><a href="../resources/RSKPGA1251 Gateway Datasheet.pdf" class="btn btn-primary" style="border-radius: 16px;" download="">View Product</a></td>
                                </tr>
                                <tr>
                                    <td>Protocol Analyzer</td>
                                    <td><a href="../products/protocol-analyzer.html" class="btn btn-primary" style="border-radius: 16px;" >View Product</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Product Query Section Start -->
    <div class="container my-5 bg-light py-5" style="border-radius: 16px;">
        <h2 class="text-center"><span style="color: #E91E63;">Product</span> Query</h2>
        <form action="" method="POST">
            <label for="name">Full Name</label><br>
            <input type="text" name="name" id="name" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
            <label for="phone">Phone Number:</label><br>
            <input type="number" name="phone" id="phone" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
            <label for="product">Product Name:</label><br>
            <input type="text" name="product" id="product" style="width: 100%; border-color:#E91E63; border-radius: 15px;" required><br>
            <label for="message">Message:</label><br>
            <input type="text" name="message" id="message" style="width: 100%; height: 100px; border-color:#E91E63; border-radius: 15px;" required>
            <br><br>

            <button class="btn btn-primary w-100" name="send">Send Query</button><br><br>
        </form>
    </div>
    <!-- Product Query Section End -->

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
                            <a href="../our-products.html" class="text-reset">Product</a>
                        </p>
                        <p>
                            <a href="../contact-us.php" class="text-reset">Service</a>
                        </p>
                        <p>
                            <a href="../contact-us.php" class="text-reset">Contact Us</a>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <!-- vanilla-tilt.js -->
    <script type="text/javascript" src="JS/vanilla-tilt.min.js"></script>
    <!-- observer.js -->
    <script src="JS/observer.js"></script>
    <script>
        const btnScrollToTop = document.querySelector("#btnScrollToTop");

        btnScrollToTop.addEventListener('click', function() {
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

        tl.from(".gsap", {
                x: 200,
                opacity: 0,
                duration: 1.5
            })
            .from(".content", {
                y: 300,
                opacity: 0,
                duration: 1
            }, "-=1")

        VanillaTilt.init(document.querySelectorAll(".card-edit"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1
        });
    </script>
</body>

</html>

<?php
include("connection.php");

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    $product_name = $_POST['product'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `product_query`(`name`, `email`, `phone`, `product`, `time`, `message`) VALUES ('$name','$email','$phone','$product_name','$date','$message')";
    $result = mysqli_query($con, $sql);

    if ($result) {
    ?>
        <script>
            alert("Message Sent Successfully");
        </script>
    <?php
        exit();
    } 
    else {
    ?>
        <script>
            alert("Failed to Send Query");
        </script>
<?php
        exit();
        }
    }
?>