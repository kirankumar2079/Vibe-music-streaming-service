<?php

    $server="localhost";
    $username="root";
    $password="kiran2001";
    $con=mysqli_connect($server,$username,$password,"vibe");
    
    session_start();

    $uname = $_POST["uname"];
    $password = $_POST["psw"];


    $q="SELECT * FROM `user_details` WHERE `user_name`='$uname'";

    //userrs with the same user name
    $res = mysqli_query($con,$q);

    //returns number of rows
    $ans = mysqli_num_rows($res);

    if($ans==0)
    {
        echo "<script> alert('invalid username');</script>";
    }
    else if($ans==1)
    {
       $row=mysqli_fetch_array($res);
       if($password==$row['user_pass'])
       {
           $_SESSION["username"] =  $uname;
           $_SESSION["login"]=true;
           $_SESSION["time"]=time()+10*3600;
           
       }
       else
       {
           echo "<script>alert('invalid password');</script>";
       }
    }

?>