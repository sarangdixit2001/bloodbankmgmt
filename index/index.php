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
    <title>Blood Bank Management System</title>

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
                        <a onclick="myFunction()" class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a onclick="myFunction()" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">About Blood Bank</a></li>
                            <li><a class="dropdown-item" href="#">Activities</a></li>
                            <li><a class="dropdown-item" href="#">Thalassemia Program</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a onclick="myFunction()" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blood Donation
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Why Donate</a></li>
                                <li><a class="dropdown-item" href="#">Do's And Dont's</a></li>
                                <li><a class="dropdown-item" href="#">Self registration form</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">

                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a onclick="myFunction()" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Camp
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Perquisites for conducting Camp</a></li>
                                            <li><a class="dropdown-item" href="#">Blood Donation Camp process</a></li>
                                            <li><a class="dropdown-item" href="#">Benifits of Organising Camps</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <li class="nav-item">
                                    <a onclick="myFunction()" class="nav-link active" aria-current="page" href="#">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a onclick="myFunction()" class="nav-link active" aria-current="page" href="#">Contact</a>
                                </li>

                                <div>
                                    <form action="../Login_register/register.php">
                                        <button class="logout" type="submit">Register/Login</button>
                                    </form>

                                </div>

                                <div>
                                    <form action="../admin/admin_login.php">
                                        <button class="logout">Admin</button>
                                    </form>
                                </div>



                            </div>
                    </div>
    </nav>


    <!--slider-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">>
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
                <p id="email">nashikbloodcenter@gmail.com</p>
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
<script>
    function myFunction() {
        alert("First Do Resgister or If you have an Account \n Then go to Login");
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>




</html>