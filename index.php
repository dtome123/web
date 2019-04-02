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
   


</head>

<body>

    <?php
        include "header.php"
     ?> 


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
                <div class="col-6 col-md-3 col-sm-3 " style=>
                <div class="card" >
                    <img src="images/1.jpg" class="" style="width:175x"  alt="...">
                    <div class="card-body" style="height:10em">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-sm-3 " style=>
                <div class="card" >
                    <img src="images/1.jpg" class="" style="width:175x"  alt="...">
                    <div class="card-body" style="height:10em">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-sm-3 " style=>
                <div class="card" >
                    <img src="images/1.jpg" class="" style="width:175x"  alt="...">
                    <div class="card-body" style="height:10em">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
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
     <script src="plugin-frameworks/jquery-3.2.1.min.js "></script>
    <script src="plugin-frameworks/bootstrap.min.js "></script>
    <script src="common/scripts.js "></script>

   


</body>

</html>