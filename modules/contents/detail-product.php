<?php
	$id = $_GET['id'];

	$sql = "SELECT * from san_pham where id_sp = '$id'";

	$query = mysql_query($sql);

	$row = mysql_fetch_array($query);
?>

<div id="header-title" class="text-center" style="background-image: url('image/bg.jpg');">
	<div class="header-text">
		<h2 style="text-transform: uppercase;"><?php echo $row['ten_sp']; ?></h2>
	</div>
</div>

<div id="main-prod" class="detail-product">
	<div class="col-sm-5">
		<span class='zoom' id='zoom'>
			<img class="img-responsive" src='image/<?php echo $row['hinhanh_sp']; ?>' width='450' alt='<?php echo $row['ten_sp']; ?>'/>
		</span>
	</div>
	<div class="col-sm-7">
		<h2 style="text-transform: uppercase;"><?php echo $row['ten_sp']; ?></h2>
		<h5><?php echo $row['gioithieu_sp']; ?></h5>
		<br>
		<div class="input-group spinner">
		    <input type="text" class="form-control" value="0">
		    <div class="input-group-btn-vertical">
		      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
		      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
		    </div>
		</div>
		<button class="btn btn-primary" style="margin-left: 5px;"><span class="glyphicon glyphicon-shopping-cart"></span> Thêm vào giỏ</button>
		<button class="btn btn-danger"><span class="glyphicon glyphicon-heart"></span> Add to favorite</button>
		<hr>
		<div class="action-group">
			<button class="btn btn-success btn-lg"> Mua ngay</button>
		</div>
		<hr>
		<div class="service">
			<ul class="custom-icon-box">
			 	<li><i class="fa fa-plane"></i>Giao Hàng Tận Nơi</li>
			 	<li><i class="fa fa-dollar"></i>Thanh Toán Khi Nhận Hàng</li>
			</ul>
		</div>
		
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#zoom').zoom();
	});
	(function ($) {
	  $('.spinner .btn:first-of-type').on('click', function() {
	    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
	  });
	  $('.spinner .btn:last-of-type').on('click', function() {
	    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
	  });
	})(jQuery);
</script>
