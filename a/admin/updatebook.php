<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
	include('connect.php');
	
	//lay du lieu duoc gui tu form len
	$id = $_POST['txtid'];
	$title = $_POST['txttitle'];
	$price = $_POST['txtprice'];
	$author = $_POST['txtauthor'];
	
	$sql = "update book set title = '{$title}', price = {$price}, author = '{$author}' where id = {$id}";
	
	mysql_query($sql);
	
	header('Location: listbook.php');
?>
</body>
</html>