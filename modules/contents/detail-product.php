<?php
	$id = $_GET['id'];

	$sql = "SELECT * from san_pham where id_sp = '$id'";
	$row = mysql_fetch_array(mysql_query($sql));

	$sqllsp = "SELECT * from loai_sanpham where id_loai='{$row['id_loai']}'";
	$rowlsp = mysql_fetch_array(mysql_query($sqllsp));
	
?>

<!-- Comment -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1538529646266833&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Comment -->

<div id="header-title" class="text-center" style="background-image: url('image/bg.jpg');">
	<div class="header-text">
		<h2 style="text-transform: uppercase;"><?php echo $row['ten_sp']; ?></h2>
		<h4>
			<a href="index.php">HOME</a>
			<span>></span>
			<a href="index.php?f=san-pham">SẢN PHẨM</a>
			<span>></span>
			<a href="index.php?f=san-pham&c=<?php echo $row['id_loai'] ?>"><?php echo $rowlsp['ten_loai']; ?></a>
			<span>></span>
			<?php echo $row['ten_sp']; ?>
		</h4>
	</div>
</div>

<div id="main-prod" class="detail-product">
	<div class="col-sm-5">
		<span class='zoom' id='zoom'>
			<img class="img-responsive" src='image/<?php echo $row['hinhanh_sp']; ?>' width='450' alt='<?php echo $row['ten_sp']; ?>'/>
		</span>
	</div>
	<div class="col-sm-7">
		<h1 style="text-transform: uppercase;">
			<?php 
				echo $row['ten_sp'];
			 ?>
		</h1>
		<h4><?php echo $row['gioithieu_sp']; ?></h>
		<h2>
			<?php 
			if ($row['giam_gia'] > 0) {
						$price = $row['gia_sp'] - ($row['giam_gia'] * $row['gia_sp'])/100;
						echo $deal = '<strike>'.number_format($row['gia_sp'],0,',','.').'₫ </strike>'.number_format($price,0,',','.').'₫';
					}else{
						echo $deal = number_format($row['gia_sp'],0,',','.').'₫';
					}
			 ?>
		</h2>
		<br>
		<div class="quantity">
		  <input type="number" min="1" max="9" step="1" value="1">
		  <div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
		</div>
		<button class="btn btn-primary" style="margin-left: 5px;"><span class="glyphicon glyphicon-shopping-cart"></span> Thêm vào giỏ</button>
		<button class="btn btn-danger"><i class="fa fa-heart-o" aria-hidden="true"></i> Yêu thích</button>
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
	<br>
	<div class="col-sm-12 describe">
		<div class="arrow_box">
			<h4>Mô tả</h4>
		</div>
		<div class="des-content"><?php echo $row['mota_sp']; ?></div>
		<div class="fb-comments" data-href="http://localhost:8080/xuxu-shop/xuxushop/index.php?f=detail-product&id=<?php echo $row['id_sp'] ?>" data-width="auto" data-numposts="5"></div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#zoom').zoom();
	});
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
