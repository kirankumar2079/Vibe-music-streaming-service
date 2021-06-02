<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon (1).ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/headerfooter.css">
    <link rel="stylesheet" href="./styles/contactus.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Contact vibe</title>
</head>
<body>

    <!-- NAV BAR -->
    <div id="header1">
        <ul>
            <li>
                <a href="./index.php">HOME</a>
            </li>
            
            <li>
                <a href="./contactus.php" rel="noopener noreferrer">CONTACT US</a>
            </li>
            <li>
                <a href=""><img src="./images/moon.png" alt="dark-light-mode"></a>
            </li>
            <li id="last-but" onclick="logsign()">
                <a  href="./login.php">LOGIN</a>
            </li>
        
        </ul>
    </div>
    
    <div class="full">


    <div class="contactform">
        <div class="contact-info">
          
            <h1>
                Wanna tell us Something
            </h1>
            <p>
              Found a bug?
            </p>
            <p>we can squash it.</p>
            <p>Or is it something else you want to inform us about ?</p>
            <p>you can do it here :)</p>
        </div >
        <div class="contact-form">
            <div id="symbol">
                <img src="./images/v.png" alt="vlogo">
            </div>
            <form name="cform" method="post" action = " # " onsubmit="return validatecform()">
                <input  type="text" value="" placeholder="Enter your name" required name="uname">
                <br>
                <input type="text" placeholder="Enter your email" required name="email">
                <br>
                <textarea name="textbox" cols="30" rows="40" placeholder="Tell us what you are thinking" required></textarea>
                <br>
                <input type="submit" value="submit">
            </form>
        </div>

    </div>

</div>

    <footer id="footer">
        <ul>
            <li><a href="aboutus.php" >ABOUT US</a></li>
            <li><a href="ourteam.php" >OUR TEAM</a></li>
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
            function validatecform()
    {
        var name = document.cform.uname.value;
        var email = document.cform.email.value;
        var pattern = /^[^ ]+@[^ ]+.[a-z]{2,3}$/;
        if (name = null ||name =="")
        {
            alert("Enter Username");
            return false;
        }
        else if (!email.match(pattern))
        {
            alert("Please enter a valid e-mail address");
            return false;
        }
    }
</script>
    </script>
</body>
</html>