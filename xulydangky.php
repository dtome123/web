<?php
   	$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,"formuser");
	if(isset($_POST['register'])){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$number=$_POST['number'];
		$birth=$_POST['birth'];
		$sex=$_POST['sex'];
		
		$sql="INSERT INTO `userinfo`(`ten`, `email`, `mk`, `dienthoai`, `ngaysinh`, `gioitinh`) VALUES ('$username','$email','$password','$number','$birth','$sex')";
			$query=mysqli_query($connect,$sql);		
	}
	if($query)
		echo "<p style='font-size:20px'>Quá trình đăng ký thành công.<p><a href='index.php'>Về trang chủ</a>";
	else
		echo"<p style='font-size:20px'>Có lỗi xãy ra trong quá trình đăng ký.<a href='register.php'>Về trang đăng ký</a>";
   ?>
