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
	$link = $_POST['txtlink'];
	$ordernum = $_POST['txtordernum'];
	
	$sql = "insert into video (id, title, link, ordernum) values ('{$id}', '{$title}', '{$link}', '{$odernum}')";
	
	//upload file len server

	
	mysql_query($sql);
	
		header('Location: danhsachvideo.php');
?>
</body>
</html>