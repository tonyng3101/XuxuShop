<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco', $con);
	
	$id = $_GET['id'];
	
	$name_type = $_POST['txtname'];
	
	$sql = "update type set name_type = '".$name_type."' where id_type=".$id;
	
	mysql_query($sql);
	
	header('Location: ../danhmuc.php');
?>