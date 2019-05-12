<?php 
session_start();
$_SESSION['page']=1;
require "condb/DataProvider.php"
?>
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
    <link href="./plugin-frameworks/swiper.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slide.css">
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

    header .acc li.drop-down a.mouseover+ul.drop-down-menu {
        display: block;
        animation: full-opacity-anim .2s forwards;

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

        <div class="container-fluid group">
            <?php include 'groupsp.php' ?>
        </div>
        <div class="nav position-sticky container" id="head" style="margin-top:10px">
            <li class="nav-item">
                Mới nhất
            </li>
            <span style="margin-left:70px;margin-top:15px"><a href="sanpham.php?theloai=all&order=1"
                    style="color:blue;font-size:20px"><i><u style="font-weight:500">Xem thêm</u> </i> </a></span>
        </div>
        <div class="row container" style="margin:auto">
            <?php
                
                $sql="SELECT * From sanpham order by MaSP DESC limit 12";
                $result=DataProvider::executeQuery($sql);
                while($row=mysqli_fetch_array($result)){
                    $row["Gia"]=number_format($row['Gia'],0,",",".");
                    echo '<!-- Card -->
                    <div class="card col-6 col-sm-4 col-md-3 view overlay zoom hoverable"  style="margin-bottom:15px">
                    
                    <!-- Card image -->
                    <a href="chitiet.php?id='.$row["MaSP"].'">
                    <div class="view overlay">
                    <img class="card-img-top" src="images/sanpham/'.$row['Hinh'].'" alt="Card image cap" style="margin-top:20px;height:170px">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>
                
                    <!-- Card content -->
                    <div class="card-body" style="margin-top:-5px ; font-size:1em">
                
                    <!-- Title -->
                    <h4 class="card-title" data-toggle="tooltip" title="'.$row['TenSP'].'" data-placement="top">'.$row['TenSP'].'</h4>
                    <!-- Text -->
                    <p class="card-text gia" >Giá: '.$row['Gia'].' VNĐ</p>
                    <!-- Button -->
                    <button class="btn btn-primary blue-gradient them" number="'.$row['MaSP'].'" style="font-size:0.95em" >Thêm vào giỏ </button>
                
                    </div>
                    </a>
                    
                    </div>
                    <!-- Card -->';
                }
             ?>
        </div>
    </main>
    <?php
        include "footer.html"
    ?>
    <!-- SCIPTS -->
    <script>
    $(".them").click(function() {
        var masp = $(this).attr("number");
        $.post('xuli/tontaitronggio.php', {
            id: masp
        }, function(data) {
            if (data == 1) {

                var r = confirm("Sản phẩm đã có trong giỏ bạn có muốn thêm số lượng")
                if (r == true) {
                    $.post('xuli/xuligiohang.php', {
                        id: masp,
                        xuat: 1
                    }, function(data) {
                        $("#sl").text(data);
                    });
                    alert("Đã tăng số lượng");
                }
            } else {
                $.post('xuli/xuligiohang.php', {
                    id: masp,
                    xuat: 1
                }, function(data) {
                    $("#sl").text(data);
                });
                alert("Đã thêm vào giỏ");
            }

        })

        /* alert($(this).attr("number")); */
    });
    </script>





</body>

</html>