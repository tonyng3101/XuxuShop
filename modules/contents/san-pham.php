
<div id="header-title" class="text-center" style="background-image: url('image/bg.jpg');">
	<h2 style="font-family: 'GroteskBoldCond'; font-size: 100px; color: #fff; letter-spacing: 13.5px; padding-top: 100px;">XUXU LIPSTICK</h2>
	<hr  width="10px" color="#fff" style="border:2px solid #fff" />
	<h3 style="font-family: 'Montserrat', sans-serif; letter-spacing:0px; color: #fff; font-size: 18px">XuxuLipstick là dòng son tươi thiên nhiên cao cấp, 100% không chì</h3>
	<h3 style="font-family: 'Montserrat', sans-serif; letter-spacing:0px; color: #fff; font-size: 18px">Chất son siêu lì, mịn, bôi đến đâu từng lớp son như ngấm vào môi</h3>
</div>

<div id="main-prod">
	<div class="filter col-sm-2">
		
	</div>
	<div class="prod col-sm-10">

		<?php
			$sql = "SELECT * from san_pham";
			$query = mysql_query($sql);

			while ($row = mysql_fetch_array($query)) {
		?>

		<div class="caption-style-2" style="background-image: url(image/<?php echo $row['hinhanh_sp']; ?>);">
			<div class="caption">
				<div class="blur"></div>
				<div class="caption-text">
					<h1 id="name"><?php echo $row['ten_sp']; ?></h1>
					<h1 id="price"><?php echo number_format($row['gia_sp'],0,',','.'); ?></h1>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
</div>