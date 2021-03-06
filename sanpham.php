<?php /* session_start() ; */
 require "condb/DataProvider.php";
 require "common.php";
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>BG Kingdom</title>
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
                $all="";
                $n=-1;
                if(isset($_GET['theloai'])){
                    $_GET['theloai']=str_replace("'","",$_GET['theloai']);
                }
                if(isset($_GET['tim'])){
                    $_GET['tim']=str_replace("'","",$_GET['tim']);
                }   

                if(isset($_GET['tim'])){
                    
                    echo 'Kết quả tìm kiếm của  " '.$_GET['tim'].' "';
                }
                else{
                    
                    $sql="SELECT * from theloai where MaTheLoai='".$_GET["theloai"];
                    $sql.="'";
                    $re=DataProvider::executeQuery($sql);
                    $row=mysqli_fetch_array($re);
                    $n=mysqli_num_rows($re);
                    if($n>0 || $_GET['theloai']=='all'){
                        if($_GET['theloai']!='all'){    
                            echo $row['TenTL'];
                        }
                        else
                            echo "Tất cả thể loại";
                            $all="all";
                    }
                    
                    
                }
            ?>

            </li>
        </div>
        <?php if($n>0 || $all=='all' ) {?>
        <form action="">
            <div class="nav loc" id="menu_mini">

                <span style="font-size:25px;font-family:lobster"> <i> Lọc</i> <img src="images/sys/loc.png"
                        style="height:20px;width:15px" alt=""></span>

                <div class="loc-div">
                    <select name="theloai" id="" class="form-control">
                        <option value="all" selected class="dis">Tất cả</option>
                        <option value="CT">Chiến thuật</option>
                        <option value="GT">Giải trí/nhóm</option>
                        <option value="TE">Trẻ em</option>
                        <option value="GD">Gia đình</option>
                    </select>

                </div>
                <div class="loc-div">

                    <select name="order" id="" class="form-control">
                        <option value="0" selected class="dis">Theo giá-Tình trạng</option>
                        <option value="1">Mới nhất</option>
                        <option value="2">Cũ nhất</option>
                        <option value="3">Từ thấp - cao</option>
                        <option value="4">Từ cao - thấp</option>
                    </select>
                </div>
                <input type="submit" class="btn-primary loc-sub" value="Lọc ">


        </form>
        <div>
            <form class="src-form src-form2" action="sanpham.php">
                <input type="text" placeholder="Search here" name="tim">
                <input type="text" name="theloai" value="all" style="display:none" placeholder="Search here">
                <button type="submit" class="border " style="height:30px;width:30px"><i class="ion-search  "
                        style="font-size:20px"></i></button>
            </form>
        </div>

        </div>

        <div>
            
            <div class="row show">
           
            </div>
        </div>



        <?php }
         else {
            echo '<div id="empty" class="container" style="margin-top:100px">
                    <h3>
                        Không tìm thấy
                    </h3>
                </div>';} ?>
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