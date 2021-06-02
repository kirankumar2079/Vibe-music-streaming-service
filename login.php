<?php
   session_start();
   if(isset($_SESSION["login"]) AND isset($_SESSION["time"]))
   {
    if($_SESSION["login"]==true AND $_SESSION["time"]>=time())
    {
        header("Location: main.php" );
    }
    else
    {
        $_SESSION["timeout"]=true;
        header("Location: index.php");
    }
   }
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon (1).ico" type="image/x-icon">
    <title>Login to Vibe</title>
    <link rel="stylesheet" href="./styles/loginsignup.css">
    <link rel="stylesheet" href="./styles/headerfooter.css">
    
</head>

<body>
    
    <div id="header1">
        <ul>
   
            <li>
                <a href="./index.php">HOME</a>
            </li>
            
            <li>
                <a href="./contactus.php" rel="noopener noreferrer">CONTACT US</a>
            </li>
            <li>
                <img id="icon" src="images/moon.png" alt="dark-light-mode">
               
            </li>
          
        </ul>
    </div>

            <!-- LOGIN AND SIGN UP FORM -->
            <div id="loginsignup" >

            <div id="handshake" class="container">
                    <!-- <div class="circle" >
                        <svg width="300px" height="300px" >
                            <circle cx="150"  cy="150" r="150" stroke-width="2" fill="yellow"/>
                        </svg>
                    </div> -->
                    <div id="symbol">
                        <img src="./images/v.png" alt="vlogo">
                    </div>
                    <div id="welcome_user">
                        <h1> Welcome To Our</h1>
                    </div>
                    <div id="hi_user">
                        <h1> New Vibe</h1>
                    </div>
                    <input  type="button"  id = "sign" value="signin" onclick="transist()">
                </div>
                <div id="signup" >
                <form name = "signupform" method="post" action="signup_bnd.php" onsubmit="return validateform()">
                    <h2>Sign-Up</h2>
                    <input type="text" placeholder="Enter your Username" required name="uname">
                    <br>
                    <br>
                    <input type="text" placeholder="Enter your email"
                    name="uemail" required>
                    <br>
                    <br>
                    <input type="text" placeholder="Enter yout phone number" name="uphone" required>
                    <br>
                    <br>
                    <input type="password" placeholder="Enter your pasword" required name="psw">
                    <br>
                    <br>
                    <input type="submit" value="signup">
                </form>
                </div>
                <div id="login" class="container"  >
                <form action="login_bnd.php" method="POST">
                    <h2>Login</h2>
                    <!-- <label for="uname"><i>Username</i></label> -->
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <br>
                    <br>
                    <!-- <label for="psw"><i>Password</i></label> -->
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <br>
                    <br>
                    <input type="submit" value="Login" >
                </form>
                </div>
     
                <a href="./main.php"><input  type="button"  id = "guest" value="Listen as guest"></a>
            
            </div>

             
            <footer id="footer">
                <ul>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="ourteam.php">OUR TEAM</a></li>
                    <div class="p">
                    </ul>
                    <div class="p">
                        <p>
                            This website and all its contents are Copyrighted
                        </p>
                        <p>
                            &#169 VIBE 2021
                        </p>
                        <p>
                            HAPPY MUSIC TO YOU
                        </p>
                        </div>
                        <div class="h4">
                        <h4>
                            OUR ADDRESS
                        </h4>
                        <p>
                            VIBE Inc.
                            Texas
                            <address>
                                <i>vibe.2021@vibe.org</i>
                            </address>
                         </p>
                    </div>
               
            </footer>

            <div id="social">
                <a href="" target="_blank"><img   class="logo-for"  src="./images/icons8-facebook.svg" alt="" srcset=""></a>
                <a href="" target="_blank"> <img  class="logo-for"  src="./images/icons8-twitter.svg" alt="" srcset=""></a>
                <a href="" target="_blank"> <img  class="logo-for"  src="./images/icons8-github.svg" alt=""></a>
                
        
            </div>
        
            <script>
    function validateform()
    {
      
        var name = document.signupform.uname.value;
        var password = document.signupform.psw.value;
        var email = document.signupform.uemail.value;
        var phoneno = document.signupform.uphone.value;

        var pattern = /^[^ ]+@[^ ]+.[a-z]{2,3}$/;
        var patternphone = /^\d{10}$/;
        if (name =="")
        {
            alert("Enter Username");
            return false;
        }
        else if(password.length<8)
        {
            alert("password should have atleast have 8 characters.");
            return false;
        }
        else if(phoneno<10)
        {
            alert("phone number must be 10 numbers");
            return false;
        }
        else if (!email.match(pattern))
        {
            alert("Please enter a valid e-mail address");
            return false;
        }
        else if (!phoneno.match(patternphone))
        {
            alert("invalid phone number..!")
            return false;
        }
        return true;
    }

    var tog = 0;
    function logsign()
    {
        var v1=document.getElementById("last-but");
        v1.style.transition="2s";
    }
    function transist(){
                    var signup = document.getElementById("signup");
                    var login = document.getElementById("login");
                    var handshake = document.getElementById("handshake");
                    var welcome = document.getElementById("welcome_user");
                    var hi_user = document.getElementById("hi_user");
                    var switching = document.getElementById("sign");
                    if(tog == 0){
                        welcome.innerHTML = "<h1>Welcome Back!</h1>";
                        hi_user.innerHTML = "<h1> Viber</h1>";
                        sign.value = "signup";
                        handshake.style.left = "50%";
                        // signup.style.left = "50%";
                        // login.style.left = "5%";
                        tog = 1;
                    }
                    else{
                        welcome.innerHTML = "<h1>Welcome To Our</h1>";
                        hi_user.innerHTML = "<h1> New Vibe</h1>";
                        sign.value = "signin";
                        handshake.style.left = "5%";
                        // signup.style.left = "5%";
                        // login.style.left = "50%";
                        tog = 0;
                    }
                }
</script>

</body>
</html>