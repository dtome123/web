<?php session_start() ;
$_SESSION['page']=1;?>
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
    <link rel="stylesheet" href="plugin-frameworks/swiper.css">
    <link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <link href="common/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="plugin-frameworks/jquery.js "></script>
    <script src="plugin-frameworks/popper.js"></script>
    <script src="plugin-frameworks/bootstrap.bundle.js"></script>
    <script src="plugin-frameworks/bootstrap.js "></script>
    <script src="common/scripts.js "></script>

    
    <style>
    .sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        /*  padding: 5px;
            background-color: #cae8ca;
            border: 2px solid #4CAF50; */
    }
    </style>


</head>

<body>

    <?php
        include "header.php"
    ?>

    <div class="slider-main h-800x h-sm-auto pos-relative pt-95 pb-25">
        <!-- <div class="img-bg bg-1 bg-layer-4"></div> -->
        <?php 
            include "slide.php";
        ?>
    </div>
    </div>
    <!-- slider-main -->

    <main class="container-fluid " style="">
        <div class="nav position-sticky container" id="head">
            <li class="nav-item">
                Nổi bật nhất
            </li>
        </div>

      <div class="container-fluid group" >
        <?php include 'groupsp.php' ?>
      </div>
        <div class="nav position-sticky container" id="head" style="margin-top:10px">
            <li class="nav-item">
                Mua nhiều nhất
            </li>
            <span style="margin-left:70px;margin-top:15px"><a href="sanpham.php?theloai=all" style="color:blue;font-size:20px"><i><u style="font-weight:500">Xem thêm</u> </i> </a></span>
        </div>
        <div>
            
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