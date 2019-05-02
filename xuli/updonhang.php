<?php 
    require "../condb/DataProvider.php";
    $makh=1;
    $date= date('Y-m-d');
    
    $tien=(int) $_POST['tt'];
    $sql="INSERT into HoaDon(MaKH,NgayMua,ThanhTien) values($makh,'$date',$tien)";
    /* echo $sql; */
    $result=DataProvider::executeQuery($sql);
    $row=mysqli_fetch_array($result);
    echo $row['MaHD'];
    /* foreach ($_SESSION as $k => $v) {
        
    }   */
    
    
?>