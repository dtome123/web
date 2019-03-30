<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Quite Light</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./plugin-frameworks/swiper.min.css" rel="stylesheet">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <link href="common/styles.css" rel="stylesheet">
    <script src="plugin-frameworks/jquery-3.2.1.min.js "></script>
    <script src="plugin-frameworks/bootstrap.min.js "></script>
    <script src="common/scripts.js "></script>



</head>

<body>

    <header>
        <a class="logo" href="#"><img src="images/logo-white.png" alt="Logo"></a>
        <div style="height: 70px;border: 1px solid #aaa">
            <div style="font-size: .9em;margin-top: 20px;margin-right: 0px">
                aaaaa
            </div>
            <a class="menu-nav-icon" data-menu="#main-menu" href="#" style="float: right; margin-right: 10px"><i class="ion-navicon"></i></a>
        </div>
        <div class="right-area">
            <form class="src-form">
                <button type="submit"><i class="ion-search"></i></a></button>
                <input type="text" placeholder="Search here">
            </form>
            <!-- src-form -->
        </div>
        <!-- right-area -->



        <ul class="main-menu" id="main-menu" style="float: left;">
            <li><a href="index.html">Home</a></li>
            <li class="drop-down"><a href="#!">Sport<i class="ion-arrow-down-b"></i></a>
                <ul class="drop-down-menu drop-down-inner">
                    <li><a href="#">PAGE 1</a></li>
                    <li><a href="#">PAGE 2</a></li>
                </ul>
            </li>
            <li><a href="#">Travel</a></li>
            <li><a href="#">Beauty</a></li>
            <li><a href="#">Music</a></li>
            <li><a href="#">Art</a></li>
            <li><a href="#">Fashion</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <div class="clearfix"></div>

    </header>


    <div class="slider-main h-800x h-sm-auto pos-relative pt-95 pb-25">
        <div class="img-bg bg-1 bg-layer-4"></div>
        <?php 
            include "slide.php";
        ?>

        </div>
    </div>
    <!-- slider-main -->

    <main class="container-fluid " style="margin-top: 20px ">
        <div class="container ">
            <div class="row ">
                <!-- San phẩm -->
                <div class="col-6 col-sm-4 col-md-3 mb-30 ">
                    <div class="card h-100 min-h-350x">
                        <div class="bg-white h-100">

                            <!-- SETTING IMAGE WITH bg-10 -->
                            <div class="h-50 "></div>

                            <div class="plr-25 ptb-15 h-50">
                                <div class="dplay-tbl">
                                    <div class="dplay-tbl-cell">

                                        <h5 class="color-ash"><b>ART</b></h5>
                                        <h4 class="mtb-10">
                                            <a href="#"><b>I Got off Addrall and Xanax Using Psilocybon</b></a></h4>

                                        <ul class="list-li-mr-10 color-lt-black">
                                            <li><i class="mr-5 font-12 ion-android-favorite-outline"></i>15</li>
                                            <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>105</li>
                                        </ul>

                                    </div>
                                    <!-- dplay-tbl-cell -->
                                </div>
                                <!-- dplay-tbl -->
                            </div>
                            <!-- plr-25 ptb-15 -->
                        </div>
                        <!-- hot-news -->
                    </div>
                </div>

            </div>
        </div>
    </main>

   <?php
        include "footer.html"
    ?>
    <!-- SCIPTS -->
    <script>
    </script>
   


</body>

</html>