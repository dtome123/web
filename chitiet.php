<?php session_start() ;?>
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
    <link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <link href="common/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/fonts.css">
    <script src="plugin-frameworks/jquery.js"></script>
    <script src="plugin-frameworks/bootstrap.js"></script>
    <script src="common/scripts.js"></script>

    <style>
   
    </style>
    <script src="js/jquery.number.js"></script>
    <script src="js/cart.js"></script>
</head>
<?php
    require "condb/DataProvider.php";
    if(isset($_GET["id"])){
        $sql="SELECT * From sanpham where MaSP='".$_GET['id']."'";
        $result=DataProvider::executeQuery($sql);
        $row=mysqli_fetch_array($result);
    }
 ?>

<body style="background-color:none">

    <?php 
        include "header.php"
    ?>

    <!-- slider-main -->
    <section class="bg-1-white ptb-0">
        <div class="container" style="margin-top:150px">
            <div class="row">

                <div class="col-md-12 col-lg-9 ptb-50  pr-md-15">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6" style="margin-bottom:20px">
                            <img src="images/sanpham/<?php echo $row["Hinh"] ?>" alt="" style="width:100%;heigth:100%;">
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 border" style="height:100%;border-width:3px !important; border-style:dotted !important">
                            <div id="name" style="font-family:taviraj;font-size: 40px;">
                                <?php echo $row["TenSP"] ?>
                            </div>
                            <div>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">Số người chơi: <?php echo $row['SoNguoiChoi'] ?></li>
                                <li class="list-group-item">Độ tuổi: <?php echo $row['Tuoi'] ?> </li>

                                <li class="list-group-item soluong" >Số lượng:
                                <input type="button" value="-" onclick="tru('<?php echo $row['MaSP'];?>')" style="height: 30px; border: none;width: 20px">
                                    <input type="text" id="soluong"value="<?php if(isset($_SESSION['cart'][$row['MaSP']])){echo $_SESSION['cart'][$row['MaSP']];} else echo 1; ?>"   class="so" name="<?php echo $row['MaSP'];?>" onkeydown="return in_so(event)" onkeyup="i2()">
                                    <input type="button" value="+" onclick="cong('<?php echo $row['MaSP'];?>')" style="height: 30px;width: 20px; border: none">
                                    <span id="detail">
                                        <?php 
                                            if(isset($_SESSION['cart'][$row['MaSP']])){ 
                                                echo '(Đã có trong giỏ hàng)';
                                            }
                                        ?>
                                    </span>
                                </li>
                                <li class="list-group-item">
                                    Giá: <span
                                        id="gia"><?php echo $row["Gia"]=number_format($row["Gia"],0,",",".") ;?> VNĐ
                                    </span>
                                </li>
                            </ul>
                            <button class="btn btn-primary buy them " number="<?php echo $row['MaSP'] ?>" >
                                Thêm vào giỏ 
                            </button>
                        </div>
                    </div>
                    <!-----------------Noi dung chi tiet----------->

                    <div id="chitiet">
                        <div>
                            <hr>
                            <p>Chi tiết</p>
                            
                        </div>
                        <?php echo $row['MoTa'] ?>
                    </div>

                    <!-----------------comment----------->
                    <div class="brdr-grey-1 mt-50 mt-sm-20"></div>


                    <h4 class="mb-30 mt-20 clearfix"><b>Bình luận</b></h4>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                            <form class="form-block form-h-55 form-plr-20 form-bg-white">
                                <div class="row">

                                    <div class="col-sm-12 mb-30">
                                        <textarea class="ptb-20 min-h-200x" placeholder="Comment"></textarea>
                                    </div><!-- col-sm-12-->

                                </div><!-- row-->
                                <button class="btn-b-lg btn-brdr-grey plr-25 color-ash" type="submit"><b>Đăng bình
                                        luận</b></button>

                            </form>
                        </div><!-- col-sm-6-->
                    </div><!-- row-->







                </div><!-- col-sm-9 -->


            </div><!-- row -->
        </div><!-- container -->
    </section>


    <?php 
        include "footer.html"
    ?>

    <!-- SCIPTS -->


<script>
    
    $(".them").click(function () { 
        alert('Đã thêm thành công');
        $("#detail").text("(Đã có trong giỏ hàng)"); 
        
        

    });

</script>

</body>

</html>