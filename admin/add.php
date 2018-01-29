<?php
	include('connect.php');
	
	//lay du lieu duoc gui tu form len
	$loai = $_POST['type'];
	$ten = $_POST['txtten'];
	$gia = $_POST['txtgia'];
	$giamgia = $_POST['txtgiamgia'];
	$gioithieu = $_POST['txtgioithieu'];
	$mota = $_POST['txtmota'];
	$hinhanh = $_FILES['bookimage']['name'];
	
	$sql = "INSERT into san_pham (id_loai, ten_sp, gia_sp, giam_gia, gioithieu_sp, mota_sp, hinhanh_sp) values ('{$loai}', '{$ten}', {$gia}, '{$giamgia}', '{$gioithieu}', '{$mota}', '{$hinhanh}')";
	
	//upload file len server
	move_uploaded_file($_FILES['bookimage']['tmp_name'], '..\image\\' . $hinhanh);
	
	mysql_query($sql);
	
	header('Location: danhsachsanpham.php');

?>