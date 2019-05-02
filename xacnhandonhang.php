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
    <link href="css/xacnhancart.css" rel="stylesheet">
    <script src="plugin-frameworks/jquery.js "></script>
    <script src="plugin-frameworks/bootstrap.js "></script>
    <script src="common/scripts.js "></script>
    <script src="js/jquery.number.js"></script>
    <script src="js/cart.js"></script>
    <style>
    .title span {
        font-size: 2em;
        font-family: baloo;
        color: rgb(166, 170, 207);
    }

    span {
        display: inline-block;
    }
    </style>

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


            <div class="col-md-6">
                <table style="" class=" table-striped container-fluid">

                    <thead>
                        <td colspan="2">
                            <div class="title container">
                                <span>Đơn hàng</span>
                            </div>
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

            <div class="col-md-6 border" style="margin-top:50px">
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
                <div class="border" id="title">Thông tin người mua</div>
                <form method="get" action="">
                    <table>
                        <tr>
                            <td class="muc">
                                Tên khách hàng
                            </td>
                            <td>
                                <input type="text" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="muc">
                                Số điện thoại
                            </td>
                            <td>
                                <input type="text" class="form-control" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="muc">
                                Địa chỉ giao hàng

                            </td>
                            <td>
                                <select name="diachi" id="diachi" class="form-control">
                                    <option value="0">Địa chỉ đăng kí</option>
                                    <option value="1">Địa chỉ khác</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <textarea name="txtDC" id="txtDC" cols="30" rows="5" disabled
                                    class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr style="margin-top:50px">

                            <td class="muc">
                                Hình thức thanh toán
                            </td>

                        </tr>


                        <tr>

                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" 
                                        id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Thanh toán khi giao hàng
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" 
                                        id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Thanh toán bằng thẻ ATM/Internet Banking
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                                <input type="button" value="Đặt mua" class="btn btn-success" id="sub" style="width:150px">
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
    </main>
</body>
<script>
$("#diachi").change(function() {
    if ($(this).val() == 1)
        $("#txtDC").removeAttr("disabled");
    else
        $("#txtDC").attr("disabled", "disabled");

});
$("#sub").click(function () {
    var a=$("#total").text();
    

    $.post("xuli/updonhang.php",{tt:10000},function(data){
        alert(data)
    })
})
</script>

</html>