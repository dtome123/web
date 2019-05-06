<?php session_start() ;
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

    <link href="plugin-frameworks/bootstrap.css" rel="stylesheet">
    <link href="./plugin-frameworks/swiper.css" rel="stylesheet">
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

    <main class="container position-relative" style="">
        <div class="nav " id="head">
            <li class="nav-item">
            <?php 
                if(isset($_GET['tim'])){
                    echo 'Kết quả tìm kiếm của  " '.$_GET['tim'].' "';
                }
                else{
                    require "condb/DataProvider.php";
                    $sql="SELECT * from theloai where MaTheLoai='".$_GET["theloai"];
                    $sql.="'";
                    $re=DataProvider::executeQuery($sql);
                    $row=mysqli_fetch_array($re);
                    echo $row['TenTL'];
                }
            ?>
                
            </li>
        </div>
        <form action="">
            <div class="nav loc" id="menu_mini">
                
                    <span style="font-size:25px;font-family:lobster"> <i> Lọc</i> <img src="images/sys/loc.png" style="height:20px;width:15px" alt=""></span>
                   
                    <div class="loc-div" >
                        <select name="theloai" id="" class="form-control">
                            <option  value="all"selected class="dis" >Tất cả</option>
                            <option  value="MC">Chiến thuật</option>
                            <option  value="AN">Giải trí/nhóm</option>
                            <option  value="GT">Trẻ em</option>
                            <option  value="GD">Gia đình</option>
                        </select>
                        
                    </div>
                    <div class="loc-div" >
                       
                        <select name="order" id="" class="form-control">
                            <option  value="0" selected class="dis">Theo giá-Tình trạng</option>
                            <option  value="1">Mới nhất</option>
                            <option  value="2">Cũ nhất</option>
                            <option  value="3">Từ thấp - cao</option>
                            <option  value="4">Từ cao - thấp</option>
                        </select>
                    </div>
                    <input type="submit"  class="btn-primary loc-sub" value="Lọc ">
                

        </form>
        <div>
            <form class="src-form src-form2" action="sanpham.php">
                <input type="text" placeholder="Search here" name="tim">
                <input type="text" name="theloai" value="all" style="display:none" placeholder="Search here">
                <button type="submit" class="border " style="height:30px;width:30px"><i class="ion-search  " style="font-size:20px" ></i></button>
            </form>
        </div>

        </div>
        
        <div class="row show">



        </div>




    </main>


    <?php
        include "footer.html"
    ?>
    <!-- SCIPTS -->
   

    <!--Zoom effect-->
    <!-- <div class="view overlay zoom">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
    <div class="mask flex-center">
        <p class="white-text">Zoom effect</p>
    </div>
</div>
    </div> -->



    <script>
    /* $(document).ready(function () {
    alert('<?php echo $_SESSION['page'] ?>');
    $.get("show.php", {
        theloai: "<?php echo $_GET['theloai'] ?>",
        page:<?php echo $_SESSION['page'] ?> 
    }, function(data) {
        $(".show").html(data);
    })
}); */
    $("#nhan").click(function() {
        $("#xem").text("<?php echo $_SESSION['page'] ?>");

    });
    
    $(".choose,.loc-sub").click(function() {
        $.get("xuli/repage.php", {
            re: 1
        });

    });
    $(document).ready(function() {
        $.get("show.php", {
            theloai: "<?php echo $_GET['theloai'] ?>",
            page: <?php echo $_SESSION['page'] ?>,
            order: <?php if(isset($_GET['order'])) echo $_GET['order']; else echo 0; ?>
            <?php if(isset($_GET['tim']))
                    echo ",tim:'".$_GET['tim']."'"
             ?>
        }, function(data) {
            $(".show").html(data);
        })
        /* window.scrollTo('top', 1000) */

        var bottom = 800;
        $("HTML, BODY").animate({
            scrollTop: bottom
        }, "smooth");        
 
    });
    </script>


</body>

</html>