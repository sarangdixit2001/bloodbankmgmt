<?php

include 'dbcon.php';


if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);


    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = " select * from registration where email = '$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if ($emailcount > 0) {
?>
        <script>
            alert("You Have already an account please go to login!!!!");
        </script>
        <?php

    } else {
        if ($password === $cpassword) {

            $insertquery = "insert into registration(username, email, mobile,password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

            $iquery = mysqli_query($con, $insertquery);

            if ($iquery) {
                echo '<script>alert("Registration Successful\n You can Login Now!!")</script>';
                header("refresh:1 ; url=../Login_register/login.php");
            } else {
                echo '<script>alert("Unsuccessful Registration!!!")</script>';
            }
        } else {
        ?>
            <script>
                alert("Passsword not matching!!!");
            </script>
<?php


        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Register/Login For Blood Bank Management System</title>
</head>

<body>




    <div class="login">
        <h2 class="active"> Register </h2>

        <form action="../Login_register/register.php" method="post" class="registerform">

            <input type="text" class="text" name="username" pattern="[a-zA-Z'-'\s]*" required="" oninvalid="this.setCustomValidity('Please Enter Valid Name')" oninput="setCustomValidity('')" required>

            <span>Username</span>

            <br><br>

            <input type="email" class="text" name="email" required>
            <span>Email</span>
            <br>
            <br>
            <input type="mobile" class="text" name="mobile" pattern="^[7-9]\d{9}$" maxlength="10" required>
            <span>Phone Number</span>
            <br><br>
            <input type="password" class="text" name="password" required>
            <span>password</span>
            <br>
            <br>
            <input type="password" class="text" name="cpassword" required>
            <span>Confirm Password</span>


            <button class="signin" name="submit">
                Register
            </button>
            <a href="../Login_register/login.php">Go back to Login</a>


            <!-- <a href="../Login_register/login.php">Go To Back Login Page</a> -->

        </form>

</body>


</html>