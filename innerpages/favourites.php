<?php
  session_start();
  if(isset($_SESSION["time"]))
  {
    if($_SESSION["time"]<time())
    {
      echo "<script> alert('your session has expired');</script>";
      header("Location: ../index.php");
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
    <style>
        body
        {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
    <title>Document</title>
</head>
<body>

<h1>
    fav
</h1>
    
</body>
</html>