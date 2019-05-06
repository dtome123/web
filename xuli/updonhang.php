<?php 
    /* session_start();
    require "../condb/db.inc";
    $makh=1;
    $date= date('Y-m-d');
    
    $tien=(int) $_POST['tt'];
    $sql="INSERT into HoaDon(MaKH,NgayMua,ThanhTien) values($makh,'$date',$tien)";
    $connection = mysqli_connect($hostName,$username,$password);
    if (!$connection)
	{
	    die('Could not connect: ' . mysqli_error());
    }
    if (!(mysqli_select_db($connection,$databaseName)))
			showError();
    if (!(mysqli_query($connection,"set names 'utf8'")))
      showError();
    if (!($result = mysqli_query( $connection,$sql)))
        showError();
    $last_id = $connection->insert_id;
    
    $i=0;
    foreach ($_SESSION['cart'] as $key => $value) {
        $item[]=$key;
        $i++;
    }
    $str=implode(",",$item);
    require "../condb/DataProvider.php";
    $sql="SELECT* FROM sanpham WHERE MaSP in ($str)"; 
    $result=DataProvider::executeQuery($sql); */

    ///in vao chi tiet hoa don
  /*   $sql="INSERT into chitiethoadon values ";
    $j=0;
    $sum=0;
    while($row=mysqli_fetch_array($result)){
        if(($i-1)!=$j)
            $sql.="($last_id,".$row['MaSP'].",".$_SESSION['cart'][$row['MaSP']].",".$_SESSION['gia'][$row['MaSP']]."),";  
        else
            $sql.="($last_id,".$row['MaSP'].",".$_SESSION['cart'][$row['MaSP']].",".$_SESSION['gia'][$row['MaSP']].")";
        $sum+=$_SESSION['cart'][$row['MaSP']]*$_SESSION['gia'][$row['MaSP']];
        $j++;
    };
    $result=DataProvider::executeQuery($sql); */
    ///Cap nhat thanh tien 
    /* $sql="SELECT sum(SoLuong*DonGia) as 'Tien' from chitiethoadon WHERE MaHD=".$last_id." GROUP BY MaHD";
    $result=DataProvider::executeQuery($sql); */

    /* $sql="UPDATE hoadon set ThanhTien=".$sum." where MaHD=".$last_id;
    $result=DataProvider::executeQuery($sql);
    unset($_SESSION['cart']);
    unset($_SESSION['gia']); */
    	/* Redirect to a different page in the current directory that was requested */
	$hostURL  = $_SERVER['HTTP_HOST'];
	$dirURL   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extraURL = 'index.php';
    $strURL = "http://" . $hostURL .$dirURL . "/" . $extraURL;
    $strURL=str_replace('/xuli','',$strURL);
    echo $strURL;
    /* mysqli_close($connection); */
?>