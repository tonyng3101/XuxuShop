<table>
<form action="payment.php">
<tr>
<td>Tên người mua</td>
<td><?php echo $_SESSION['username']; ?></td>
</tr>
<tr>
<td>Tên người nhận</td>
<td><input name="txtname" type="text"></td>
</tr>
<tr>
<td>Địa chỉ người nhận</td>
<td><textarea name="txtaddress" type="text" /></td>
</tr>
<tr>
<td>Tổng giá</td>
<td><?php echo $_SESSION['totalorder']; ?></td>
</tr>
<td><?php echo $_SESSION['totalorder']; ?></td>
</tr>
</form>

</table>