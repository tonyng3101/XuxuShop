<?php
session_start();

//lay ra gio hang
$cart = $_SESSION['cart'];
//lay ra ma san pham bi xoa
$id = $_GET['id'];

//neu khong truyen ma san pham thi se xoa gio hang
if($id == 0)
{
    unset($_SESSION['cart']);
}
else //neu co truyen ma san pham thi se xoa san pham trong gio hang
{
    unset($_SESSION['cart'][$id]);
}

header('Location: ../../index.php?f=cart');

exit();

?>