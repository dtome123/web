<?php 
    session_start();
    $pg=$_GET['page'];
    if(isset($_SESSION['page']))
        $_SESSION['page']=$pg;
    
?>
