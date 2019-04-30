<?php 
session_start();
    $status=1;
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        unset($_SESSION['cart'][$id]);
    }
    if(count($_SESSION['cart'])==0){
        unset($_SESSION['cart']);
        $status=0;
    }
    echo $status;
     
        

?>