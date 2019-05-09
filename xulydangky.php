<?php
   	require "condb/DataProvider.php";
	if(isset($_POST['register'])){
		$username=$_POST['username'];
		$username2=$_POST['username2'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$number=$_POST['number'];
		$birth=$_POST['birth'];
		$sex=$_POST['sex'];
		$dc=$_POST['diachi'];
		$sql="INSERT INTO `khachhang` ( `TenKH`, `TenDN`, `Email`, `Pass`, `SoDT`, `NgaySinh`, `GioiTinh`,`DiaChi`) values('$username','$username2','$email','$password','$number','$birth','$sex','$dc')";
		$query=DataProvider::executeQuery($sql);		
	}
	if($query)
		echo "<p style='font-size:20px'>Quá trình đăng ký thành công.<p><a href='index.php'>Về trang chủ</a>";
	else
		echo"<p style='font-size:20px'>Có lỗi xãy ra trong quá trình đăng ký.<a href='register.php'>Về trang đăng ký</a>";
   ?>
