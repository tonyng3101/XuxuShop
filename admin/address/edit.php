<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco', $con);
	
	$id = $_GET['id'];
	
	$name = $_POST['txtname'];
	$add = $_POST['txtprice'];
	$phone = $_POST['txtphone'];
	
		
	$sql = "update store_address set name_store = '" .$name."', add_store = '" .$add."', phone_store ='" .$phone."' where id_store=".$id;
	
	mysql_query($sql);
	
	header('Location: ../address.php');
?>