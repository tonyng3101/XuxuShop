<?php
	include('connect.php');
	
	$id = $_GET['id'];
	
	$sql = "delete from san_pham where id_sp = {$id}";

	mysql_query($sql);
	
	header('Location: danhsachsanpham.php');
?>