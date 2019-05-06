<?php
	$connect = mysqli_connect('localhost','root','');
	$db = mysqli_select_db($connect,"formuser");
	$sql="SELECT * FROM `userinfo`";
	$query=mysqli_query($connect,$sql);	
	while($row= mysqli_fetch_array($query))
	{
		if($row['email']===$_POST['val_email']){
			
			echo "Email của bạn đã được sử dụng";
		}
	}
	
?>