<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>BG</title>
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
        width: 100%;
        border: none;
        margin-top: 5px;
        color: white;
        background-color: #3b5998;
        border-radius: 5px;
        padding: 12px;
    }
    </style>
    <script src="plugin-frameworks/jquery.js "></script>
</head>

<body style="width:700px; height:500px ;margin-left:420px; margin-top:80px">

    <div style="width:500px; height:100%">
        <form method="POST" onsubmit="return Validate()" name="vform" action='login.php'>
            <div align="center">
                <h1>Đăng Nhập Tài Khoản</h1>
            </div>
            <br>
            <div id="username_div">
                <label class="label">Tên tài khoản</label>
                <input type="text" name="username" class="textInput">
                <div id="username_error" style="margin-left:200px; color:red"></div>
            </div>
            <br>
            <div id="password_div">
                <label class="label">Mật khẩu</label>
                <input type="password" name="password" class="textInput">
                <div id="password_error" style="margin-left:200px; color:red"></div>
            </div>
            <br>
            <div>
                <hr>
            </div>
            <div>
                <input type="submit" name="login" value="Đăng Nhập" id="btn" class="textInput">
            </div>
            <div style="margin-left:100px">
                <p>Bạn chưa có tài khoản ?<a href="register.php" style="text-decoration: none"> Đăng ký</a></p>
            </div>
        </form>
	<div id="loi" style="margin-top:50px; margin-left:80px ; font-size:24px ; color:red">
<?php
// Xử lý đăng nhập
		if(isset($_POST['login'])){
            require "condb/DataProvider.php";
			
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$sql="SELECT * FROM `khachhang` WHERE TenDN='$username'";
			$query=DataProvider::executeQuery($sql);
			// Lay mat khau trong database ra
			$row = mysqli_fetch_array($query);
			if((mysqli_num_rows($query)==0 && $password != $row['Pass']) || (mysqli_num_rows($query)==0 && $password == $row['Pass']) ){
				echo "Tên đăng nhập này không tồn tại.";
			}
				// So sánh 2 mat khau có trùng không				
				if (mysqli_num_rows($query)==1 &&$password != $row['Pass']) {
        echo "Mật khẩu của bạn không đúng.";
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
?></div>
    </div>
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