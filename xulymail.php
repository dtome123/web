<?php
	require "condb/DataProvider.php";
	$sql="SELECT * FROM `khachhang`";
	$query=DataProvider::executeQuery($sql);	
	while($row= mysqli_fetch_array($query))
	{
		if($row['Email']===$_POST['val_email']){
			
			echo "Email của bạn đã được sử dụng";
		}
	}
	
?>