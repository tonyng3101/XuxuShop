<?php 
	session_start(); 
	if(!isset($_SESSION['username'])){
	echo 'Mời bạn<a>Đăng nhập</a>';
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Xem thông tin giỏ hàng</title>
</head>
<body>
<?php
//hủy hóa đơn khi thanh toán xong
//unset($_SESSION['cart']);
//unset($_SESSION['totalcart']);
include_once("connect.php");
//biến này dùng để lưu lại trạng thái của giỏ hàng để xử lý
//Default = 1, nếu có 2 sản phẩm thì sẽ bằng 2
$state = 1;
$total = 0; //biến này dùng để lưu tổng giá trị của giỏ hàng
$state = 0; 

if(isset($_SESSION['cart']))
{
	foreach($_SESSION['cart'] as $k=>$v)
	{
		if(isset($k))
		{
			$state=2;
		}
		$item[] = $k;
	}
}

if ($state !=2)
{
	echo '<p><h2>Bạn không có món hàng nào trong giỏ hàng</h2></p>';
}
else //trường hợp có món hàng
{
	echo "<form action=viewcart.php method=post>";

//if(isset($_SESSION['cart'])) {
	//lay ra danh sach cac san pham trong gio hang
	$list = $_SESSION['cart'];	

//in ra tổng số các sản phẩm trong giỏ hàng
echo '<p><h2>Bạn đang có '.count($list).' món hàng trong giỏ hàng</h2></p>';
//chuyển mảng thành string
$str = implode(",", $item);
$sql = "select * from book where id in ($str)";
$query=mysql_query($sql);
?>

<form action="paymentform.php" method="post">
<table border="1">
	<tr>
    	<th>Mã sách</th>
        <th>Tiêu đề</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Bỏ sản phẩm</th>
        <th>Total</th>
    </tr>
<?php    
	
  while($row = mysql_fetch_array($query))
   { 
   ?>
	<tr>
        <td>
			<?php echo $row['title']; ?>       	
        </td>
        <?php
        echo '<td>Tác giả: '. $row['author'] . '</td>';
		echo '<td>Giá: ' . number_format($row['price'], 3) .'VND<td>';
		?>
        <td align=left>Số lượng:<input type=text name=qty[<?php echo $row['id']; ?>] size=5 value=<?php echo $_SESSION['cart'][$row['id']] ?>> </td>	
        
        <td><a href=DeleteCart.php?productid=<?php echo $row['id']; ?>>Bỏ sản phẩm</a></td>
        <td align="left">Giá tiền cho món hàng:
        <?php echo number_format($_SESSION['cart'][$row['id']]*$row['price'],3); ?>VND</td>
    </tr>
<?php 
echo "";

//tính ra tổng số tiền trong giỏ hàng
$total+=$_SESSION['cart'][$row['id']]*$row['price'];
   }

echo'<table>';
echo"<div class=pro align=left>";
echo"<b>Tong tien cac mon hang:<font color=red>". number_format($total, 3)." VND</font></b>";
echo"</div><BR>";
echo "<input type=submit name=submit value='Cap nhat gio hang'>";
echo "<div class=pro align=left>";
echo "<BR><b><a href=listproduct.php>Mua sach tiep</a> - <a href=DeleteCart.php?productid=0>Xoa bo gio hang</a>- <a href=paymentform.php>Đặt hàng</a></b>";
echo "</div>";
}
?>
<a href="listproduct.php">Quay lại mua hàng</a>
</body>
</html>