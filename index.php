<?php
   session_start();
   if(isset($_SESSION["timeout"]))
   {
       if($_SESSION["timeout"]==true)
       {
           echo "<script> alert('your session has expired');</script>";
           header("Location: logout_bnd.php");

       }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibe</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="shortcut icon" href="./images/favicon (1).ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/headerfooter.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!-- <script src="styles/light-dark.js"></script> -->
</head>
<body>

 
    <!-- NAV BAR -->
    <div id="header1">
        <ul>
            <li>
                <a href="./index.php">HOME</a>
            </li>

            <li>
                <a href="./contactus.php"  rel="noopener noreferrer">CONTACT US</a>
            </li>
            <li>
                <a href=""><img src="images/moon.png" alt="dark-light-mode"></a>
               
            </li>
            <li id="last-but" onclick="logsign()">
                <a  href="./login.php">LOGIN</a>
            </li>
        </ul>
    </div>
            
        
        <!-- VIBE TEXT -->
        <div id="vibe-text">
            <div class="text1">
            <h1 class="header" >Vibe</h1>
            <p> let your emotions flow with the rythm</p>
        </div>
        </div>
    
        <div id="information">
            <div class="info1">
                <div id="img1">
                    <img id="happy-music "src="./images/undraw_happy_music_g6wc.svg" alt="happy music">
                </div>
                <div id="matter1">
                    <h1>
                        Happy music on the GO!
                    </h1>
                    <h3>
                        Soundtrack your life with Vibe. Subscribe or listen for free
                    </h3>
                </div>
            </div>
            <div class="info2">
                <div id="matter2">
                    <h1>
                        Create Your own customised Playlist
                    </h1>
                    <h3>
                        Lost track of all your favourite songs.? sign up and create multiple playlists of your Vibe..!!
                    </h3>
                </div>
                <div id="img2">
                    <img src="./images/undraw_Playlist_re_1oed.svg" alt="Playlist">
                </div>
            </div>
            <div class="info3">
                <div id="img3">
                    <img src="./images/undraw_Music_re_a2jk.svg" alt="">
                </div>
                <div id="matter3">
                    <h1>Listen Anonimously</h1>
                    <h3>
                        hate Loging-in everytime ..? You can now listen to your favourite songs Anonomously without logging in with our new guest session
                    </h3>
                </div>
            </div>
        </div>





    <!-- FOOTER -->
    <footer id="footer">
        <ul>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="ourteam.php">OUR TEAM</a></li>
         

        </ul>
       
        <div class="p">
        <p>
            This website and all its contents are Copyrighted
        </p>
        <p>
            &#169 VIBE 2021
        </p>
        <!-- <p>
           you may print or download to a local hard disk extracts for your personal and non-commercial use only
        </p> -->
        <p>
           KEEP VIBING
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

        <a href="" target="_blank"><img  width="50px" heigth="50px" class="logo-for"  src="./images/icons8-facebook.svg" alt="" srcset=""></a>
        <a href="" target="_blank"> <img  width="50px" heigth="50px" class="logo-for"  src="./images/icons8-twitter.svg" alt="" srcset=""></a>
        <a href="" target="_blank"> <img   width="50px" heigth="50px" class="logo-for"  src="./images/icons8-github.svg" alt=""></a>
        
    </div>
   

</body>
</html>