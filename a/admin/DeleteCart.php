<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();

//lấy ra giỏ hàng
$cart = $_SESSION['cart'];
//lấy ra mã sản phẩm bị xóa
$id = $_GET['productid'];
//nếu không truyền mã sản phẩm thì sẽ xóa giỏ hàng
if($id == 0)
{
	unset($_SESSION['cart']);
}
else //nếu có truyền mã sản phẩm thì sẽ xóa sản phẩm trong giỏ hàng
{
	unset($_SESSION['cart'][$id]);
}
header("Location:listproduct.php");
exit();
?>
</body>
</html>