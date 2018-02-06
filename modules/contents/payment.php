<?php 
$state = 1;
$total = 0;
$state = 0;
$shipping = 0;

if (isset($_SESSION['cart'])) {
	foreach ($_SESSION['cart'] as $k => $v) {
		if (isset($k)) {
			$state = 2;
		}
		$item[] = $k;
	}
}
?>
<div class="payment">
	<div class="col-sm-12">
	<?php
	if ($state != 2) {
		echo '<div class="text-center">';
		echo '<h3>Không có sản phẩm nào trong giỏ hàng</h3>';
		echo '<a href="index.php?f=san-pham" class="uncart">TIẾP TỤC MUA HÀNG</a>';
		echo '</div>';
	}else{
		$str = implode(",", $item);
		$sql = "SELECT * FROM san_pham where id_sp in ($str)";
		$query = mysql_query($sql);
	?>

	<br>
	<h4><img src="image/logo-black.png" width="40px"> Cảm ơn bạn đã mua hàng tại Xuxu Lipstick</h4>
	<hr style="margin: 10px 0 10px 0;">
	<!-- Address For Shipping -->
	<form action="modules/payment/addpayment.php" method="post">
	<?php 
	if (isset($_SESSION['idkh'])) {
		$id = $_SESSION['idkh'];
		$sqls = "SELECT * FROM khach_hang where id_kh = '$id'";
		$querys = mysql_query($sqls);
		$rows = mysql_fetch_array($querys);
	?>
		<div class="col-sm-8">
		
			<div class="form-group" style="border-top-left-radius: 3px; border-top-right-radius: 3px; ">
				<h4 class="head-pay">Địa chỉ giao hàng</h4>
			</div>
			<div class="form-add">
				<div class="row">
					<input type="hidden" name="id_kh" value="<?php echo $rows['id_kh']; ?>" hidden>
					<input type="hidden" name="username" value="<?php echo $rows['username']; ?>" hidden>
					<label class="control-label col-sm-4">Tên</label>
					<div class="col-sm-5">
						<input type="text" name="txtname" class="form-control" placeholder="Họ & tên" value="<?php echo $rows['ten_kh']; ?>">
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Tỉnh/Thành phố</label>
					<div class="col-sm-5">
						<input type="text" name="txttinh" class="form-control" placeholder="Tỉnh/Thành phố" value="<?php echo $rows['tinh']; ?>">
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Quận/Huyện</label>
					<div class="col-sm-5">
						<input type="text" name="txtquan" class="form-control" placeholder="Quận/Huyện" value="<?php echo $rows['quan']; ?>">
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Phường, xã</label>
					<div class="col-sm-5">
						<input type="text" name="txtphuong" class="form-control" placeholder="Phường, xã" value="<?php echo $rows['phuong']; ?>">
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Địa chỉ nhận hàng<br/>(tầng, số nhà, đường)</label>
					<div class="col-sm-5">
						<textarea class="form-control" name="txtadd" rows="3" placeholder="Địa chỉ nhận hàng (tầng, số nhà, đường)" style="resize: none;"><?php echo $rows['dia_chi']; ?></textarea>
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Điện thoại di dộng</label>
					<div class="col-sm-5">
						<input type="number" name="txtphone" class="form-control" placeholder="Số điện thoại" value="<?php echo $rows['sdt_kh']; ?>">
					</div>
				</div>
				<hr style="margin: 40px 40px 20px 40px;">
				<h5 class="head-pay" style="margin: 0 0 0 40px;">Thông tin thêm</h5>
				<div class="row">
					<label class="control-label col-sm-3 note-cart">Ghi chú đơn hàng</label>
				</div>
				<div class="row" style="margin-top: 0px; margin-left: 25px;">
					<div class="col-sm-11" style="padding-right: 0;">
						<textarea class="form-control" name="txtnote" rows="2" placeholder="Ghi chú" ></textarea>
					</div>
				</div>
			</div>
	</div>
	<?php
	}else{
	?>
	<div class="col-sm-8">
			<div class="form-group" style="border-top-left-radius: 3px; border-top-right-radius: 3px; ">
				<h4 class="head-pay">Địa chỉ giao hàng</h4>
			</div>
			<div class="form-add">
				<div class="row">
					<label class="control-label col-sm-4">Tên</label>
					<div class="col-sm-5">
						<input type="text" name="txtname" class="form-control" placeholder="Họ & tên">
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Tỉnh/Thành phố</label>
					<div class="col-sm-5">
						<input type="text" name="txttinh" class="form-control" placeholder="Tỉnh/Thành phố">
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Quận/Huyện</label>
					<div class="col-sm-5">
						<input type="text" name="txtquan" class="form-control" placeholder="Quận/Huyện">
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Phường, xã</label>
					<div class="col-sm-5">
						<input type="text" name="txtphuong" class="form-control" placeholder="Phường, xã">
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Địa chỉ nhận hàng<br/>(tầng, số nhà, đường)</label>
					<div class="col-sm-5">
						<textarea class="form-control" name="txtadd" rows="3" placeholder="Địa chỉ nhận hàng (tầng, số nhà, đường)" style="resize: none;"></textarea>
					</div>
				</div>
				<div class="row">
					<label class="control-label col-sm-4">Điện thoại di dộng</label>
					<div class="col-sm-5">
						<input type="number" name="txtphone" class="form-control" placeholder="Số điện thoại">
					</div>
				</div>
				<hr style="margin: 40px 40px 20px 40px;">
				<h5 class="head-pay" style="margin: 0 0 0 40px;">Thông tin thêm</h5>
				<div class="row">
					<label class="control-label col-sm-3 note-cart">Ghi chú đơn hàng</label>
				</div>
				<div class="row" style="margin-top: 0px; margin-left: 25px;">
					<div class="col-sm-11" style="padding-right: 0;">
						<textarea class="form-control" name="txtnote" rows="2" placeholder="Ghi chú" ></textarea>
					</div>
				</div>
			</div>
	</div>
	<?php } ?>
	<!-- Address For Shipping -->
	<div class="col-sm-4" style="padding-right: 0;">
		<div class="form-group" style="border-top-left-radius: 3px; border-top-right-radius: 3px; ">
			<h4 class="head-pay">Thông tin đơn hàng</h4>
		</div>
		<div class="form-detail">
			<table width="100%" class="table-detail">
				<tr>
					<th width="55%" style="text-align: left; padding-left: 10px;">SẢN PHẨM</th>
					<th align="center" width="17%">SỐ LƯỢNG</th>
					<th  style="padding-right: 10px; text-align: right;">GIÁ (VND)</th>
				</tr>
				<?php 
				while ($row = mysql_fetch_array($query)) {
					$totalid = $_SESSION['cart'][$row['id_sp']]*$row['gia_sp'];
				?>
				<tr class="pay-cart">
					<td style="padding-left: 10px; text-transform: uppercase;"><?php echo $row['ten_sp']; ?></td>
					<td align="center"><?php echo $_SESSION['cart'][$row['id_sp']]; ?></td>
					<td align="right" style="padding-right: 10px;"><?php echo number_format($totalid,0,',','.'); ?></td>
				</tr>
				<?php
				$total += $totalid;
				}
				?>
			</table>
			<div class="coupon">
				<div class="col-sm-9">
					<input class="form-control" type="text" name="txtcoupon" placeholder="Mã giảm giá">
				</div>
				<button class="btn btn-danger">Áp dụng</button>
			</div>
			<div class="pay-total">
				<p style="float: left; color: #666; font-weight: 700;">Tạm tính</p>
				<p style="float: right;"><?php echo number_format($total,0,',','.'); ?> VND</p>
			</div>
			<div class="shipping">
				<p style="float: left; color: #298A08;">Phí vận chuyển</p>
				<p style="float: right; color: #298A08;">
				<?php 
				$totalfn = $total + $total*10/100;
				if ($shipping == 0) {
					echo 'Miễn phí';
				}else{
					echo $shipping;
				}
				 ?>
				</p>
			</div>
			<div class="totalfn">
				<p style="float: left;"><b style="font-size: 20px;">Tổng tiền</b> (Đã bao gồm VAT)</p>
				<p style="float: right; color: #d2322d; font-size: 20px;">
					<b><?php echo number_format($totalfn,0,',','.'); ?> VND</b>
					<input type="hidden" name="amount" value="<?php echo $totalfn; ?>" hidden>
				</p>
			</div>
		</div>
		<div class="btnsubmit"><input type="submit" name="submit" class="btnpay" value="ĐẶT HÀNG"></div>
	</div>
	<?php
	}
	?>
</form>
	</div>
</div>