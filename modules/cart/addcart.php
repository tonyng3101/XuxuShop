<?php
session_start();

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
}

$id = $_GET['id'];

$quantity = 0;

//Kiểm tra đã tồn tại sản phẩm trong giỏ hàng chưa
//Nếu đã tồn tại thì sẽ tăng thêm 1
//Nếu chưa tồn tại thì sẽ thêm sản phẩm vào giỏ hàng
if(isset($_SESSION['cart'][$id]))
{
    $quantity = $_SESSION['cart'][$id] + 1;
}
else
{
    $quantity = 1;
}

$_SESSION['cart'][$id] = $quantity;

header('Location:../../index.php?f=san-pham');
?>