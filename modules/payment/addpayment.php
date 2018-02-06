<?php 
session_start();
include '../connect.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_POST['submit'])) {

	//Insert dữ liệu vào bảng don_hang

	$query = mysql_query("SELECT * FROM don_hang ORDER BY id_ls DESC");
	$row = mysql_fetch_array($query);

	$id_ls = $row['id_ls'] + 1;
	$id_kh = $_POST['id_kh'];
	$username = $_POST['username'];
	$address = $_POST['txtadd'].', '.$_POST['txtphuong'].', '.$_POST['txtquan'].', '.$_POST['txttinh'];
	$phone = $_POST['txtphone'];
	$amount = $_POST['amount'];
	$note = $_POST['txtnote'];
	$created = date('Y-m-d');

	$sql = "INSERT INTO don_hang (id_ls, id_kh, username, address, phone, amount, note, status, created) values ('$id_ls','$id_kh', '$username', '$address', $phone, $amount, '$note', 1, '$created')";

	mysql_query($sql);

	//Insert dữ liệu vào bảng chitiet_donhang

	$total = 0;

	foreach ($_SESSION['cart'] as $key => $value) {
		$item[] = $key;
	}

	$list = $_SESSION['cart'];
	$str = implode(",", $item);
	$sqls = "SELECT * FROM san_pham where id_sp in ($str)";
	$querys = mysql_query($sqls);

	while ($rows = mysql_fetch_assoc($querys)) {
		$id_sp = $rows['id_sp'];
		$so_luong = $_SESSION['cart'][$rows['id_sp']];
		$amount = $_SESSION['cart'][$rows['id_sp']]*$rows['gia_sp'];

		$sqls = "INSERT INTO chitiet_donhang (id_ls, id_sp, so_luong, amount, status) values ('$id_ls','$id_sp', '$so_luong', $amount, 1)";

		mysql_query($sqls);
	}

	header('Location: ../../index.php?f=checkout');

}else{
	header('Location: ../../index.php');
}
?>
