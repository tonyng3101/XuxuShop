<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco', $con);
	
	$id = $_GET['id'];
	
	$sql = "delete from menu where id_taste =" .$id;
	
	mysql_query($sql);
	
	header('Location: ./index.php');
?>
