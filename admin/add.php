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
	$title = $_POST['txtten'];
	$gia = $_POST['txtgia'];
	$giamgia = $_POST['txtgiam'];
	
	$sql = "insert into san_pham (id_sp, ten_sp, gia_sp,giam_gia) values ({$id}, '{$title}', '{$gia}', '{$giamgia}')";
	
	//upload file len server

	
	mysql_query($sql);
	
		header('Location: danhsachsanpham.php');
?>
</body>
</html>