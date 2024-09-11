<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
                <img src="../img/navlogo.png" alt="">
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index/index2.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../aboutus/about.php">About Blood Bank</a></li>
                            <li><a class="dropdown-item" href="../aboutus/activities/activities.php">Activities</a></li>
                            <li><a class="dropdown-item" href="../aboutus/thalassemia program/thalassemia.php">Thalassemia Program</a></li>
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
                                <li><a class="dropdown-item" href="../blood doantion/why donate/why donate.php">Why Donate</a></li>
                                <li><a class="dropdown-item" href="../blood doantion/do's and dont's/do's and dont's.php">Do's And Dont's</a></li>
                                <li><a class="dropdown-item" href="../blood doantion/self registration form/self registration form.php">Self registration form</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-item dropdown" id="requestblood">
                        <a class="nav-link" href="../Request Blood/Requestblood.php" aria-expanded="false">
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
                                            <li><a class="dropdown-item" href="../Camp/conducting_camp/conducting_camp.php">Perquisites for conducting Camp</a></li>

                                            <li><a class="dropdown-item" href="../Camp/Campbenfits/campbenfits.php">Benifits of Organising Camps</a></li>
                                            <li><a class="dropdown-item" href="../Camp/online_form/onlineform.php">Online Form</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../Gallery/gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../contact/contact.php">Contact</a>
                                </li>


                                <div>
                                    <form action="../Login_register/logout.php">
                                        <button class="logout" type="submit">Logout</button>
                                    </form>

                                </div>
    </nav>

    <!--slider-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="info">
                    <h1>Anbody Can Give Blood</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info">
                    <h1>Be a Proud Blood Donor</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info">
                    <h1>FIND THE HERO IN YOU</h1>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div>
        <h2 class="heading">Who We Are?</h2>
    </div>

    <div class="conatiner">
        <p class="para">We at Nashik Blood Centre ensures easily accessible and adequate<br>supply of safest & Superior quality blood & blood components collected<br> and procured from a voluntary non- remunerated regular blood donor in <br>well equipped premises,which is almost free from infections, and is stored<br>and transported under optimum conditions.“No patients should suffer for<br> want of blood". We believe that the quality we provide<br> makes us the best blood bank.</p>
    </div>

    <div>

        <ul class="custom-bullet-list">

            <li>Fully automated testing for grouping anti-body screening and cross matching. </li>
            <li>High quality assessment, diagnosis and treatment.</li>
            <li>Examine critically to ensure alignment.</li>
            <li>The extra care of a multi-disciplinary team.</li>
            <li>Superior technology for blood testing.</li>

        </ul>
    </div>
    <img src="../img/homepage.jpg" alt="">

    <div>
        <h2 class="secondheading">Why Should I Donate Blood</h2>

    </div>
    <div>
        <h5 class="thirdheading">Any donation is noble. Donation of blood is the noblest of all because it saves a human life. You will experience the satisfaction that comes <h5 class="fourthheading">with helping someone in need.</h5>
    </div>

    <div class="homeimage2">
        <img src="../img/hands-saving-blood-drop.jpg" alt="">
    </div>

    <div>
        <ul class="secondlist">

            <li>Because some patient needs it!</li>
            <li>Because you won’t lose anything!</li>
            <li>Because you are the only source of it!</li>
            <li>Because you are healthy!</li>
            <li>Because you care for others!</li>


        </ul>

    </div>
    <br><br>
    <strong class="strngheading">Who benefits from your act of Blood Donation ?</strong>
    <br>
    <div>
        <ul class="thirdlist">

            <li>Victims of accidents and burns.</li>
            <li>Those undergoing major surgeries or transplants.</li>
            <li>Babies requiring exchange blood transfusions.</li>
            <li>Patients with leukemia, cancer, hemophilia, heart and liver diseases.</li>
            <li>Thalassemia major patients.</li>


        </ul>

    </div>
    <hr>



    <div>
        <h2 class="donationheading">Donation Process</h2>

    </div>

    <div class="box">
        <div class="img">
            <img src="../img/Registration-768x587.jpg" alt="" class="boxes">

        </div>
    </div>

    <div class="box">
        <div class="img">
            <img src="../img/screening-768x587.jpg" alt="" class="boxes">
        </div>
    </div>

    <div class="box">
        <div class="img">

            <img src="../img/donation-768x587.jpg" alt="" class="boxes">
        </div>
    </div>

    <div>
        <h4 class="imgheading1">Registration</h4>
    </div>

    <div>
        <h4 class="imgheading2">Screening</h4>
    </div>

    <div>
        <h4 class="imgheading3">Donation</h4>
    </div>

    <div>
        <p class="firstpara">You need to complete a very simple registration form.<br>Which contains all required contact information to enter<br> in the donation process.</p>
    </div>

    <div>
        <p class="secondpara">A drop of blood from your finger tip will taken for sample<br> test to ensure that your blood hemoglobin levels are proper<br> enough for donation process or not.</p>
    </div>

    <div>
        <p class="thirdpara">After ensuring medical history, haemoglobin level and passing screening test successfully.<br>you will be directed to a blood donation area for donation.It will take only 3-5 minutes.</p>
    </div>
    <hr>



    <div>
        <h2 class="bloodrecieveheading">Blood Receiving Process</h2>

    </div>

    <div class="box">
        <div class="img">
            <img src="../img/requisition-form-768x587.jpg" alt="" class="boxes">

        </div>
    </div>

    <div class="box">
        <div class="img">
            <img src="../img/Blood-Receiving-768x587.jpg" alt="" class="boxes">
        </div>
    </div>

    <div class="box">
        <div class="img">

            <img src="../img/blood-screning-768x587.jpg" alt="" class="boxes">
        </div>
    </div>

    <div>
        <h4 class="secondimgheading1">Requisition</h4>
    </div>

    <div>
        <h4 class="secondimgheading2">Cross Matching</h4>
    </div>

    <div>
        <h4 class="secondimgheading3">Issue</h4>
    </div>

    <div>
        <p class="firstpara">Doner’s are to bring in a doctor’s requisition form with<br> pts history, blood group, <br>blood component required clearly metioned<br> and 2 tubes of pt blood in red and lavender coloured tubes.</p>
    </div>

    <div>
        <p class="fifthpara">Testing of the blood group of patient, <br>and cross matching with the available stock.<br>This process takes about 30-45 mins.</p>
    </div>

    <div>
        <p class="sixthpara">Issue of blood after verification and relatives sign of issue.<br>Relatives are requested to transport blood or component to the hospital immediately as instructed.</p>
    </div>
    <hr>

    <div>
        <h2 class="boldheading">Blood components available at Nashik blood centre</h2>
    </div>



    <div class="box">
        <div class="smallimg">
            <img src="../img/full-blood.png" alt="" class="boxes">

        </div>
    </div>

    <div class="box">
        <div class="smallimg">
            <img src="../img/Cryoprecipitate.png" alt="" class="boxes">
        </div>
    </div>

    <div class="box">
        <div class="smallimg">

            <img src="../img/frozen-plasma.png" alt="" class="boxes">
        </div>
    </div>
    <div>
        <p class="wholblood">Whole Blood</p>
    </div>

    <div>
        <p class="cryoprecipitate">Cryoprecipitate</p>
    </div>

    <div>
        <p class="frozenplasma">Frozen Plasma</p>
    </div>

    <div class="box">
        <div class="smallimg">
            <img src="../img/packed-red-blood-cells-PRBC.png" alt="" class="boxes">

        </div>
    </div>

    <div class="box">
        <div class="smallimg">
            <img src="../img/bolld-cell-e1609138578618.png" alt="" class="boxes">
        </div>
    </div>

    <div class="box">
        <div class="smallimg">

            <img src="../img/blood-donation-3Platelets-Single-Donor-Platelets-via-cell-separator.png" alt="" class="boxes">
        </div>
    </div>
    <div>
        <p class="bloodcell">Packed Red Blood cells (PRBC)</p>
    </div>

    <div>
        <p class="platelet">Platelets Concentrate (RDP)</p>
    </div>

    <div>
        <p class="plateletsdp">Platelets SDP (Single Donor Platelets via cell separator)</p>
    </div>
    <hr>

    <div>
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


    </div>









</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>





</html>