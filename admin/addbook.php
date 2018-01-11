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
	$price = $_POST['txtprice'];
	$author = $_POST['txtauthor'];
	$filename = $_FILES['bookimage']['name'];
	echo $filename;
	
	$sql = "insert into book (id, title, price, author, images) values ({$id}, '{$title}', {$price}, '{$author}', '{$filename}')";
	
	//upload file len server
	move_uploaded_file($_FILES['bookimage']['tmp_name'], 'images/' . $filename);
	
	mysql_query($sql);
	
	header('Location: listbook.php');
?>
</body>
</html>