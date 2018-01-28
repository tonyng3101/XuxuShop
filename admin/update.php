<?php
	include('connect.php');
	
	//lay du lieu duoc gui tu form len
	$id = $_POST['txtid'];
	$ten = $_POST['txtten'];
	$gia = $_POST['txtgia'];
	$giamgia = $_POST['txtgiam'];
	$gioithieu = $_POST['txtgioithieu'];
	$mota = $_POST['txtmota'];
	$filename = $_FILES['bookimage']['name'];
	echo $filename;
	$status=$_POST['status'];

	
	$sql = "update san_pham set ten_sp = '{$ten}', gia_sp = {$gia}, giam_gia = '{$giamgia}', gioithieu_sp = '{$gioithieu}', mota_sp = '{$mota}', hinhanh_sp = '{$filename}', status = '{$status}' where id_sp = {$id}";
	
	mysql_query($sql);
	move_uploaded_file($_FILES['bookimage']['tmp_name'], 'img/' . $filename);
	
	header('Location: danhsachsanpham.php');
?>