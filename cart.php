<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./plugin-frameworks/swiper.css" rel="stylesheet">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <link href="common/styles.css" rel="stylesheet">
    <script src="plugin-frameworks/jquery.js "></script>
    <script src="plugin-frameworks/popper.js"></script>
    <script src="plugin-frameworks/bootstrap.js "></script>
    <script src="common/scripts.js "></script>

    <link rel="stylesheet" href="./css/style_cart.css">
    <script src="js/jquery.number.js"></script>
    <script src="js/cart.js"></script>
    
</head>

<body>
    <?php 
        include "header.php"
    ?>
    <div class="container">

        <div class="title container" style="margin-top:200px">
            <span>Giỏ hàng</span>
        </div>
        <!-- <form method="get" action="cart.php"> -->
    </div>
    <main style="margin-top:10px">
        <?php if(isset($_SESSION['cart'])){ ?>
        <table style="margin:auto;" class=" table-bordered container">

            <thead>
                <td class="hinh">
                    &nbsp;
                </td>
                <td class="ten_sp">
                    Tên sản phẩm
                </td>
                <td class="sluong">
                    Số lượng
                </td>
                <td class="gia">
                    Đơn giá (VNĐ)
                </td>
                <td>
                    Thành tiền (VNĐ)
                </td>
                <td class="xoa">
                    Xóa
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
                    <td class="ten_sp">
                        <?php echo $row["TenSP"] ?>
                    </td>
                    <td class="sluong" style="width:10%">
                        <div style="margin-left: 10px;">
                            <input type="button" value="-"
                                onclick="tru('<?php echo $row['MaSP'];?>','<?php echo $row['Gia'];?>')"
                                >
                            <input type="text" value="<?php echo $_SESSION['cart'][$row['MaSP']] ?>" class="so"
                                name="<?php echo $row['MaSP'];?>" onkeydown="return in_so(event)"
                                onkeyup="i2('<?php echo $row['MaSP'];?>','<?php echo $row['Gia'];?>')">
                            <input type="button" value="+"
                                onclick="cong('<?php echo $row['MaSP'];?>','<?php echo $row['Gia'];?>')"
                                >
                        </div>
                    </td>
                    <td class="gia" idGia="<?php echo $row['MaSP'];?>" gia="<?php echo $row["Gia"] ?>">
                        <?php echo number_format($row["Gia"],0,",",".") ?>
                    </td>
                    <td data="<?php echo $row['MaSP'];?>" class="ttien"
                        thanhtien="<?php $_SESSION['gia'][$row['MaSP']]=$row['Gia'];  echo $row["Gia"]*$_SESSION['cart'][$row['MaSP']] ?>">
                        <?php echo number_format($row["Gia"]*$_SESSION['cart'][$row['MaSP']],0,",",".") ;?>
                    </td>
                    <td align="center">
                        <button idXoa="<?php echo $row['MaSP'];?>" class="xoa" >
                            Xóa
                        </button>
                    </td>

                </tr>
                <?php } ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        <div class="container">
            <div class="row ">
                <div class="col-sm-4 thanhtien">
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
                    <div><button class="btn btn-primary" id="xn"> Mua ngay</button></div>
                </div>
            </div>

            <?php }
        else {
            echo '<div id="empty" class="container">
            <h3>
                Không có sản phẩm nào trong giỏ hàng 
            </h3>
            <button id="back"> Quay lại trang trước </button>
        </div>';
        } ?>
        </div>

    </main>

    <!--  </form> -->
    <?php include 'footer.html' ;?>
    <script>
      <?php if(isLogined()){ ?>
        $("#xn").click(function () { 
            var r=confirm("Bạn xác nhận mua hàng");
            if(r==true)
                window.location="xacnhandonhang.php";
        });
      <?php }
      else { ?>
        $("#xn").click(function () { 
            alert("Bạn phải đăng nhập mới được mua hàng")
        });
      <?php }
      ?>
    </script>
</body>


</html>