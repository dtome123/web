<?php
/*
Minh họa PHP session:
+ login.php
+ session.php
+ common.php
+ logout.php
*/
session_start();
function isLogined()
{
	//echo('@:' . $_SESSION['username']);	
	
	if(empty($_COOKIE['username'])){
		unset($_SESSION['id']);
		return false;
	}
	else{
		if(empty($_SESSION['iduser'])){
			setcookie('username','',time()-10000);
			return false;
		}
	}
	return true;
}

?>

