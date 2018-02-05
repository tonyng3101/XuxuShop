<?php
session_start();

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
}

$id = $_GET['id'];

$quantity = 0;

//Kiểm tra sản phẩm tồn tài chưa
//Nếu tồn tại thì thêm 1
//Chưa thì thêm vào giỏ
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