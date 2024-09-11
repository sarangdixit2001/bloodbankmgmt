<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../Gallery/gallery.css">
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

    <div>
        <h2 class="heading">
            Nashik Blood Center Gallery
        </h2>
    </div>

    <div id="galleryimg">
        <img src="../img/galleryimg1.png" alt="" srcset="">
    </div>
    <div id="galleryimg2">
        <img src="../img/galleryimg2.png" alt="" srcset="">
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
