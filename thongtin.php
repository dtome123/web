<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
a{
	text-decoration:none;	
}
th{
	padding:20px
}
</style>
<title>Thông tin người dùng</title>
</head>
<body>
	<h1 style="text-align:center; color:blue">Xin chào <?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']?></h1>
    <table width="100%" a
    lign="center">
    <tr>
    <th style="font-size:24px; color:blue"><a href="thongtintaikhoan.php">Thông tin tài khoản</a></th>
    <th style="font-size:24px; color:blue"><a href="donhangcuatoi.php">Đơn hàng của tôi</a></th>
    </tr>
    <tr>
    <td colspan="2" align="center" id="noidung"></td>
    </tr>
    </table>
</body>
</html>