<?php 
    session_start();
    if(isset($_GET['key']) and isset($_GET['value'])){
        $k=$_GET['key'];
        $v=$_GET['value'];
        $_SESSION['cart'][$k]=$v;
    }
?>