<?php 
    session_start();
    $id=$_POST['id'];
    if(isset($_SESSION['cart'])){
        if(isset($_SESSION['cart'][$id]))
            echo 1;
        else
            echo 0;
    }
        
    
    
?>