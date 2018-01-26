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
		
	$pagesize = 5;
	$totalpages = 0;
	$totalrows = 0;
	$currentpage = 1;
	$startrow = 0;
	
	$rsrow = mysql_query('select count(*) as totalrow from book');
	$row = mysql_fetch_array($rsrow);
	$totalrows = $row['totalrow'];
	
	if($totalrows%$pagesize == 0)
		$totalpages = $totalrows/$pagesize;
	else
		$totalpages = (int)($totalrows/$pagesize) + 1;
	
	echo $totalpages;
	
	//B3: Tao cau truy van va thuc thi cau truy van
	$sql = 'select * from book';
	
	//thuc thi cau truy van
	$recordset = mysql_query($sql);
?>
<h2>Chào <?php echo $username; ?></h2>
<form action="deletemanybooks.php" method="post">
<table border="1">
	<tr>
    	<th>Mã</th>
        <th>Tiêu đề</th>
        <th>Giá</th>
        <th>Tác giả</th>
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
    	<td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['author']; ?></td>
        <td><?php echo $status; ?></td>
        <td><img width="50px" height="50px" src="images/<?php echo $row['images']; ?>" /> </td>
        <td><a href="formeditbook.php?id=<?php echo $row['id']; ?>">Cập nhật</a></td>
        <td><a href="deletebook.php?id=<?php echo $row['id']; ?>" onClick="return confirm('Bạn có thực sự muốn quất ?');">Xóa sách</a></td>
        <td><input type="checkbox" name="delete[]" value="<?php echo $row['id']; ?>" /></td>
    </tr>
<?php } ?>
</table>
<BR>
<?php
	for($i = 1; $i <= $totalpages; $i++) {
?>
	<a href="listbookpaging.php?currentpage=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php } ?>
<BR>
<input type="submit" value="Xóa sách" />
</form>
<BR><BR>
<a href="formaddbook.php">Thêm sách</a>
<BR><BR>
<a href="logout.php">Thoát</a>
</body>
</html>