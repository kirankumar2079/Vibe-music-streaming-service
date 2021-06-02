<?php

    $server = "localhost";
    $username = "root";
    $password = "kiran2001";
    $con = mysqli_connect($server,$username,$password,"vibe");
    
    
    
    $uname = $_POST["uname"];
    $uemail = $_POST["uemail"];
    $uphone = (int)$_POST["uphone"];
    $pass  = $_POST["psw"];
    // $date = date("Y-m-d H-i-s");

    $q = " SELECT * FROM `user_details` WHERE `user_name`='$uname'";

    $v = mysqli_query($con,$q);

    $rows = mysqli_num_rows($v);

    if( $rows==0)
    {
    $qu = "INSERT INTO `user_details` VALUES('$uname','$uemail','$uphone','$pass')";

    $v=mysqli_query($con,$qu);
    header("Location: main.php");
    }
    else
    {
        echo "<script>alert('sorry that username is already taken');</script>";
        // header("Location: login.php");
    }

    // header("Location: main.php");


?>