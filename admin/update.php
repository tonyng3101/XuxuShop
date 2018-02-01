<?php
	include('connect.php');
	
	//lay du lieu duoc gui tu form len
	$id = $_GET['id'];
	$loai = $_POST['type'];
	$ten = $_POST['txtten'];
	$gia = $_POST['txtgia'];
	$giamgia = $_POST['txtgiam'];
	$gioithieu = $_POST['txtgioithieu'];
	$mota = $_POST['txtmota'];
	$hinhanh = $_FILES['bookimage']['name'];
	$status=$_POST['status'];

	if($hinhanh == ''){
		$sql = "UPDATE san_pham set id_loai = '{$loai}', ten_sp = '{$ten}', gia_sp = {$gia}, giam_gia = '{$giamgia}', gioithieu_sp = '{$gioithieu}', mota_sp = '{$mota}', status = '{$status}' where id_sp = {$id}";
	}else{
		//Upload file
		move_uploaded_file($_FILES['bookimage']['tmp_name'] , '..\image\\'.$hinhanh);
		
		$sql = "UPDATE san_pham set id_loai = '{$loai}', ten_sp = '{$ten}', gia_sp = {$gia}, giam_gia = '{$giamgia}', gioithieu_sp = '{$gioithieu}', mota_sp = '{$mota}', hinhanh_sp = '{$hinhanh}', status = '{$status}' where id_sp = {$id}";
	}
	mysql_query($sql);
	
	header('Location: danhsachsanpham.php');
?>