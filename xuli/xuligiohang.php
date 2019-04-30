<?php 
session_start();
if(isset($_POST['id'])){
    $id=$_POST['id'];
    if(isset($_SESSION['cart'][$id])){
        $qty=$_SESSION['cart'][$id]+1;
    }
    else
        $qty=1;
    $_SESSION['cart'][$id]=$qty;
}

/* if(isset($_GET['xh']) &&) */
    if(isset($_POST['xuat'])){
        if($_POST['xuat']==1)
            echo count($_SESSION['cart']);
        else
            if($_POST['xuat']==2)
                echo $_SESSION['cart'][$id];

    }
        

?>