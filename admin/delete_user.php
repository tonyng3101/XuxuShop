<?php
	include('connect.php');
	
	$id = $_GET['id'];
	
	$sql = "delete from admin where id = {$id}";

	mysql_query($sql);
	
	header('Location: danhsachtaikhoan.php');
?>