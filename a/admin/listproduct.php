<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List sản phẩm</title>
</head>
<body>
<?php
	include('connect.php');
	$sql = "select * from book";
	
	$query = mysql_query($sql);
?>
<div style="width:1000px; border:1px solid orange;">
<?php
	while($row = mysql_fetch_array($query)) {
?>
	<div style="width:230px; height:250px; border:1px solid green;float:left;">
    	Mã: <?php echo $row['id']; ?> <BR>
        Tiêu đề: <?php echo $row['title']; ?> <BR>
        Tác giả: <?php echo $row['author']; ?> <BR>
        Hình ảnh: <img width="120px" height="120px" src="images/<?php echo $row['images']; ?>" /> <BR><BR>
        <a href="addcart.php?id=<?php echo $row['id']; ?>">Mua hàng</a>
    </div>
<?php } ?>
</div>
</body>
</html>