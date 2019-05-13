<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thông tin tài khoản</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        background-color: white;
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

        background-color: white;
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
	a{
		text-decoration:none;	
	}
	th{
	padding:20px
}
    </style>
    <script src="plugin-frameworks/jquery.js"></script>
 </head>
<body>
<?php
  					require "condb/DataProvider.php";
					if(isset($_COOKIE['username']))
					{
						$tendn=$_COOKIE['username'];
						$sql="SELECT * FROM `khachhang` where TenDN='$tendn'";
						$query=DataProvider::executeQuery($sql);
						$row = mysqli_fetch_array($query);
						$username=$row["TenDN"];
						$email=$row["Email"];
						$sex=$row["GioiTinh"];
						$number=$row["SoDT"];
						$birth=$row["NgaySinh"];
						$address=$row["DiaChi"];
						$id=$row["MaKH"];
						
					}
				?>
<h1 style="text-align:center; color:blue">Xin chào <?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']?></h1>
    <table width="100%">
    <tr>
    <th style="font-size:24px;color:red"><a href="thongtintaikhoan.php">Thông tin tài khoản</a></th>
    <th style="font-size:24px"><a href="donhangcuatoi.php">Đơn hàng của tôi</a></th>
    </tr>
    </table>
    <div style="width:500px; margin-left:400px">
        <form method="POST" onsubmit="return Validate()" name="vform" action="xulythongtintaikhoan.php">
            <div align="center">
                <h1>Thông Tin Tài Khoản</h1>
            </div>
            <br>
            <div>
            <input type="hidden" name="id" id="id"  class="textInput form-control" value="<?php echo $id; ?>">
            </div>
            <div id="username_div2">
                <label class="label">Tên đăng nhập</label>
                <input type="text" name="username" id="username" class="textInput form-control" value="<?php echo $username; ?>">
                <div id="name_error" style="margin-left:200px; color:red"></div>
            </div>
            <br>
            <div id="email_div">
                <label class="label">Email</label>
                <input type="email" id="email" name="email" class="textInput form-control" value="<?php echo $email; ?>">
                <div id="email_error" style="margin-left:200px; color:red"></div>
            </div>
            <br>
            <!-- <div id="password_div">
                <label class="label">Mật Khẩu</label>
                <input type="password" name="password" class="textInput form-control" value="<?php echo $password; ?>">
            </div>
            <br>
            <div id="pass_confirm_div">
                <label class="label">Nhập Lại Mật Khẩu</label>
                <input type="password" name="password_confirm" class="textInput form-control">
                <div id="password_error" style="margin-left:200px"></div>
            </div>
            <br> -->
            <div id="number_div">
                <label class="label">Điện Thoại</label>
                <input type="text" name="number" class="textInput form-control" value="<?php echo $number; ?>">
                <div id="number_error" style="margin-left:200px"></div>
            </div>
            <br>
            <div id="birth_div">
                <label class="label">Ngày Sinh</label>
                <input type="date" id="date" class="birthday" style="width: 262px" name="birth" value="<?php echo $birth; ?>">
                <div id="birth_error" style="margin-left:200px"></div>
            </div>
            <br>
            <div>
                <label class="label">Giới Tính</label>
                <label class="sex">Nam</label><input type="radio" name="sex" value="Nam" <?php if($sex=='Nam') echo 'checked' ?>/>&emsp;<label
                    class="sex">Nữ</label><input type="radio" name="sex" value="Nu" <?php if($sex=='Nu') echo 'checked' ?>/>
            </div>
            <br>
            <div>
                <label class="label" style="vertical-align: top;">Địa chỉ</label>
                <textarea name="diachi" id="" cols="30" rows="10" class="textInput form-control" required><?php echo $address; ?></textarea>
            </div>
            <br>
            <div>
                <hr>
            </div>
            <div>
                <input type="submit" name="update" value="Cập nhật" id="btn" class="textInput">
            </div>
        </form>
    </div>
</body>

</html>
<script>
// SELECTING ALL TEXT ELEMENTS
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
var number = document.forms['vform']['number'];
var birth = document.forms['vform']['birth'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var number_error = document.getElementById('number_error');
var birth_error = document.getElementById('birth_error');

// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
number.addEventListener('blur', numberVerify, true);
birth.addEventListener('blur', birthVerify, true);
// validation function

function Validate() {
    // validate username
    var patt1 = /[a-zA-Z0-9]/
    if (username.value == "") {
        username.style.border = "1px solid red";
        document.getElementById('username_div').style.color = "red";
        name_error.textContent = "Tên không được bỏ trống";
        username.focus();
        return false;
    }
    // validate username
    if (patt1.test(username.value) == false) {
        username.style.border = "1px solid red";
        document.getElementById('username_div').style.color = "red";
        name_error.textContent = "Tên không sử dụng ký tự đặt biệt";
        username.focus();
        return false;
    }

    var patt2 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9])+\.)+([a-zA-Z0-9]{2,4})+$/
    if (email.value == "") {
        email.style.border = "1px solid red";
        document.getElementById('email_div').style.color = "red";
        email_error.textContent = "Email không được để trống";
        email.focus();
        return false;
    }
    // validate username
    if (patt2.test(email.value) == false) {
        email.style.border = "1px solid red";
        document.getElementById('email_div').style.color = "red";
        email_error.textContent = "Email viết sai cú pháp";
        email.focus();
        return false;
    }

    if (password.value == "") {
        password.style.border = "1px solid red";
        document.getElementById('pass_confirm_div').style.color = "red";
        password_confirm.style.border = "1px solid red";
        password_error.textContent = "Password không được để trống";
        password.focus();
        return false;
    }
    // check if the two passwords match
    if (password.value != password_confirm.value) {
        password.style.border = "1px solid red";
        document.getElementById('pass_confirm_div').style.color = "red";
        password_confirm.style.border = "1px solid red";
        password_error.innerHTML = "Mật khẩu nhập lại không khớp";
        password_confirm.focus();
        return false;
    }
    // validate number
    var patt = /^0[0-9]{9}/
    if (number.value == "") {
        number.style.border = "1px solid red";
        document.getElementById('number_div').style.color = "red";
        number_error.textContent = "Số điện thoại không được để trống";
        number.focus();
        return false;
    }

    if (patt.test(number.value) == false) {
        number.style.border = "1px solid red";
        document.getElementById('number_div').style.color = "red";
        number_error.textContent = "Số điện thoại không hợp lệ";
        number.focus();
        return false;
    }

    if (birth.value == "") {
        birth.style.border = "1px solid red";
        document.getElementById('birth_div').style.color = "red";
        birth_error.textContent = "Ngày sinh không được để trống";
        birth.focus();
        return false;
    }
}
// event handler functions
function nameVerify() {
    if (username.value != "") {
        username.style.border = "1px solid #5e6e66";
        document.getElementById('username_div').style.color = "#5e6e66";
        name_error.innerHTML = "";
        return true;
    }
}

function emailVerify() {
    if (email.value != "") {
        email.style.border = "1px solid #5e6e66";
        document.getElementById('email_div').style.color = "#5e6e66";
        email_error.innerHTML = "";
        return true;
    }
}

function passwordVerify() {
    if (password.value != "") {
        password.style.border = "1px solid #5e6e66";
        document.getElementById('pass_confirm_div').style.color = "#5e6e66";
        document.getElementById('password_div').style.color = "#5e6e66";
        password_error.innerHTML = "";
        return true;
    }
    if (password.value === password_confirm.value) {
        password.style.border = "1px solid #5e6e66";
        document.getElementById('pass_confirm_div').style.color = "#5e6e66";
        password_error.innerHTML = "";
        return true;
    }
}

function numberVerify() {
    if (patt.test(number.value) == true) {
        number.style.border = "1px solid #5e6e66";
        document.getElementById('number_div').style.color = "#5e6e66";
        number_error.innerHTML = "";
        return true;
    }
}

function birthVerify() {
    if (birth.value != "") {
        birth.style.border = "1px solid #5e6e66";
        document.getElementById('birth_div').style.color = "#5e6e66";
        birth_error.innerHTML = "";
        return true;
    }
}
</script>