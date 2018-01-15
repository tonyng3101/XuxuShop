<?php
			//Xử lí phân trang
			$sql = "SELECT count(id_sp) as total from san_pham";
			$query = mysql_query($sql);
			$row = mysql_fetch_assoc($query);
			$total_records = $row['total'];

			$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        	$limit = 12;

        	//Tổng số trang
        	$total_page = ceil($total_records / $limit);

        	//Giới hạn current_page đến total_page
        	if ($current_page > $total_page){
            	$current_page = $total_page;
       		}
        	else if ($current_page < 1){
            	$current_page = 1;
        	}

        	//Start
        	$start = ($current_page - 1) * $limit;

        	$query = mysql_query("SELECT * FROM san_pham LIMIT $start, $limit");
        ?>

<div id="header-title" class="text-center" style="background-image: url('image/bg.jpg');">
	<h2 style="font-family: 'GroteskBoldCond'; font-size: 100px; color: #fff; letter-spacing: 13.5px; padding-top: 100px;">XUXU LIPSTICK</h2>
	<hr  width="10px" color="#fff" style="border:2px solid #fff" />
	<h3 style="font-family: 'Montserrat', sans-serif; letter-spacing:0px; color: #fff; font-size: 18px">XuxuLipstick là dòng son tươi thiên nhiên cao cấp, 100% không chì</h3>
	<h3 style="font-family: 'Montserrat', sans-serif; letter-spacing:0px; color: #fff; font-size: 18px">Chất son siêu lì, mịn, bôi đến đâu từng lớp son như ngấm vào môi</h3>
</div>

<div id="main-prod">
	<div class="filter col-sm-2 text-center">
		<h4>By Catalogue</h4>
		<hr  width="10px" color="#fff" style="border:2px solid #fff" />
	</div>
	<div class="prod col-sm-10" style="padding-right: 0px;">

        <?php
			//Vòng lặp in sản phẩm
			while ($row = mysql_fetch_assoc($query)) {
		?>
		
		<div class="caption-style-2" style="background-image: url(image/<?php echo $row['hinhanh_sp']; ?>);">
			
			<?php 
				if ($row['giam_gia'] > 0) {
					$price = $row['gia_sp'] - ($row['giam_gia'] * $row['gia_sp'])/100;
					$deal = '<strike>'.number_format($row['gia_sp'],0,',','.').'</strike> '.number_format($price,0,',','.');
					echo '<h4 class="deal">-'.$row['giam_gia'].'%</h4>';
				}else{
					$deal = number_format($row['gia_sp'],0,',','.');
				}
			?>
			
			<div class="caption">
				<div class="blur"></div>
				<div class="caption-text">
					<h2 id="name"><?php echo $row['ten_sp']; ?></h2>
					<h3 id="price"><?php echo $deal ?></h3>
				</div>
			</div>
		</div>
		<?php
			}
		?>

		<div class="pagination text-center col-sm-12">
			<?php 
				//Nút Prev
				if ($current_page > 1 && $total_page > 1){
                	echo '<a href="index.php?>function=san-pham?page='.($current_page-1).'">Prev</a> ';
            	}

            	for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                	if ($i == $current_page){
                    	echo '<span>'.$i.'</span> ';
                	}
                	else{
                    	echo '<a href="index.php?function=san-pham?page='.$i.'">'.$i.'</a> ';
                	}
            	}

            	//Nút Next
            	if ($current_page < $total_page && $total_page > 1){
                	echo '<a href="index.php?function=san-pham?page='.($current_page+1).'">Next</a>';
            	}
			?>
		</div>
	</div>
</div>