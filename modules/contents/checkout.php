<?php 
session_start();
unset($_SESSION['cart']);
 ?>
<div class="s-cart">
	<div class="col-sm-12">
		<div class="text-center">
		<h3>Cảm ơn bạn <?php echo $_SESSION['namekh']; ?> đã đặt hàng, đơn hàng đang được xử lí!</h3>
		<a href="index.php" class="uncart">QUAY LẠI</a>
		</div>
	</div>
</div>