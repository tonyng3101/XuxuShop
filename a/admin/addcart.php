<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$quantity = 0;


if(isset($_SESSION['cart'][$id]))
{
	$quantity = $_SESSION['cart'][$id] + 1;
}
else
{
	$quantity = 1;
}
$_SESSION['cart'][$id] = $quantity;
header("Location:viewcart.php");
?>

</body>
</html>