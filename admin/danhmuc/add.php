<?php
	$con = mysql_connect('localhost', 'root', '');
	mysql_select_db('tocotoco',$con);
	
	$ten_hang = $_POST['txtname'];
	
	$sql = "insert into type (name_type) values ('" .$ten_hang."')";
	
	mysql_query($sql);
	
	header ('Location: ../danhmuc.php');
?>

