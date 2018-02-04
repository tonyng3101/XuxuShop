<?php
	include('connect.php');
	
	//lay du lieu duoc gui tu form len
	$id = $_GET['id'];
	$loai = $_POST['txtloai'];
	$hinhanh = $_FILES['bookimage']['name'];

	if($hinhanh == ''){
		$sql = "UPDATE loai_sanpham set ten_loai = '{$loai}' where id_loai = {$id}";
	}else{
		//Upload file
		move_uploaded_file($_FILES['bookimage']['tmp_name'] , '..\image\loai\\'.$hinhanh);
		
		$sql = "UPDATE loai_sanpham set ten_loai = '{$loai}', anh_nen = '{$hinhanh}' where id_loai = {$id}";
	}
	mysql_query($sql);
	
	header('Location: danhsachloai.php');
?>