<!DOCTYPE html>
<html>

<head>
    <title>Quite Light</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link href="./plugin-frameworks/swiper.css" rel="stylesheet">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <link href="common/styles.css" rel="stylesheet">
    <script src="plugin-frameworks/jquery.js "></script>
    <script src="plugin-frameworks/bootstrap.js "></script>
    <script src="common/scripts.js "></script>
    <style>
    /* #acc {
        border-radius: 50%;
        width: 2.5em;
        height: 2.5em;
        margin-right: 70px;
        margin-top: 10px;
    }

    .sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        padding: 0px;
    }
    .bienmat:hover {
    border-radius: 50%;
    background-color: rgb(216, 51, 51);
    animation: height 1s infinite alternate;
    transition-property: animation, border-radius;
    transition-duration: 1s;
} */
/* @keyframes background-color{
from{background-color:slategray}
to{background-color:black}}
#background-color { animation: background-color 1s infinite alternate;background-color:slategray}
@keyframes background-position{
from{background-position:0 0}
to{background-position:100% 100%}}
#background-position { animation: background-position 1s infinite alternate;background-position:0 0}
@keyframes background-position-2{
from{background-position:3px 0, 3px 0, 15px -150px, 15px -150px}
to{background-position:3px -70px, 3px -70px, 15px -80px, 15px -80px}}
#background-position\/2 { animation: background-position-2 1s infinite alternate;background-position:3px 0, 3px 0, 15px -150px, 15px -150px}
@keyframes background-size{
from{background-size:5px 5px}
to{background-size:150px 150px}}
#background-size { animation: background-size 1s infinite alternate;background-size:5px 5px}
@keyframes border-radius{
from{border-radius:0}
to{border-radius:50%}}
#border-radius { animation: border-radius 1s infinite alternate;border-radius:0}
@keyframes border-radius-2{
from{border-radius:0 100%}
to{border-radius:100% 0}}
#border-radius\/2 { animation: border-radius-2 1s infinite alternate;border-radius:0 100%}
@keyframes border-width{
from{border-width:0}
to{border-width:75px}}
#border-width { animation: border-width 1s infinite alternate;border-width:0}
@keyframes border-width-2{
from{border-width:0}
to{border-width:35px}}
#border-width\/2 { animation: border-width-2 1s infinite alternate;border-width:0}
@keyframes border-width-3{
from{border-width:0}
to{border-width:75px}}
#border-width\/3 { animation: border-width-3 1s infinite alternate;border-width:0}
@keyframes box-shadow{
from{box-shadow:0 0 black}
to{box-shadow:0 150px 10px -50px rgba(0,0,0,.5)}}
#box-shadow { animation: box-shadow 1s infinite alternate;box-shadow:0 0 black}
@keyframes box-shadow-2{
from{box-shadow:none}
to{box-shadow:inset -75px -75px 400px #000}}
#box-shadow\/2 { animation: box-shadow-2 1s infinite alternate;box-shadow:none}
@keyframes box-shadow-3{
from{box-shadow:inset 0 0 75px 75px slategray, 0 0 0 slategray}
to{box-shadow:inset 0 0 35px 35px transparent, 0 0 75px 50px transparent}}
#box-shadow\/3 { animation: box-shadow-3 1s infinite alternate;box-shadow:inset 0 0 75px 75px slategray, 0 0 0 slategray}
@keyframes color{
from{color:white}
to{color:black}}
#color { animation: color 1s infinite alternate;color:white}
@keyframes font-size{
from{font-size:60px}
to{font-size:300px}}
#font-size { animation: font-size 1s infinite alternate;font-size:60px}
@keyframes height{
from{height:150px}
to{height:0}}
#height { animation: height 1s infinite alternate;height:150px}
@keyframes letter-spacing{
from{letter-spacing:0}
to{letter-spacing:100px}}
#letter-spacing { animation: letter-spacing 1s infinite alternate;letter-spacing:0}
@keyframes line-height{
from{line-height:10px}
to{line-height:300px}}
#line-height { animation: line-height 1s infinite alternate;line-height:10px}
@keyframes opacity{
from{opacity:1}
to{opacity:0}}
#opacity { animation: opacity 1s infinite alternate;opacity:1}
@keyframes outline-width{
from{outline-width:0}
to{outline-width:100px}}
#outline-width { animation: outline-width 1s infinite alternate;outline-width:0}
@keyframes outline-offset{
from{outline-offset:-5px}
to{outline-offset:30px}}
#outline-offset { animation: outline-offset 1s infinite alternate;outline-offset:-5px}
@keyframes outline-color{
from{outline-color:transparent}
to{outline-color:red}}
#outline-color { animation: outline-color 1s infinite alternate;outline-color:transparent}
@keyframes padding{
from{padding:0}
to{padding:50px 200px 50px 50px}}
#padding { animation: padding 1s infinite alternate;padding:0}
@keyframes text-indent{
from{text-indent:0}
to{text-indent:100px}}
#text-indent { animation: text-indent 1s infinite alternate;text-indent:0}
@keyframes text-shadow{
from{text-shadow:0 0 black}
to{text-shadow:20px 20px 10px rgba(0,0,0,.5)}}
#text-shadow { animation: text-shadow 1s infinite alternate;text-shadow:0 0 black}
@keyframes text-shadow-2{
from{text-shadow:0 0 0 white}
to{text-shadow:0 0 10px white}}
#text-shadow\/2 { animation: text-shadow-2 1s infinite alternate;text-shadow:0 0 0 white}
@keyframes text-shadow-3{
from{text-shadow:0 0 white}
to{text-shadow:0 0 rgba(255,255,255,0), -45px -45px 0 red, -30px -30px 0 orange, -15px -15px 0 yellow, 0 0 0 green, 15px 15px 0 blue, 30px 30px 0 indigo, 45px 45px 0 violet}}
#text-shadow\/3 { animation: text-shadow-3 1s infinite alternate;text-shadow:0 0 white}
@keyframes top{
from{top:0}
to{top:100px}}
#top { animation: top 1s infinite alternate;top:0}
@keyframes transform{
from{transform:rotate(0deg)}
to{transform:rotate(360deg)}}
#transform { animation: transform 1s infinite alternate;transform:rotate(0deg)}
@keyframes transform-2{
from{transform:scale(1)}
to{transform:scale(2)}}
#transform\/2 { animation: transform-2 1s infinite alternate;transform:scale(1)}
@keyframes transform-3{
from{transform:skewX(0deg)}
to{transform:skewX(180deg)}}
#transform\/3 { animation: transform-3 1s infinite alternate;transform:skewX(0deg)}
@keyframes transform-4{
from{transform:rotate(0deg) scale(1)}
to{transform:rotate(360deg) scale(0)}}
#transform\/4 { animation: transform-4 1s infinite alternate;transform:rotate(0deg) scale(1)}
@keyframes transform-5{
from{transform:perspective(400px) rotateY(0deg)}
to{transform:perspective(400px) rotateY(360deg)}}
#transform\/5 { animation: transform-5 1s infinite alternate;transform:perspective(400px) rotateY(0deg)}
@keyframes transform-6{
from{transform:perspective(400px) rotateX(0deg)}
to{transform:perspective(400px) rotateX(360deg)}}
#transform\/6 { animation: transform-6 1s infinite alternate;transform:perspective(400px) rotateX(0deg)}
@keyframes transform-7{
from{transform:perspective(400px) rotateY(0deg)}
to{transform:perspective(400px) translateZ(150px) rotateY(180deg)}}
#transform\/7 { animation: transform-7 1s infinite alternate;transform:perspective(400px) rotateY(0deg)}
@keyframes transform-8{
from{transform:perspective(400px) translate3d(0,0,0) rotateX(0) rotateY(0) rotateZ(0)}
to{transform:perspective(400px) translate3d(0,0,-5000px) rotateX(720deg) rotateY(360deg) rotateZ(-360deg)}}
#transform\/8 { animation: transform-8 1s infinite alternate;transform:perspective(400px) translate3d(0,0,0) rotateX(0) rotateY(0) rotateZ(0)}
@keyframes transform-9{
from{transform:perspective(400px) rotate3d(1,1,0,0deg)}
to{transform:perspective(400px) rotate3d(1,1,0,180deg)}}
#transform\/9 { animation: transform-9 1s infinite alternate;transform:perspective(400px) rotate3d(1,1,0,0deg)}
@keyframes transform-10{
from{transform:perspective(400px) rotate3d(0,1,0,0deg)}
to{transform:perspective(400px) rotate3d(0,1,0,-180deg)}}
#transform\/10 { animation: transform-10 1s infinite alternate;transform:perspective(400px) rotate3d(0,1,0,0deg)}
@keyframes transform-origin{
from{transform-origin:50% 50%}
to{transform-origin:0 100%}}
#transform-origin { animation: transform-origin 1s infinite alternate;transform-origin:50% 50%}
@keyframes width{
from{width:150px}
to{width:330px}}
#width { animation: width 1s infinite alternate;width:150px} */
.box:hover {
    
    background-color: red;
   
}
@media only screen and (max-width: 992px){
header {
    font-size: 1em;
}
header {
    font-size: 1.1em;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 1000;
    font-weight: 600;
    color: #fff;
}}
    </style>

</head>

<body>

<header>
    <div class="img-bg bg-1 bg-layer-4"></div>
    <a class="logo" href="#"><img src="images/logo-white.png" alt="Logo"></a>
    <div style="height: 4.6em;border: 1px solid #aaa">
        
        <span style="float:right"><img src="images/sys/acc.jpg" id="acc" alt=""></span>
        <span style="float:right"><a href="cart.php"><img src="images/sys/cart.png" id="acc" alt=""></a></span>
        <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
    </div>
    <div class="right-area">
        <form class="src-form" action="test.php">
            <button type="submit"><i class="ion-search"></i></a></button>
            <input type="text" name="tim" placeholder="Search here">
        </form>
        <!-- src-form -->
    </div>
    <!-- right-area -->
        
    <ul class="main-menu" id="main-menu" style="float: left;">
        <li><a href="index.php">Home</a></li>
        <li><a href="#" class="menu_item">Chiến thuật</a></li>
        <li><a href="#" class="menu_item">Giải trí/nhóm</a></li>
        <li><a href="#" class="menu_item">Trẻ em</a></li>
        <li><a href="#" class="menu_item">Gia đình</a></li>
    </ul> 
    <script>
    $('.menu_item').click(function () { 
       $.get("xuli/repage.php",{re:1}); 
       
    });
    $(document).ready(function() {
        var l = $(".menu_item").length;
        var theloai = new Array("MC", "AN", "TM", "DU")
        var i = 0;
        $(".menu_item").each(function() {
            $(this).attr("href", "sanpham.php?theloai=" + theloai[i]);
            i++;
        });
    });
    
    
    </script>
    <script src="common/scripts.js"></script>
    <div class="clearfix"></div>

</header>

    
    <main class="container-fluid " style="margin-top: 200px ;">
        
        <div class="container ">
            <div class="row ">
                <!-- San phẩm -->
                
                <div><?php echo $_GET['tim'] ?></div>
                <?php include "show.php" ?>
            </div>
        </div>
    </main>
    
    

</body>

</html>
<!-- <?php 
    /* $hostURL  = $_SERVER['HTTP_HOST'];
	$dirURL   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extraURL = 'index.php';
	$strURL = "http://" . $hostURL . $dirURL . "/" . $extraURL;
	//echo($strURL);
	header("Location:$strURL");
	exit; */
?> -->