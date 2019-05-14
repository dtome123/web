<?php
	   require "condb/DataProvider.php";
	   include "common.php";
	   if(isLogined()){
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
				echo "<script>
					alert('Cập nhật thông tin thành công')
					window.location.href = 'xemtaikhoan.php';
				</script>";
				
				}
			else
				echo"<p style='font-size:20px'>Có lỗi xãy ra trong quá trình cập nhật.<a href='capnhattaikhoan.php'>Về trang thông tin tài khoản</a>";
		}
		else {
			$hostURL  = $_SERVER['HTTP_HOST'];
			$dirURL   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extraURL = 'index.php';
			$strURL = "http://" . $hostURL . $dirURL . "/" . $extraURL;
			echo($strURL);
			header("Location:$strURL");
		}
   ?>
