<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco', $con);
	
	$id = $_GET['id'];
	
	$name = $_POST['txtname'];
	$price = $_POST['txtprice'];
	
	//Lấy giá trị danh mục từ thẻ select
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Thiết lập mảng lưu lỗi => Mặc định rỗng
    $error = array();
		if (empty($_POST['category'])) {
			$error['category'] = "Bạn cần chọn danh mục";
		} else {
			$category = $_POST['category'];
		}
	}
	//Hình ảnh
	$image = $_FILES['file']['name'];
	
	if($image == ''){
		$sql = "update menu set id_type = '" .$category."', name= '" .$name."', price = '" .$price."' where id_taste=".$id;
	}else{
		//Upload file
		move_uploaded_file($_FILES['file']['tmp_name'] , 'F:\XAMPP\htdocs\tocotoco\images\\'.$_FILES['file']['name']);
		
		$sql = "update menu set id_type = '" .$category."', name = '" .$name."', price = '" .$price."', image ='" .$image."' where id_taste=".$id;
	}
	
	
	
	mysql_query($sql);
	
	header('Location: ../index.php');
?>