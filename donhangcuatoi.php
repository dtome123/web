<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đơn hàng của tôi</title>
<style>
th, td {
  padding: 20px;
}
tr{
	text-align:center;
}
a{
	text-decoration:none;
}
</style>
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
						$id=$row["MaKH"];
					}
?>
<h1 style="text-align:center; color:blue">Xin chào <?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']?></h1>
    <table width="100%" align="center">
    <tr>
    <th style="font-size:24px"><a href="thongtintaikhoan.php">Thông tin tài khoản</a></th>
    <th style="font-size:24px;color:red"><a href="donhangcuatoi.php">Đơn hàng của tôi</a></th>
    </tr>
    </table>
    <h1 style="text-align:center">Đơn hàng của tôi</h1>
	<table style="font-size:20px" width="800px" border="1" align="center">
    	<tr>
        	<th>Mã đơn hàng</th>
            <th>Ngày mua</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
        </tr>
        <?php
			$sql1="SELECT * FROM `hoadon` where MaKH='$id'";
						$query=DataProvider::executeQuery($sql1);
			$i = 1;
				while($row = mysqli_fetch_array($query)){
					echo "<tr>";
        			echo "<td valign='middle'>".$row['MaHD']."</td>";
            		echo "<td>".$row['NgayMua']."</td>";
            		echo "<td>".$row['ThanhTien']."</td>";
            		echo "<td>".$row['TrangThai']."</td>";
        			echo "</tr>";
			$i++;
		}
        ?>
    </table>
</body>
</html>