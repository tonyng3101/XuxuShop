<?php
	include('connect.php');
	
	//lay du lieu duoc gui tu form len
	$id = $_POST['txtid'];
	$ten = $_POST['txtten'];
	$gia = $_POST['txtgia'];
	$giamgia = $_POST['txtgiamgia'];
	$gioithieu = $_POST['txtgioithieu'];
	$mota = $_POST['txtmota'];
	$filename = $_FILES['bookimage']['name'];
	echo $filename;
	
	$sql = "insert into san_pham (id_sp, ten_sp, gia_sp, giam_gia, gioithieu_sp, mota_sp, hinhanh_sp) values ({$id}, '{$ten}', {$gia}, '{$giamgia}', '{$gioithieu}', '{$mota}', '{$filename}')";
	
	//upload file len server
	move_uploaded_file($_FILES['bookimage']['tmp_name'], 'img/' . $filename);
	
	mysql_query($sql);
	
	header('Location: danhsachsanpham.php');
?>