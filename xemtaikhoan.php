<?php

$_SESSION['page']=1;
require "condb/DataProvider.php";
require "common.php";
if(isLogined()){
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <script>

    </script>
    <style>
    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        background-color: yellow;
        padding: 50px;
        font-size: 20px;
    }

    header {
        margin: 0px 0px 10px;
    }

    #logo {
        max-width: 100px;
    }

    .list-group {
        max-width: 100%;
    }

    .navbar {
        border: 1px solid rgb(243, 109, 61);
    }

    #content {
        background-color: white;
        height: 600px;
    }

    #footer {
        height: 150px;
        margin-top: 15px;
        border-top: 1px solid rgb(243, 109, 61);
        background-color: rgb(240, 193, 106);
    }

    #acount {
        margin-right: 50px
    }

    .navbar-nav {
        width: 200px;
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125) !important;
    }
    </style>
</head>

<body style="background-color: rgb(235, 229, 229)">
    <?php include "header.php" ?>

    <div class="container" style="margin-top:200px">



        <div class="row">
            <div class="col-md-3">
                <div class="list-group ">
                    <a href="#" class="list-group-item list-group-item-action" style="background-color:yellow">
                        Menu
                    </a>
                    <a href="" class="list-group-item list-group-item-action menu">Thông tin tài khoản</a>
                    <a href="" class="list-group-item list-group-item-action menu">Thông tin đơn hàng</a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="content">
                    <?php
                        $tendn=$_COOKIE['username'];
                        $sql="SELECT * FROM `khachhang` where TenDN='$tendn'";
                        $result=DataProvider::executeQuery($sql);
                        $row=mysqli_fetch_array($result);
                    ?>
                    <h2 style="font-family:play;margin-left:5px;color:green;">Thông tin tài khoản</h2>
                    <div style="margin-left:20px">
                        <p style="font-size:22px;font-family: font-family: play !important" ><b>Họ và tên :</b> <?php echo $row['TenKH'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important" ><b>Họ tài khoản :</b> <?php echo $row['TenDN'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important" ><b>Email :</b> <?php echo $row['Email'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important" ><b>Ngay sinh :</b> <?php echo $row['NgaySinh'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important" ><b>Giới tính :</b> <?php if($row['GioiTinh']=='Nu') $row['GioiTinh']="Nữ" ;echo $row['GioiTinh']  ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important" ><b>Số điện thoại :</b> <?php echo $row['SoDT'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important" ><b>Địa chỉ :</b> <?php echo $row['DiaChi'] ?></p>
                        <a href="capnhattaikhoan.php" ><button  class="btn btn-primary">Sửa</button></a>
                    </div>
                </div>
            </div>




        </div>

        <div class="container-fluid" id="footer">

        </div>


</body>

</html>
<?php } ?>
