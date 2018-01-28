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
	$ten = $_POST['txtten'];
	$gia = $_POST['txtgia'];
	$giamgia = $_POST['txtgiam'];
	
	$sql = "update san_pham set ten_sp = '{$ten}', gia_sp = {$gia}, giam_gia = '{$giamgia}' where id_sp = {$id}";
	
	mysql_query($sql);
	
	header('Location: listbook.php');
?>
</body>
</html>