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
    <title>BG Kingdom</title>
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
        padding: 20px
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

    tr {
        text-align: center;
    }
    </style>
</head>

<body style="background-color: rgb(235, 229, 229)">
    <?php include "header.php" ?>

    <div class="container" style="margin-top:200px;margin-bottom:200px">



        <div class="row">
            <div class="col-md-3">
                <div class="list-group ">
                    <a href="#" class="list-group-item list-group-item-action" style="background-color:yellow">
                        Menu
                    </a>
                    <a href="xemtaikhoan.php" class="list-group-item list-group-item-action menu">Thông tin tài
                        khoản</a>
                    <a href="xemhoadon.php" class="list-group-item list-group-item-action menu active">Thông tin đơn hàng</a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="content" class="container-fluid">
                    <?php
                        $id=$_GET['id'];
                        $id=str_replace("'","",$id);
?>
                    <h1 style="text-align:center;font-family:taviraj;font-weight:bold;color:green">Chi tiết đơn hàng</h1>
                    <br>
                    <table style="font-size:20px; margin-bottom:10px" width="800px" border="1" align="center" class="table table-bordered">
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>Đơn Giá</th> 
                            <th>Thành Tiền</th>
                        </tr>
                        <?php
			$sql1="SELECT sp.TenSP,ct.SoLuong,ct.DonGia, ct.SoLuong*ct.DonGia AS 'ThanhTien' FROM hoadon hd , chitiethoadon ct  , sanpham sp where hd.MaHD='$id' AND hd.MaHD=ct.MaHD AND sp.MaSP = ct.MaSP";
						$query=DataProvider::executeQuery($sql1);
			$i = 1;
				while($row = mysqli_fetch_array($query)){ ?>
                    
                     <tr>
                     
        			 <td><?php echo $row['TenSP'] ?></a></td>
            		 <td><?php echo $row['SoLuong'] ?></td>
            		 <td><?php echo $row['DonGia'] ?></td>
                     <td><?php echo $row['ThanhTien'] ?></td>
                     
                     </tr>
                    
			
		<?php $i++; }
        ?>
                    </table>
                </div>
            </div>
        </div>




    </div>

    <?php include "footer.html" ?>


</body>

</html>
<?php }
else{
$hostURL  = $_SERVER['HTTP_HOST'];
$dirURL   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extraURL = 'index.php';
$strURL = "http://" . $hostURL . $dirURL . "/" . $extraURL;
echo($strURL);
header("Location:$strURL");
}

 ?>