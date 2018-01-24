<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gio hang</title>
</head>
<body>
<?php
	include('connect.php');
	
	//lay ra ds cac san pham trong gio hang
	$listproducts = $_SESSION['cart'];
	
	echo 'Có ' . count($listproducts) . ' sản phẩm trong giỏ hàng !';
	
	if(isset($_SESSION['cart'])) 
	{ 
	  foreach($_SESSION['cart'] as $k => $v) {
			echo '<BR>' . $k . ' ' . $v;
			$item[] = $k;	  
	  }
	}
	 
	 //chuyen mang thanh string 
	 $str = implode(",", $item);
	 
	 $sql="select * from book where id in ($str)"; 
	 
	 $query = mysql_query($sql);
	 
	 while($row = mysql_fetch_array($query)) {
		 echo $row['id'] . ' ' . $row['title'];
?>
	 
<?php } ?>

<BR><BR><BR>
<a href="listproduct.php">Tiếp tục mua sắm</a>
</body>
</html>