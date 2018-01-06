<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco', $con);
	
	$id = $_GET['id'];
	
	$sql = "delete from type where id_type =" .$id;
	
	mysql_query($sql);
	
	header('Location: ../danhmuc.php');
?>