<?php
	include('connect.php');
	
	$id = $_GET['id'];
	
	$sql = "delete from loai_sanpham where id_loai = {$id}";

	mysql_query($sql);
	
	header('Location: danhsachloai.php');
?>