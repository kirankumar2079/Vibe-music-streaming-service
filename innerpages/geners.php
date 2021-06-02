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
    <link rel="stylesheet" href="home.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <style>
        body
        {
            font-family: 'Quicksand', sans-serif;
        } 
    </style>

    <?php 
             $server="localhost";
             $username="root";
             $password="kiran2001";
             $con=mysqli_connect($server,$username,$password,"vibe");
             $max=105;
             $min=1;
    ?>

    <title>Document</title>
</head>
<body>
    

   


    <!-- type1 -->

                    <div class='type'>
                        <h4>
                            Recommendations
                        </h4>
                        <a>more</a>
                    </div>
                    <div class='songs'>
                        <h1 style="text-align : center;">
                            To See Recommendations please Listen to some songs
                        </h1>
                    </div>
    <!-- type2 -->
                    <div class='type'>
                        <h4>
                            GENRES
                        </h4>
                       
                    </div>
                    <div class='songs'>
                        <?php

                        

                            $var=6;
                            $genres=array("Hip hop","Devotional","Melody","Love","Sad","Rap","Romance");
                            $random_img="../songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            $more_term="telugu";
                            while($var!=0)
                            {
                                echo"
                                <div class='song'  style='background-image:url($random_img);'>
                                    <div class='song-img'>
                              
                                    </div>
                                    <div class='controls'>
                                    <div class='play-btn'>
                                        <img src='innerimages/play_circle_outline_black_24dp.svg'></img>
                                    </div>
                                    <div class='palaylist-btn'>
                                    <img src='innerimages/more_vert_black_24dp.svg'></img>
                                    </div>
                                    
                                </div>
                                    <div class='song-desc'>
                                    "
                                    .$genres[$var]."
                                    </div>
                                </div>
                                ";
                                $var-=1;
                                $random_img="../songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            }
                        ?>
                    </div>
    <!-- type3 --> 
                    <div class='type'>
                        <h4>
                            Devotional
                        </h4>
                        <a>more</a>
                    </div>
                    <div class='songs'>
                        <?php
                       

                            $q="SELECT * FROM `all_songs` WHERE `song_genre` LIKE '%devotional%';";
                            $result=mysqli_query($con,$q);
                            $row=mysqli_fetch_array($result);
                            $var=6;
                            // $random_img="C:/xamppreal/htdocs/vibe/songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            $random=mt_rand($min,$max);
                            $random_img="../songs/songimages/".(string)$random.".jpg";
                            $random_img1="songs/songimages/".(string)$random.".jpg";
                            $songpath="";
                            while($var!=0)
                            {
                                $songpath=$row['song_path'];
                                $song_artist = $row['song_artist'];
                                $song_name = $row['song_name'];
                                //$fun="assign("."'".$songpath."'".","."'".$random_img."'".")";
                                $fun = '"' . "assign('$songpath','$random_img1','$song_name','$song_artist','top100')" . '"';
                                echo "
                                <div class='song'   style='background-image:url($random_img);'>
                                    <div class='song-img'>
                                        
                                    </div>
                                    <div class='controls'>

                                    <div class='play-btn' onclick=$fun>
                                    <img src='innerimages/play_circle_outline_black_24dp.svg'></img>
                                    </div>
                                    <div class='palaylist-btn'>
                                    <img src='innerimages/more_vert_black_24dp.svg'></img>
                                    </div>                                  
                                </div>
                                    <div class='song-desc'>
                                    "
                                    .$row['song_name']."
                                    </div>
                                </div>
                                ";
                                $var-=1;
                                $row=mysqli_fetch_array($result);
                                $random=mt_rand($min,$max);
                                $random_img="../songs/songimages/".(string)$random.".jpg";
                                $random_img1="songs/songimages/".(string)$random.".jpg";
                            }
                        ?>
                    </div>
    <!-- type4 --> 
                    <div class='type'>
                        <h4>
                            Sad Songs
                        </h4>
                        <a>more</a>
                    </div>
                    <div class='songs'>
                        <?php

                            $q="SELECT * FROM `all_songs` WHERE `song_genre` LIKE '%sad%';";
                            $result=mysqli_query($con,$q);
                            $row=mysqli_fetch_array($result);
                            $var=6;
                            // $random_img="C:/xamppreal/htdocs/vibe/songs/songimages/".(string)mt_rand($min,$max).".jpg";
                            $random=mt_rand($min,$max);
                            $random_img="../songs/songimages/".(string)$random.".jpg";
                            $random_img1="songs/songimages/".(string)$random.".jpg";
                            $songpath="";
                            while($var!=0)
                            {
                                $songpath=$row['song_path'];
                                $song_artist = $row['song_artist'];
                                $song_name = $row['song_name'];
                                //$fun="assign("."'".$songpath."'".","."'".$random_img."'".")";
                                $fun = '"' . "assign('$songpath','$random_img1','$song_name','$song_artist','top100')" . '"';
                                echo "
                                <div class='song'   style='background-image:url($random_img);'>
                                    <div class='song-img'>
                                        
                                    </div>
                                    <div class='controls'>

                                    <div class='play-btn' onclick=$fun>
                                    <img src='innerimages/play_circle_outline_black_24dp.svg'></img>
                                    </div>
                                    <div class='palaylist-btn'>
                                    <img src='innerimages/more_vert_black_24dp.svg'></img>
                                    </div>                                  
                                </div>
                                    <div class='song-desc'>
                                    "
                                    .$row['song_name']."
                                    </div>
                                </div>
                                ";
                                $var-=1;
                                $row=mysqli_fetch_array($result);
                                $random=mt_rand($min,$max);
                                $random_img="../songs/songimages/".(string)$random.".jpg";
                                $random_img1="songs/songimages/".(string)$random.".jpg";
                            }
                        ?>
                    </div>
    <!-- type2 -->
     

     <script>
   localStorage.setItem("song_name","");
        localStorage.setItem("song_path","");
        localStorage.setItem("song_img","");
        localStorage.setItem("song_artist","");
        localStorage.setItem("key","");
        function assign(song_path,img,song_name,song_artist,key){
            localStorage.setItem("key",key);
            localStorage.setItem("song_path",song_path);
            localStorage.setItem("song_name",song_name);
            localStorage.setItem("song_img",img);
            localStorage.setItem("song_artist",song_artist);
        }

     </script>

</body>
</html>