<?php 
/* session_start(); */
require "condb/DataProvider.php";
require "common.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form validation with JavaScript</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    .label {
        display: inline-block;
        font-size: 1.2em;
        font-weight: bold;
        width: 200px;
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
        width: 80%;
        border: none;
        margin-top: 5px;

        color: white;
        background-color: #3b5998;
        border-radius: 5px;
        padding: 12px;
    }

    #divcon {
        margin-left: 250px
    }

    @media only screen and (max-width: 600px) {
        #divcon {
            margin-left: 50px
        }

        #divsex {
            margin-left: -60px
        }
    }
    #main2 {
        margin-top: 300px;
       /*  background-image: url(./images/sys/res.jpg); */
    }

    </style>
    <script src="plugin-frameworks/jquery.js"></script>
</head>

<body style="">

    <?php
        include "header.php"
    ?>
    <main class="container-fluid" id="main2" >
        <div class="container">
        
            <form method="POST" onsubmit="return Validate()" name="vform" action="xulydangky.php">
                <div align="center">
                    <h2 style="font-family:crimson_text;color:  rgb(56, 56, 248)">Đăng Ký Tài Khoản</h2>
                </div>
                <br>
                <div style="" id="divcon">
                    <div id="username_div">
                        <label class="label">Họ Tên</label>
                        <input type="text" name="username" id="username" class="textInput form-control">
                        <div id="name_error" style="margin-left:200px; color:red"></div>
                    </div>
                    <br>
                    <div id="username_div2">
                        <label class="label" >Tên đăng nhập</label>
                        <input type="text" name="username2" id="username2" class="textInput form-control" placeholder="Ít nhất 5 kí tự">
                        <div id="name_error2" style="margin-left:200px; color:red"></div>
                    </div>
                    <br>
                    <div id="email_div">
                        <label class="label">Email</label>
                        <input type="email" id="email" name="email" class="textInput form-control">
                        <div id="email_error" style="margin-left:200px; color:red"></div>
                    </div>
                    <br>
                    <div id="password_div">
                		<label class="label">Mật Khẩu</label>
                		<input type="password" name="password" class="textInput form-control" placeholder="Ít nhất 6 kí tự">
                		<div id="password_error" style="margin-left:200px"></div>
            		</div>
            		<br>
            		<div id="password_confirm_div">
                		<label class="label">Nhập Lại Mật Khẩu</label>
                		<input type="password" name="password_confirm" class="textInput form-control">
                		<div id="password_confirm_error" style="margin-left:200px"></div>
            		</div>
                    <br>
                    <div id="number_div">
                        <label class="label">Điện Thoại</label>
                        <input type="text" name="number" class="textInput form-control">
                        <div id="number_error" style="margin-left:200px"></div>
                    </div>
                    <br>
                    <div id="birth_div">
                        <label class="label">Ngày Sinh</label>
                        <input type="date" id="date" class="birthday" style="width: 262px" name="birth">
                        <div id="birth_error" style="margin-left:200px"></div>
                    </div>
                    <br>
                    <div>
                        <label class="label">Giới Tính</label>
                        <span id="divsex">
                            <label class="sex">Nam</label><input type="radio" name="sex" value="Nam"
                                checked />&emsp;<label class="sex">Nữ</label><input type="radio" name="sex"
                                value="Nu" />
                        </span>
                    </div>
                    <br>
                    <div>
                        <label class="label" style="vertical-align: top;">Địa chỉ</label>
                        <textarea name="diachi" id="" cols="10" rows="3" class="textInput form-control" required ></textarea>
                    </div>
                    <br>
                    
                </div>
                <div>
                <div>
                        <hr>
                    </div>
                    <div style="margin:auto;width:400px">
                        <input type="submit" id="sub" value="Đăng kí" class="btn btn-primary" style="width:100%" >
                        
                    </div>
                    <div style="margin:auto;width:400px">
                        <p>Bạn đã có tài khoản? <a href="login.php" style="text-decoration: none;color:blue"> Đăng nhập</a></p>
                    </div>
                </div>

                
            </form>
        </div>
    </main>
    <?php
        include "footer.html"
    ?>
</body>

</html>
<script>
// SELECTING ALL TEXT ELEMENTS
var username = document.forms['vform']['username'];
var username2 = document.forms['vform']['username2'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
var number = document.forms['vform']['number'];
var birth = document.forms['vform']['birth'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var password_confirm_error = document.getElementById('password_confirm_error');
var number_error = document.getElementById('number_error');
var birth_error = document.getElementById('birth_error');

// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
username2.addEventListener('blur', nameVerify2, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
password_confirm.addEventListener('blur', password_confirmVerify, true);
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

    if (username2.value == "") {
        username2.style.border = "1px solid red";
        document.getElementById('username_div2').style.color = "red";
        name_error2.textContent = "Tên tài khoản không được bỏ trống";
        username2.focus();
        return false;
    }
    if (username2.value.length <5 ) {
        username2.style.border = "1px solid red";
        document.getElementById('username_div2').style.color = "red";
        name_error2.textContent = "Tên đăng nhập phải ít nhất 5 kí tự";
        username2.focus();
        return false;
    }
    // validate username
    if (patt1.test(username2.value) == false) {
        username2.style.border = "1px solid red";
        document.getElementById('username_div2').style.color = "red";
        name_error2.textContent = "Tên tài khoản không sử dụng ký tự đặt biệt";
        username2.focus();
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
        document.getElementById('password_div').style.color = "red";
        password_error.textContent = "Password không được để trống";
        password.focus();
        return false;
    }
	if (parseInt(password.value.length) < 6) {
		password.style.border = "1px solid red";
        document.getElementById('password_div').style.color = "red";
        password_error.textContent = "Password ít nhất có 6 ký tự";
        password.focus();
        return false;
    }
    ///không kí tự nháy
    var patt=/[']/;
    if(patt.test(password.value)){
        password.style.border = "1px solid red";
        document.getElementById('password_div').style.color = "red";
        password_error.textContent = 'Không được có kí tự " '+"'"+' "';
        password.focus();
        return false;
    }

    // check if the two passwords match
    

    if (password.value != password_confirm.value) {
        password.style.border = "1px solid red";
        document.getElementById('password_confirm_div').style.color = "red";
        password_confirm.style.border = "1px solid red";
        password_confirm_error.textContent = "Mật khẩu nhập lại không khớp";
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

function nameVerify2() {
    if (username2.value != "") {
        username2.style.border = "1px solid #5e6e66";
        document.getElementById('username_div2').style.color = "#5e6e66";
        name_error2.innerHTML = "";
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
        document.getElementById('password_div').style.color = "#5e6e66";
        password_error.innerHTML = "";
        return true;
    }
	}
	function password_confirmVerify() {
    if (password.value === password_confirm.value) {
        password.style.border = "1px solid #5e6e66";
        document.getElementById('password_confirm_div').style.color = "#5e6e66";
		password_confirm.style.border = "1px solid #5e6e66";
        password_confirm_error.innerHTML = "";
        return true;
    }
}

function numberVerify() {
	
	if (number.value != "") {
        number.style.border = "1px solid #5e6e66";
        document.getElementById('number_div').style.color = "#5e6e66";
        number_error.innerHTML = "";
        return true;
    }
	
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

// Xu ly trung ten
$('#username2').keyup(function() {
    val_name = $(this).val();
    $.post("xulyten.php", {
        val_name: val_name
    }, function(data) {
        if(data=='Tên tài khoản của bạn đã được sử dụng'){
            $('#name_error2').text(data);
            $('#sub').attr("disabled","disabled")
        }
        else{
            $('#name_error2').text('');
            $('input[type=submit]').removeAttr("disabled");
        }
    });
})
$('#username2').blur(function() {
    val_name = $(this).val();
    $.post("xulyten.php", {
        val_name: val_name
    }, function(data) {
        if(data=='Tên tài khoản của bạn đã được sử dụng'){
            $('#name_error2').text(data);
            $('#sub').attr("disabled","disabled")
        }
        else{
            $('#name_error2').text('');
            $('input[type=submit]').removeAttr("disabled");
        }
    });
})
// Xu ly trung email

$('#email').keyup(function() {
    val_email = $(this).val();
    $.post("xulymail.php", {
        val_email: val_email
    }, function(data) {
        if(data=='Email của bạn đã được sử dụng'){
            $('#email_error').text(data);
            $('#sub').attr("disabled","disabled")
        }
        else{
            $('#email_error').text(data);
            $('input[type=submit]').removeAttr("disabled");
        }

    });
    $('#email').blur(function() {
        val_email = $(this).val();
        $.post("xulymail.php", {
            val_email: val_email
        }, function(data) {
            if(data=='Email của bạn đã được sử dụng'){
            $('#email_error').text(data);
            $('#sub').attr("disabled","disabled")
        }
        else{
            $('#email_error').text(data);
            $('input[type=submit]').removeAttr("disabled");
        }
        });
    });
})
</script>