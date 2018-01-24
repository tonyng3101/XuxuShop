<?php
	include('connect.php');
	
	$id = $_GET['id'];
	
	$sql = "delete from book where id = {$id}";

	mysql_query($sql);
	
	header('Location: listbook.php');
?>