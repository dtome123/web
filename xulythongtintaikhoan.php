<?php
   	require "condb/DataProvider.php";
		if(isset($_POST['update'])){
		$id=$_POST['id'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		/* $password=$_POST['password']; */
		$number=$_POST['number'];
		$birth=$_POST['birth'];
		$sex=$_POST['sex'];
		$dc=$_POST['diachi'];
		$sql=("UPDATE khachhang set TenDN='$username', Email='$email', SoDT='$number', NgaySinh='$birth', GioiTinh='$sex', DiaChi='$dc' where MaKH='$id'");
		$query=DataProvider::executeQuery($sql);
		}		
	if($query){
		setcookie('username',$_POST['username'],time()+10000);
		echo "<p style='font-size:20px'>Quá trình cập nhật thành công.<p><a href='index.php'>Về trang chủ</a>";
		}
	else
		echo"<p style='font-size:20px'>Có lỗi xãy ra trong quá trình cập nhật.<a href='capnhattaikhoan.php'>Về trang thông tin tài khoản</a>";
   ?>
