<div class="s-cart">
<?php 
	if (isset($_POST['submit'])) {
		foreach ($_POST['qty'] as $key => $value) {
			if ($value == 0 and (is_numeric($value))) {
				unset($_SESSION['cart'][$key]);
			}
			elseif ($value > 0 and (is_numeric($value))) {
				$_SESSION['cart'][$key] = $value;
			}
		}
	}

	$state = 1;
	$total = 0;
	$state = 0;

	if (isset($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $k => $v) {
			if (isset($k)) {
				$state = 2;
			}
			$item[] = $k;
		}
	}

 ?>
	<div class="col-sm-12">
		<!-- Nếu chưa có sản phẩm trong giỏ hàng sẽ hiển thị thông báo -->
		<?php if ($state != 2) {
			echo '<div class="text-center">';
			echo '<h3>Không có sản phẩm nào trong giỏ hàng</h3>';
			echo '<a href="index.php?f=san-pham" class="uncart">TIẾP TỤC MUA HÀNG</a>';
			echo '</div>';
		} else{
			$list = $_SESSION['cart'];

			$str = implode(",", $item);

			$sql = "SELECT * FROM san_pham where id_sp in ($str)";

			$query = mysql_query($sql);
		?>

		<br>
		<a href="index.php?f=san-pham" class="kb">< Tiếp tục mua hàng</a>
		<hr style="margin: 20px 0;">
		<h3 align="left">Giỏ hàng của tôi</h3>
		<div class="col-md-8">
			
			<form action="index.php?f=cart" method="post">
				<table width="100%" class="tcart">
					<tr>
						<th width="20%"><h4><?php echo count($list).' SẢN PHẨM'; ?></h4></th>
						<th width="40%"></th>
						<th width="20%"><h4>GIÁ</h4></th>
						<th><h4>SỐ LƯỢNG</h4></th>
						<th width="5%"></th>
					</tr>
					<?php 

					while ($row = mysql_fetch_array($query)) {
					
					?>
					
					<tr class="pcart">
						<td><img src="image/<?php echo $row['hinhanh_sp']; ?>" width=120px;></td>
						<td>
							<h4 style="font-weight: 500"><?php echo $row['ten_sp']; ?></h4>
							<?php 
							if ($row['status'] == 1) {
								echo '<h5 style="color: #298A08"><i class="fa fa-check-circle"></i> Còn hàng</h5>';
							}else{
								echo '<h5 style="color: #DF0101"><i class="fa fa-exclamation-circle"></i> Đã hết hàng</h5>';
							}
							 ?>
							
						</td>
						<td><h4><?php echo number_format($row['gia_sp'],0,',','.'); ?> ₫</h4></td>
						<td>
							<div class="quantity">
							  <input type="number" min="1" max="10" step="1" name="qty[<?php echo $row['id_sp']; ?>]" value="<?php echo $_SESSION['cart'][$row['id_sp']]; ?>" onchange="document.getElementById('submit').click();">
							  <div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
							</div>
						</td>
						<td><a href="modules/cart/delete-cart.php?id=<?php echo $row['id_sp']; ?>"> <i class="fa fa-trash-o"></i></a></td>
					</tr>
					<tr>
						<td colspan="5" height="10px"></td>
					</tr>
					
					<?php
					$total += $_SESSION['cart'][$row['id_sp']]*$row['gia_sp'];
					}

					 ?>
					 <tr>
						<td><input type="submit" name="submit" id="submit" hidden></td>
					</tr>
				</table>
			</form>
			
		</div>
		<?php 
		
		 ?>
		<div class="col-sm-4 total">
			<h4><strong>Thông tin đơn hàng</strong></h4>
			<hr>
			<div class="total-prod">
				<p style="float: left;">Tạm tính:</p>
				<p style="float: right;"><?php echo number_format($total,0,',','.'); ?> ₫</p>
			</div>
			<hr>
			<div class="total-prod">
				<p style="float: left;"><strong>Tổng tiền</strong> (Đã bao gồm VAT):</p>
				<?php $totalp = $total + ($total*10/100) ?>
				<p style="float: right;"><?php echo number_format($totalp,0,',','.'); ?> ₫</p>
			</div>
			<br>
			<a href="#" style="font-size: 16px">THANH TOÁN</a>
		</div>

		<?php } ?>
	</div>
</div>
<script type="text/javascript">
	jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
</script>