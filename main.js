var song_imgs_hash= [];
var song_songs = ["songs/Imagine-Dragons-Thunder.mp3"]
var song_img = document.getElementById("song-img");
var img_ptr = 0,l = song_imgs_hash.length;
var song = document.getElementById("cur-song");
var icon = document.getElementById("play-pause");
var timer = document.getElementById("timer");
var fav_tog = 0,favorit = document.getElementById("favorit");

function play_pause(){
    if(song.paused){
        song.play();
        icon.innerHTML = "<use href='#icon-pause' />";
    }
    else{
        song.pause();
        icon.innerHTML = "<use href='#icon-play' />";
    }
}
function fav(){
    if(fav_tog == 0){
        favorit.innerHTML = "<use href='#icon-heart-o' fill='red'/>";
        fav_tog = 1;
    }
    else{
        favorit.innerHTML = "<use href='#icon-heart-o' fill='white'/>";
        fav_tog = 0;
    }
}
function play_prev(){
    img_ptr = (img_ptr - 1);
    if(img_ptr<0) img_ptr = l - 1;
    song_img.src = song_imgs_hash[img_ptr];
    song.src = song_songs[img_ptr];
    if(!song.paused) song.pause();
    timer.value = "0";
    play_pause();
}
function play_next(){
    img_ptr = (img_ptr + 1)%l;
    song_img.src = song_imgs_hash[img_ptr];
    song.src = song_songs[img_ptr];
    if(!song.paused) song.pause();
    timer.value = "0";
    play_pause();
}
function adj_vol(){
    var val = document.getElementById("vol").value;
    var mute_img = document.getElementById("volume");
    if(val == 0){
        mute_img.src = "Music Player Icons/2x/volume_off_black_24dp.svg";
    }
    else{
        mute_img.src = "Music Player Icons/2x/volume_up_black_24dp.svg";
    }
    song.volume = val/100;
}
function mute(){
    var val = document.getElementById("vol");
    var mute_img = document.getElementById("volume");
    if(val.value != 0){
        val.value = 0;
        mute_img.src = "Music Player Icons/2x/volume_off_black_24dp.svg";
        adj_vol();
    }
    else{
        mute_img.src = "Music Player Icons/2x/volume_up_black_24dp.svg";
        val.value = 50;
        adj_vol();
    }
}
function adj_timer(){
    song.currentTime = song.duration*(timer.value/100);
}



