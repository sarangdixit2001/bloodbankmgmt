<?php
    session_start();
    // Destroy session
    session_destroy();
    
    echo '<script>alert(" Logout Successfull !!!")</script>';                
    header("refresh:0.1; url=../index/index.php");
?>