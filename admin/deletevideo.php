<?php
	include('connect.php');
	
	$id = $_GET['id'];
	
	$sql = "delete from video where id = {$id}";

	mysql_query($sql);
	
	header('Location: danhsachvideo.php');
?>