<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List book</title>
</head>
<body>
<?php
	//nhung noi dung cua file connect.php vao trang
	include('connect.php');
	
	$username = '';
	
	if(isset($_SESSION['username']))
		$username = $_SESSION['username'];
	else
		$username = 'khách';
	
	//B3: Tao cau truy van va thuc thi cau truy van
	$sql = 'select * from san_pham';
	
	//thuc thi cau truy van
	$recordset = mysql_query($sql);
?>
<h2>Chào <?php echo $username; ?></h2>
<form action="deletemanybooks.php" method="post">
<table border="1">
	<tr>
    	<th>Mã</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Giảm giá</th>
        <th>Trạng thái</th>
        <th>Hình ảnh</th>
        <th>Cập nhật</th>
        <th>Xóa</th>
        <th>Xóa nhiều</th>
    </tr>
<?php
	//B4: xu ly ket qua tra ve
	while($row = mysql_fetch_array($recordset)) {
		$stt = $row['status'];
		$status = '';
		
		if($stt == 0)
			$status = 'Hết hàng';
		else
			$status = 'Còn hàng';
?>
	<tr>
    	<td><?php echo $row['id_sp']; ?></td>
        <td><?php echo $row['ten_sp']; ?></td>
        <td><?php echo $row['gia_sp']; ?></td>
        <td><?php echo $row['giam_gia']; ?></td>
        <td><?php echo $status; ?></td>
        <td><img width="50px" height="50px" src="images/<?php echo $row['images']; ?>" /> </td>
        <td><a href="formeditbook.php?id=<?php echo $row['id_sp']; ?>">Cập nhật</a></td>
        <td><a href="deletebook.php?id=<?php echo $row['id']; ?>" onClick="return confirm('Bạn có thực sự muốn quất ?');">Xóa sách</a></td>
        <td><input type="checkbox" name="delete[]" value="<?php echo $row['id']; ?>" /></td>
    </tr>
<?php } ?>
</table>
<BR>
<input type="submit" value="Xóa sách" />
</form>
<BR><BR>
<a href="formaddbook.php">Thêm sách</a>
<BR><BR>
<a href="logout.php">Thoát</a>
</body>
</html>