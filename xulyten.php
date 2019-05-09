<?php
	require "condb/DataProvider.php";
	$sql="SELECT * FROM `khachhang`";
	$query=DataProvider::executeQuery($sql);	
	while($row= mysqli_fetch_array($query))
	{
		if($row['TenDN']===$_POST['val_name']){
			
			echo "Tên tài khoản của bạn đã được sử dụng";
		}
	}
	
?>