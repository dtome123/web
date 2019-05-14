<?php
require "../condb/DataProvider.php";
include "../common.php";
if(isLogined()){
    if(isset($_POST['passOld']) && isset($_POST['pass1']) && isset($_POST['pass2']) && $_POST['pass2']==$_POST['pass1']){
        $a=$_POST['passOld'];
        $b=$_POST['pass1'];
        $patt="/[']/";
        if(!preg_match($patt, $b)){
            if($a==$b){
                echo "<script>
                    alert('Mật khẩu mới trùng mật khẩu cũ');
                    window.location.href = 'xemtaikhoan.php';
                </script>";
            }
            else{
                $sql="SELECT * From khachhang where MaKH='". $_SESSION['iduser']."'";
                $result=DataProvider::executeQuery($sql);
                $row=mysqli_fetch_array($result);
                if($row['Pass']==$a){
                    $sql="UPDATE khachhang set Pass='".$b."' where MaKH='". $_SESSION['iduser']."'";
                    $result=DataProvider::executeQuery($sql);
                    echo "<script>
                    alert('Cập nhật mật khẩu thành công');
                    history.back()
                    </script>";
                }
                else{
                    echo "<script>
                    alert('Mật khẩu cũ không trùng với dữ liệu');
                    history.back()
                    </script>";
                }
    
            }
            /* echo "Thuc hien dc"; */
        }else{
            echo "<script>
                    alert('Lỗi ');
                    history.back()
                    </script>";
        }
        echo "<script>
                    alert('Lỗi ');
                    history.back()
                    </script>";
    }
}
else{
    $hostURL  = $_SERVER['HTTP_HOST'];
    $dirURL   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extraURL = 'index.php';
    $strURL = "http://" . $hostURL . $dirURL . "/" . $extraURL;
    $strURL=str_replace("xuli/","",$strURL);
    /* echo $str; */
    header("Location:$strURL");
}

 ?>