<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
	include('connect.php');
	//lay ra mang id duoc gui tu danh sach len
	$listid = $_POST['delete'];
	
	//duyet qua mang cac id
	foreach($listid as $id) {
		$sql = "delete from book where id = {$id}";
		mysql_query($sql);
	}
	
	header('Location: listbook.php');
?>
</body>
</html>