<?php

include 'dbcon.php';


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $mobile_no = mysqli_real_escape_string($con, $_POST['mobile_no']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $Blood_grp = mysqli_real_escape_string($con, $_POST['Blood_grp']);
    $check_value = mysqli_real_escape_string($con, $_POST['check_value']);
    $Last_date_of_donate_blood = mysqli_real_escape_string($con, $_POST['Last_date_of_donate_blood']);



    $insert = "INSERT INTO self_registration_form(name, address, age,pincode, date,mobile_no,email,Blood_grp,check_value,Last_date_of_donate_blood) values('$name','$address','$age','$pincode','$date','$mobile_no','$email','$Blood_grp','$check_value','$Last_date_of_donate_blood')";

    $query = mysqli_query($con, $insert);

    if ($query) {
        echo '<script>alert("Your Self Registration Form is Submitted Sucessfully.")</script>';
        header("refresh:1 ; url=../self registration form/self registration form.php");
    } else {
        echo '<script>alert("Unsuccessful Form Submition!!!")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self registration form</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../self registration form/self registration form.css">
    <!-- <link rel="stylesheet" href="../why donate/why doante.css"> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" id="newnavbar">
    <div class="container-fluid" id="navigation">
        <div id="navheartlogo">
            <img src="../../img/navlogo.png" alt="">
        </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../index/index2.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../../aboutus/about.php">About Blood Bank</a></li>
                            <li><a class="dropdown-item" href="../../aboutus/activities/activities.php">Activities</a></li>
                            <li><a class="dropdown-item" href="../../aboutus/thalassemia program/thalassemia.php">Thalassemia Program</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blood Donation
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../why donate/why donate.php">Why Donate</a></li>
                                <li><a class="dropdown-item" href="../do's and dont's/do's and dont's.php">Do's And Dont's</a></li>
                                <li><a class="dropdown-item" href="../self registration form/self registration form.php">Self registration form</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-item dropdown" id="requestblood">
                        <a class="nav-link" href="../../Request Blood/Requestblood.php" aria-expanded="false">
                            Request Blood
                        </a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">

                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Camp
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="../../Camp/conducting_camp/conducting_camp.php">Perquisites for conducting Camp</a></li>
                                           
                                            <li><a class="dropdown-item" href="../../Camp/Campbenfits/campbenfits.php">Benifits of Organising Camps</a></li>
                                            <li><a class="dropdown-item" href="../../Camp/online_form/onlineform.php">Online Form</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../../Gallery/gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../../contact/contact.php">Contact</a>
                                </li>


                                <div>
                                    <form action="../../Login_register/logout.php">
                                        <button class="logout" type="submit">Logout</button>
                                    </form>

                                </div>
    </nav>

    <div>
        <h2 class="heading">
            Self Registration Form


        </h2>
    </div>

    <div>
        <strong id="strng">1.Donor Information</strong>
    </div>

    <div class="contanier">
        <form class="myform" action="../self registration form/self registration form.php" method="POST">
            <label for="yname" class="tlabel">Your Name</label><br>
            <input class="myinput" type="text" name="name" id="yname" pattern="[a-zA-Z'-'\s]*" required="required" placeholder="Your Name" /><br>

            <label for="yaddress" class="tlabel">Your Address</label><br>
            <textarea class="myinput" type="text" name="address" id="yaddress" required="required" placeholder="Your Address" /></textarea><br>

            <label for="yage" class="tlabel">Your Age</label><br>
            <input class="myinput" type="text" name="age" id="yage" required="required" placeholder="Your Age" /><br>

            <label for="ypincode" class="tlabel">Your PinCode</label><br>
            <input class="myinput" type="text" name="pincode" id="ypincode" required="required" placeholder="Your Pincode" /><br>

            <label for="ydateofbirth" class="tlabel">Date of Birth</label><br>
            <input class="myinput" type="date"  name="date" id="ydateofbirth" required pattern="\d{4}-\d{2}-\d{2}" required="required" placeholder="dd-mm-yyyy" /><br>

            <label for="ymobilephone" class="tlabel">Mobile No</label><br>
            <input class="myinput" type="phone" name="mobile_no" id="ymobilephone" pattern='[7-9]\d{9}$' maxlength='10' oninvalid="this.setCustomValidity('Please Enter Valid Number')" oninput="setCustomValidity('')" required="required" placeholder="Mobile No" /><br>

            <label for="yemail" class="tlabel">Email</label><br>
            <input class="myinput" type="email" name="email" id="yemail" required="required" placeholder="Email" /><br>

            <label for="yemail" class="tlabel">Your Blood Group</label><br>
            <input class="myinput" type="text" name="Blood_grp" id="yemail" required="required" placeholder="Enter Your Blood Group" /><br>

            <label for="ymarried">Married:</label>
            <input class="check" type="radio" name="check_value" value="Married" id="ymarried" required="required" />

            <label for="yunmarried">Unmarried:</label>
            <input class="check" type="radio" name="check_value" value="Unmarried" id="yunmarried" required="required" />

            <label for="ybus">Business:</label>
            <input class="check" type="radio" name="check_value" value="Business" id="ybus" required="required" />

            <label for="yservice">Service:</label>
            <input class="check" type="radio" name="check_value" value="Service" required="required" />

            <label for="yhw">House Wife:</label>
            <input class="check" type="radio" name="check_value" value="House Wife" id="yhw" required="required" />

            <label for="ystud">Student:</label>
            <input class="check" type="radio" name="check_value" value="Student" id="ystud" required="required" /><br>

            <label for="ydonate">Have you donated previously : Yes / No, If Yes, Last Date of Blood Donation</label><br>
            <input class="don" type="date"  name="Last_date_of_donate_blood" id="ydonate" required pattern="\d{4}-\d{2}-\d{2}" required="required" placeholder="Date of Birth" /><br>


            <div class="press">
                <button class="btn1" name="submit">Sumbit </button>
            </div>



        </form>
    </div>
    <footer id="footer" class="footerbgimg">
            <div>
                <h4 class="footerheading1">Contact Info</h4>
            </div>
            <div>
                <p class="footerheading">Copyright © 2022 Blood Bank Management System | All rights reserved</p>
            </div>

            <div>
                <p id="address">Nashik Blood Center,B.Y.K Collage<br>Collage Road,Nashik</p>
            </div>

            <div>
                <p id="mobile">9765465736|7564345236|8675463457</p> 
            </div>
            <div>
                <p id="email">NashikBloodCenter@gmail.com</p>
            </div>
            <div>
                <h4 id="link">Quick Link</h4>
            </div>
            <div>
                <ul id="links">
                    <li> <a href="#">About Blood Bank</a></li>
                    <li> <a href="#">Self Registration Form</a></li>
                    <li> <a href="#">Camp Conducting Form</a></li>
                    <li> <a href="#">Activites</a></li>
                </ul>
            </div>
            
                
            
            <div>
            <h4 id="location">Location</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.071827304883!2d73.76009511477653!3d20.00549988656149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb9b77d101f7%3A0xb931d87cd6b5f79e!2s(%20BYK%20College%20)%20Bhikusa%20Yamasa%20Kshatriya%20College%20of%20Commerce!5e0!3m2!1sen!2sin!4v1652800954961!5m2!1sen!2sin" id="map" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </footer>
</body>

</html>