<?php
	$con = mysql_connect('localhost', 'root', '');
	mysql_select_db('tocotoco',$con);
	
	$name = $_POST['txtname'];
	$add = $_POST['txtadd'];
	$phone = $_POST['txtphone'];
	
	$sql = "insert into store_address (name_store, add_store, phone_store)
	values ('" .$name."','" .$add."','" .$phone."')";
	
	mysql_query($sql);
	
	header ('Location: ../address.php');
?>

