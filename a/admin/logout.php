<?php
	session_start();

	//huy session 
	session_destroy();
	
	//quay lai trang dang nhap
	header('Location: formlogin.php');
?>