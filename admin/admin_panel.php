<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../admin/admin_panel.css">
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

                    <li class="nav-item" id="panel">
                        <a class="nav-link active" aria-current="page" href="../admin/manage_register_user/manage_register_user.php">Manage<br>Register_Users</a>
                    </li>

                    <li class="nav-item" id="panel">
                        <a class="nav-link active" aria-current="page" href="../admin/manage_registration_form/manage_registration_form.php">Manage<br>Registration_Form</a>
                    </li>

                    <li class="nav-item" id="panel">
                        <a class="nav-link active" aria-current="page" href="../admin/manage_request_blood/manage_request_blood.php">Manage<br>Blood_Request</a>
                    </li>

                    <li class="nav-item" id="panel">
                        <a class="nav-link active" aria-current="page" href="../admin/manage_online_form/manage_online_form.php">Manage<br>Online_Form</a>
                    </li>

                    <li class="nav-item" id="panel">
                        <a class="nav-link active" aria-current="page" href="../admin/manage_contact_us/manage_contact_us.php">Manage<br>Contact_Form</a>
                    </li>



                    <div>
                        <form action="../Login_register/logout.php">
                            <button class="logout" type="submit">Logout</button>
                        </form>

                    </div>
    </nav>

    
</body>

</html>