<?php
 session_start();
 require "condb/DataProvider.php"
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>BG</title>
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
    <style>
    .label {
        display: inline-block;
        font-size: 1.2em;
        font-weight: bold;
        width: 180px;
        padding: 6px;
        color: #464646;
    }

    .textInput {
        display: inline-block;
        padding: 8px;
        padding-right: 30px;
        width: 240px;


        background-position: 110% center;
        background-repeat: no-repeat;
        border: 1px solid #ccc;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
        transition: all 0.3s linear;
    }

    .birthday {
        display: inline-block;
        padding: 8px;
        width: 100px;
        color: #898989;
        background-color: #f0f0f0;
        background-position: 110% center;
        background-repeat: no-repeat;
        border: 1px solid #ccc;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
        transition: all 0.3s linear;
    }

    .sex {
        font-size: 1.2em;
        font-weight: bold;
        color: #464646;
    }

    #btn {
        width: 30%;
        border: none;
        margin-top: 5px;
        color: white;
        background-color: #3b5998;
        border-radius: 5px;
        padding: 12px;
    }

    #main2 {
        margin-top: 300px;
        background-image: url(./images/sys/khung.jpg);
    }

    @media only screen and (max-width: 600px) {
        #main2 {
            margin-top: 300px;
            background-image: none;
        }
    }
    </style>
    <script src="plugin-frameworks/jquery.js "></script>
    <?php

// Xử lý đăng nhập
		if(isset($_POST['login'])){
            
			
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$sql="SELECT * FROM `khachhang` WHERE TenDN='$username'";
            $query=DataProvider::executeQuery($sql);
            echo $sql;
			// Lay mat khau trong database ra
			$row = mysqli_fetch_array($query);
			if((mysqli_num_rows($query)==0 && $password != $row['Pass']) || (mysqli_num_rows($query)==0 && $password == $row['Pass']) ){
                echo "<script>
                $(document).ready(function(){

                    alert('Tên đăng nhập này không tồn tại.')
                })
                </script>";
			}
				// So sánh 2 mat khau có trùng không				
				if (mysqli_num_rows($query)==1 &&$password != $row['Pass']) {
                    echo "<script>
                    $(document).ready(function(){
                        alert('Mật khẩu không chính xác.')
                        
                    })
                    </script>";
    }			
			if(mysqli_num_rows($query)==1 &&$password == $row['Pass']){
				setcookie('username',$_POST['username'],time()+10000);
				$_SESSION['iduser']=$row['MaKH'];
                echo "<script>
                    $(document).ready(function(){
                        alert('Bạn đã đăng nhập thành công')
                        history.go(-2);
                    })
                </script>";
	        }
		}
?>
</head>

<body>

    <?php
        include "header.php"
    ?>
    <?php if(!isLogined()) {?>
    <main class="container-fluid" id="main2" style="">

        <div style="" class="container">
            <form method="POST" onsubmit="return Validate()" name="vform" action='login.php'>
                <div align="center">
                    <h2 style="font-family:crimson_text;color:  rgb(56, 56, 248)">Đăng Nhập Tài Khoản</h2>
                </div>
                <br>
                <div id="username_div" align="center">
                    <label class="label">Tên tài khoản</label>
                    <input type="text" name="username" class="textInput ">
                    <div id="username_error" style=" color:red"></div>
                </div>
                <br>
                <div id="password_div" align="center">
                    <label class="label">Mật khẩu</label>
                    <input type="password" name="password" class="textInput">
                    <div id="password_error" style=" color:red"></div>
                    <hr style="width:50%">
                </div>
                <br>



                <div align="center">
                    <input type="submit" name="login" value="Đăng Nhập" id="btn" class="textInput">
                </div>
                <div align="center">
                    <p>Bạn chưa có tài khoản ?<a href="register.php" style="text-decoration: none"> Đăng ký</a></p>
                </div>
            </form>
        </div>

        <div id="loi" style="margin-top:50px; margin-left:80px ; font-size:24px ; color:red"></div>
    </main>

    </div>
    </div>
    <?php   include "footer.html" ?>
    <?php } 
        else{
            echo "<script>
            $(document).ready(function(){
                history.back();
            })
        </script>";
        }
    ?>
</body>
<script>
var username = document.forms['vform']['username'];
var password = document.forms['vform']['password'];

var username_error = document.getElementById('username_error');
var password_error = document.getElementById('password_error');

function Validate() {
    if (username.value == "") {
        username_error.textContent = "Tên tài khoản không được để trống";
        username.focus();
        return false;
    } else {
        username_error.textContent = "";
    }
    if (password.value == "") {
        password_error.textContent = "Password không được để trống";
        password.focus();
        return false;
    } else {
        password_error.textContent = "";
    }

}
</script>

</html>