<?php
/*
Minh họa PHP session:
+ login.php
+ session.php
+ common.php
+ logout.php
*/
function isLogined()
{
	//echo('@:' . $_SESSION['username']);	
	
	if(empty($_COOKIE['username'])){
		unset($_SESSION['id']);
		return false;
	}
	return true;
}

?>

