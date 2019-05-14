<?php 
  require "condb/DataProvider.php";
  require "common.php";
  
?>
<?php if(isset($_SESSION['cart'])) {?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BG Kingdom</title>
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
    <script src="plugin-frameworks/popper.js"></script>
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

    #empty {
        background-color: rgb(229, 241, 241);
        height: 200px;
        margin-bottom: 50px;

        padding-top: 50px
    }

    #empty h3 {
        color: rgb(153, 95, 9);
        font-weight: bold
    }

    #empty button {
        color: rgb(10, 104, 104);
    }

    #empty button:hover {
        color: blue
    }
    </style>

    <link rel="stylesheet" href="./css/style_xacnhan.css">
</head>

<body >
    <?php include "header.php" ?>
    <?php if(isLogined()){ ?>
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
                  /*  require "condb/DataProvider.php"; */
                   
                   
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
                        <b style="color:red">Tạm tính :</b>
                        <span id="tongtien">

                        </span>
                        <span>VNĐ</span>
                    </div>
                    <div>
                        <span>
                            <b style="color:red">Phí giao hàng:</b> <span id="charge"> 0</span> VNĐ
                        </span>
                    </div>
                    <div>
                        <hr>
                        <b style="color:red">Tổng cộng:</b>
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
                        <?php $sql="SELECT * from khachhang where MaKH=".$_SESSION['iduser'];
                              $result=DataProvider::executeQuery($sql);
                              $row=mysqli_fetch_array($result);
                         ?>
                            <td class="muc" style="color:blue">
                                Tên khách hàng
                            </td>
                            <td>
                                <input type="text" class="form-control" disabled value="<?php echo $row['TenKH']  ?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="muc" style="color:blue">
                                Số điện thoại
                            </td>
                            <td>
                                <input type="text" class="form-control" disabled value="<?php echo $row['SoDT']  ?>" >
                            </td>
                        </tr>
                        <tr>
                            <td class="muc" style="color:blue">
                                Địa chỉ giao hàng

                            </td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <textarea name="txtDC" id="txtDC" cols="30" rows="5" disabled
                                    class="form-control" ><?php echo $row['DiaChi']  ?></textarea>
                            </td>
                        </tr>
                        <tr style="margin-top:50px">

                            <td class="muc" style="color:blue">
                                Hình thức thanh toán
                            </td>

                        </tr>


                        <tr>

                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="exampleRadios1" value="option1" name="xn"
                                        checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Thanh toán khi giao hàng
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="exampleRadios2" value="option2" name="xn">
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

                                <input type="button" value="Đặt mua" class="btn btn-success" id="sub"
                                    style="width:150px">
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
    if ($(this).val() == 1){

        $("#txtDC").removeAttr("disabled");
        $("#txtDC").text("");
    }
    else{
        $("#txtDC").text("<?php echo $row['DiaChi'] ?>");
        $("#txtDC").attr("disabled", "disabled");
    }

});

$(document).ready(function() {
    $("#sub").click(function() {
        var a = tongtien();
        $.post("xuli/updonhang.php", {
            tt: a
        }, function(data) {
            alert("Đơn hàng đã gửi thành công");
            $('main').html(data);
        })

    })
});
</script>

</html>
<?php }
         else{
            echo "<script>
            $(document).ready(function(){
                history.back();
            })
        </script>";
        }
            
?>
<?php }
else {
    $hostURL  = $_SERVER['HTTP_HOST'];
    $dirURL   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extraURL = 'cart.php';
    $strURL = "http://" . $hostURL . $dirURL . "/" . $extraURL;
    echo($strURL);
    header("Location:$strURL");
}
?>