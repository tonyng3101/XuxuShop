<?php
	$con = mysql_connect('localhost', 'root', '');
	mysql_select_db('tocotoco',$con);
	
	$name = $_POST['txtname'];
	$price = $_POST['txtprice'];
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Thiết lập mảng lưu lỗi => Mặc định rỗng
    $error = array();
		if (empty($_POST['type'])) {
			$error['type'] = "Bạn cần chọn loại sản phẩm";
		} else {
			$type = $_POST['type'];
		}
	}
	
	
	$image = $_FILES['file']['name'];
	
	move_uploaded_file($_FILES['file']['tmp_name'] , 'F:\XAMPP\htdocs\tocotoco\images\\'.$_FILES['file']['name']);
	
	$sql = "insert into menu (id_type, name, price, image)
	values ('" .$type."','" .$name."','" .$price."','" .$image."')";
	
	mysql_query($sql);
	
	header ('Location: ../index.php');
?>

