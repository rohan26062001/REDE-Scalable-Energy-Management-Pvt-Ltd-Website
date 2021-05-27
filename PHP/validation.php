<?php
    include("connection.php");

    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user_list` WHERE email='$email' AND password='$password' AND employeeID='$id'";

    $result = mysqli_query($con, $query);

    $num = mysqli_num_rows($result);

    if($num == 1){
        ?>
        <script>
            alert('Successfully Logged In');
            window.location.href="enquiry.php";
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('Invalid Employee ID/ Email/ Password');
            window.location.href="login.php";
        </script>
        <?php
    }
?>