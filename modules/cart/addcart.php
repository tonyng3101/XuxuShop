<?php
session_start();

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
}

$id = $_GET['id'];
if (isset($_POST['qty'])) {
	$qty = $_POST['qty'];
}else{
	$qty = 1;
}

$quantity = 0;

//Kiểm tra sản phẩm tồn tài chưa
//Nếu tồn tại thì thêm 1
//Chưa thì thêm vào giỏ
if(isset($_SESSION['cart'][$id]))
{
    $quantity = $_SESSION['cart'][$id] + $qty;
}
else
{
    $quantity = $qty;
}

$_SESSION['cart'][$id] = $quantity;

if (isset($_GET['url'])) {
	$url = base64_decode($_GET["url"]);
	header('Location:'.$url);
}else{
	header('Location:../../index.php?f=cart');
}

?>