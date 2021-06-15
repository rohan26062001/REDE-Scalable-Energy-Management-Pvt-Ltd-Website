<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/Rede-Logo.jpg" type="image/x-icon">
    <title>Customer Details | REDE Scalable Energy Management Pvt. Ltd.</title>

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
    <link rel="stylesheet" href="../CSS/partners.css">
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

<body>
    <!-- Scroll To Top Button -->
    <button id="btnScrollToTop">
        <i class="material-icons">arrow_upward</i>
    </button>
    <!-- Scroll To Top Button End -->


    <!-- Enquiry Section Start -->
    <section class="enquiry">
        <div class="container my-5">
            <h1 class="text-center"><span style="color: #E91E63;">Employee</span> Details</h1>
            <?php

            include("connection.php");

            $query = "select * from customer_list";
            $data = mysqli_query($con, $query);

            $total = mysqli_num_rows($data);

            if ($total != 0) {
            ?>
                <table style="width:600px; text-align:center; line-height:40px; width: 100%" class="table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Company Name</th>
                            <th>Last Visited On</th>
                        </tr>
                    </thead>

                    <?php
                    while ($rows = mysqli_fetch_assoc($data)) {
                    ?>
                        <tr>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td><?php echo $rows['phone']; ?></td>
                            <td><?php echo $rows['company']; ?></td>
                            <td><?php echo $rows['date']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            } else {
                echo "No transaction history";
            }
            ?>
        </div>
    </section>
    <!-- Enquiry Section End -->

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
        var preloader = document.getElementById("loading");

        function myFunction() {
            preloader.style.display = 'none';
        };

        const btnScrollToTop = document.querySelector("#btnScrollToTop");

        btnScrollToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>