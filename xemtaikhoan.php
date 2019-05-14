<?php
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
        height: 700px;
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
                    <a href="xemtaikhoan.php" class="list-group-item list-group-item-action menu active">Thông tin tài
                        khoản</a>
                    <a href="xemhoadon.php" class="list-group-item list-group-item-action menu">Thông tin đơn hàng</a>
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
                        <p style="font-size:22px;font-family: font-family: play !important"><b>Họ và tên :</b>
                            <?php echo $row['TenKH'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important"><b>Tên tài khoản :</b>
                            <?php echo $row['TenDN'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important"><b>Email :</b>
                            <?php echo $row['Email'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important"><b>Ngày sinh :</b>
                            <?php echo date('d/m/Y',strtotime($row['NgaySinh']))  ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important"><b>Giới tính :</b>
                            <?php if($row['GioiTinh']=='Nu') $row['GioiTinh']="Nữ" ;echo $row['GioiTinh']  ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important"><b>Số điện thoại :</b>
                            <?php echo $row['SoDT'] ?></p>
                        <p style="font-size:22px;font-family: font-family: play !important"><b>Địa chỉ :</b>
                            <?php echo $row['DiaChi'] ?></p>

                        <a href="capnhattaikhoan.php"><button class="btn btn-primary"
                                style="width:150px">Sửa</button></a>
                    </div>
                    <hr>
                    <div style="margin-left:20px">
                        <button class="btn" style="background-color:rgb(157, 157, 241)" id="nhan">Đổi mật khẩu</button>
                    </div>
                    <div class="container-fluid" style="margin-top:20px;margin-left:20px;display:none" id="suapass" >
                    <form action="xuli/doipass.php" method="post">
                        <div class="form-group row">
                            <label for="oldPassword" class="col-sm-2 col-form-label">Mật khẩu cũ</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="oldPassword" placeholder="Password" style="width:50%" name="passOld" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Password1" class="col-sm-2 col-form-label">Mật khẩu mới</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password1" placeholder="Password" style="width:50%" name="pass1"  required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Password2" class="col-sm-2 col-form-label">Nhập lại</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password2" placeholder="Password" style="width:50%" name="pass2" required>
                            </div>
                        </div>
                        <input type="submit" value="Cập nhật" class="btn " style="background-color:rgb(111, 235, 111)" id="submitpass" >
                    </form>
                    </div>
                </div>
            </div>



        <script>
            $("#nhan").click(function () { 
                $("#suapass").toggle();
            });
            $('#submitpass').click(function () {
                var p1=$('#password1').val();
                var p2=$('#password2').val();
                if(p1.length<6){
                    alert("Mật khẩu mới phải có ít nhất 6 kí tự")
                    return false;
                }
                if(p1!=p2){
                    alert("Mật khẩu nhập lại không đúng")
                    $('#password2').focus();
                    return false;
                }
                var patt=/[']/;
                if(patt.test(p1))
                {
                    alert('Không được có kí tự " '+ "'"+' "' );
                    $('#password1').focus();
                    return false;
                }
                var r=confirm("Bạn chắc chắn muốn đổi mật khẩu")
                if(r==false)
                    return false
                return true;
            })
        </script>
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