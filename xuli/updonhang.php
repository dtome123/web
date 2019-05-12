<?php 
    session_start();
    require "../condb/db.inc";
    $makh=$_SESSION['iduser'];
    $date= date('Y-m-d');
    
    $tien=(int) $_POST['tt'];
    $sql="INSERT into HoaDon(MaKH,NgayMua,ThanhTien,TrangThai) values($makh,'$date',$tien,'Đang giao')";
    
    $connection = mysqli_connect($hostName,$username,$password);
    if (!$connection)
	{
	    die('Could not connect: ' . mysqli_error());
    }
    echo $sql;
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
    $result=DataProvider::executeQuery($sql);

    ///in vao chi tiet hoa don
    $sql="INSERT into chitiethoadon values ";
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
    $result=DataProvider::executeQuery($sql);
    ///Cap nhat thanh tien 
    $sql="SELECT sum(SoLuong*DonGia) as 'Tien' from chitiethoadon WHERE MaHD=".$last_id." GROUP BY MaHD";
    $result=DataProvider::executeQuery($sql);

    $sql="UPDATE hoadon set ThanhTien=".$sum." where MaHD=".$last_id;
    $result=DataProvider::executeQuery($sql);
    unset($_SESSION['cart']);
    unset($_SESSION['gia']);
    	/* Redirect to a different page in the current directory that was requested */
	


    //tinh thoi gian giao hang
    $date= getdate();
    $dateint = mktime(0, 0, 0, $date['mday'],$date['mon']+7 , $date['year']);
    $date2= date('d/m/Y', $dateint);
    echo 
    '<div id="empty" class="container" style="margin-top:200px">
        <img src="images/sys/xe.png" alt="" style="width:170px">
        <span>
            <h3>
                Mã đơn hàng của bạn là: <span style="color:blue"><u>'.$last_id.'</u></span>
            </h3>
            <p><b>Thời gian dự kiến giao hàng vào: '.$date2.'</b></p>
            <p><i>Thông tin về đơn hàng đã gửi vào mail của bạn</i> </p>

        </span>

    </div>';
    /* mysqli_close($connection); */
?>