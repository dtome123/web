<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
    <link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./plugin-frameworks/swiper.css" rel="stylesheet">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <link href="common/styles.css" rel="stylesheet">
    <script src="plugin-frameworks/jquery.js "></script>
    <script src="plugin-frameworks/bootstrap.js "></script>
    <script src="common/scripts.js "></script>
    <script src="js/jquery.number.js"></script>
    <script src="js/cart.js"></script>
    

    <link rel="stylesheet" href="./css/style_xacnhan.css">
</head>

<body>
    <?php include "header.php" ?>

    <main class="container-fluid">
        <div class="nav container " id="head" style="margin-top:200px">
            <li class="nav-item">

                Xác nhận đơn hàng
            </li>
        </div>
        <div class="row">
            <div class="col-md-1">&nbsp;</div>

            <div class="col-md-7">
                <table style="" class=" table-striped ">

                    <thead>
                        <td class="hinh">
                            &nbsp;
                        </td>
                        <td class="ten_sp ten_sp2">
                            Tên sản phẩm
                        </td>
                        <td class="sluong sluong2">
                            Số lượng
                        </td>
                        <td class="gia gia2">
                            Đơn giá
                        </td>
                        <td >
                            Thành tiền
                        </td>


                    </thead>
                    <tbody>
                        <?php 
                   require "condb/DataProvider.php";
                   
                   
                   foreach ($_SESSION['cart'] as $key => $value) {
                       $item[]=$key;
                   }
                   $str=implode(",",$item);
                   $sql="SELECT* FROM sanpham WHERE MaSP in ($str)"; 
                   $result=DataProvider::executeQuery($sql);
                   while($row=mysqli_fetch_array($result)){
                   ?>
                        <tr data-id="<?php echo $row["MaSP"];?>">
                            <td class="hinh">
                                <img class="hinh" src="images/sanpham/<?php echo $row["Hinh"] ?>">
                            </td>
                            <td class="ten_sp ten_sp2">
                                <?php echo $row["TenSP"] ?>
                            </td>
                            <td class="sluong sluong2">

                                <input type="text" value="<?php echo $_SESSION['cart'][$row['MaSP']] ?>" class="so"
                                    disabled>

                            </td>
                            <td class="gia gia2" idGia="<?php echo $row['MaSP'];?>" gia="<?php echo $row["Gia"] ?>">
                                <?php echo number_format($row["Gia"],0,",",".") ?>
                            </td>
                            <td data="<?php echo $row['MaSP'];?>" class="ttien ttien2"
                                thanhtien="<?php echo $row["Gia"]*$_SESSION['cart'][$row['MaSP']] ?>">
                                <?php echo number_format($row["Gia"]*$_SESSION['cart'][$row['MaSP']],0,",",".") ;?>
                            </td>


                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>

            <div class="col-md-4 border" style="margin-top:50px">
                <div>
                <div>
                    Tổng thành tiền :
                    <span id="tongtien">

                    </span>
                    <span>VNĐ</span>
                </div>
                <div>
                    <span>
                        Phí giao hàng: <span id="charge"> 0</span> VNĐ
                    </span>
                </div>
                <div>
                    <hr>
                    Tổng cộng:
                    <span id="total">

                    </span>
                    VNĐ
                </div>
                </div>
                <hr>
                <div class="border">Thông tin người mua</div>
                <form method="get" action="">
                    <div>
                        aaaa
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>