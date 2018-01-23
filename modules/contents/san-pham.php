<?php

	//Tìm kiếm trong trang.

	if (isset($_POST['search'])) {
		$search = addslashes($_POST['search']);
		if (empty($search)) {
        	if (isset($_GET['c'])) {
				$id = $_GET['c'];
				$catalogue = $id;
			}else{
				$catalogue = '';
			}

			if ($catalogue == '') {
				$sql = "SELECT count(id_sp) as total from san_pham";
			}elseif ($catalogue != '' ) {
				$catalogue = $id;
				$sql = "SELECT count(id_sp) as total from san_pham where id_loai='$catalogue'";
			}

        }else{
        	$catalogue = '';
			$sql = "SELECT count(id_sp) as total from san_pham where ten_sp like '%$search%'";
        }
	}else{
		if (isset($_GET['c'])) {
			$id = $_GET['c'];
			$catalogue = $id;
		}else{
			$catalogue = '';
		}

		if ($catalogue == '') {
			$sql = "SELECT count(id_sp) as total from san_pham";
		}elseif ($catalogue != '' ) {
			$catalogue = $id;
			$sql = "SELECT count(id_sp) as total from san_pham where id_loai='$catalogue'";
	}
	}
	
	//Get id loại sản phẩm.
	
	


			//Xử lí phân trang

			$query = mysql_query($sql);

			$row = mysql_fetch_assoc($query);

			$total_records = $row['total'];

			$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

			//Giới hạn sản phẩm của 1 trang
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

        	//Điểm bắt đầu

        	$start = ($current_page - 1) * $limit;


        	//Query

        	if (isset($_POST['search'])) {
        		$search = addslashes($_POST['search']);

        		if (empty($search)) {
        			if ($catalogue == '') {
						$query = mysql_query("SELECT * FROM san_pham ORDER BY id_sp DESC LIMIT $start, $limit");
					}elseif ($catalogue != '') {
						$query = mysql_query("SELECT * FROM san_pham where id_loai='$catalogue' ORDER BY id_sp DESC LIMIT $start, $limit");
					}
        		}else{
        			$catalogue = '';
        			$query = mysql_query("SELECT * from san_pham where ten_sp like '%$search%' ORDER BY id_sp DESC");
        		}
        		

        	}else {
        		$search = '';
        		if ($catalogue == '') {
					$query = mysql_query("SELECT * FROM san_pham ORDER BY id_sp DESC LIMIT $start, $limit");
				}elseif ($catalogue != '') {
					$query = mysql_query("SELECT * FROM san_pham where id_loai='$catalogue' ORDER BY id_sp DESC LIMIT $start, $limit");
				}
        	}

        ?>
<?php

//Xử lí phần header.

//Nếu không tồn tại $catalogue thì sẽ  là header mặc định.
//Nếu tồn tại $catalogue thì sẽ thay background-image và tên loại của sản phẩm.

	if (isset($_POST['search'])) {
		?>
			<div id="header-title" class="text-center" style="background-image: url('image/bg.jpg');">
				<div class="header-text">
					<h2>Search Results - <?php echo $search; ?></h2>
				</div>
			</div>
		<?php
	}else{
		if ($catalogue == '') {

			?>
			<div id="header-title" class="text-center" style="background-image: url('image/bg.jpg');">
				<div class="header-text">
					<h2>XuxuLipstick</h2>
				</div>
			</div>
			<?php

		}elseif ($catalogue != '') {
			$cat = "SELECT ten_loai,anh_nen from loai_sanpham where id_loai='$catalogue'";
			$catquery = mysql_query($cat);

			while ($rowc = mysql_fetch_assoc($catquery)) {
		
			?>
			<div id="header-title" class="text-center" style="background-image: url('image/<?php echo $rowc['anh_nen'] ?>');">
				<div class="header-text">
					<h2><?php echo $rowc['ten_loai'] ?></h2>
				</div>
			</div>
			<?php
			}
		}
	}
	
?>

<!-- Phần thông tin chính -->

<div id="main-prod">

<!-- Filter/Lọc -->

	<div class="filter col-sm-2 text-center">
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="search" class="form-control" placeholder="Tìm kiếm...">
				<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span> Tìm kiếm</button>
			</div>
		</form>
		<hr>
		<h4>By Catalogue</h4>

		<hr  width="15px" style="border:1px solid #000" />

		<?php 
              $sqllsp = "SELECT * From loai_sanpham";
              $querylsp = mysql_query($sqllsp);

              while ($rowlsp = mysql_fetch_array($querylsp)) {
                ?>
                <a href="Index.php?f=san-pham&c=<?php echo $rowlsp['id_loai'] ?>"><?php echo $rowlsp['ten_loai']; ?></a>
                <?php
              }
             ?>

		<hr>

		<h4>By Price</h4>
		<hr  width="15px" style="border:1px solid #000" />
		<div data-role="main" class="ui-content">
    		<form>
      		<div data-role="rangeslider">
        		<input type="range" name="price-min" id="price-min" value="1" min="0" max="180000">
        		<input type="range" name="price-max" id="price-max" value="180000" min="0" max="180000">
      		</div>
        		<input class="btn btn-default" type="submit" data-inline="true" value="Submit">
      		</form>
  		</div>
	</div>

<!-- List Sản phẩm -->

	<div class="prod col-sm-10">
	
        <?php
			//Vòng lặp in sản phẩm
			while ($row = mysql_fetch_assoc($query)) {
		?>

		<div class="product-show">
			
			<div class="caption-style-2" style="background-image: url(image/<?php echo $row['hinhanh_sp']; ?>);">
				
				<?php 
				//Nếu tồn tại giảm giá thì sẽ in ra giá giảm + %

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
							<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			
			<div class="title-prod text-center">
				<h3>
					<a href="index.php?f=detail-product&id=<?php echo $row['id_sp'] ?>" style="text-transform: uppercase;">
					<?php echo $row['ten_sp']; ?></a>
				</h3>
				<h4>
					<?php echo $deal; ?>
				</h4>
				<h5>
					<button class="btn btn-default">Thêm vào giỏ</button>
					<button class="btn btn-danger">Mua ngay</button>
				</h5>
			</div>
		</div>
		<?php
			}
		?>

		<div class="pagination text-center col-sm-12">
			<?php 
				//Nút Prev
				if ($current_page > 1 && $total_page > 1){
                	echo '<a href="index.php?f=san-pham&page='.($current_page-1).'">Prev</a> ';
            	}

            	for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                	if ($i == $current_page){
                    	echo '<span>'.$i.'</span> ';
                	}
                	else{
                    	echo '<a href="index.php?f=san-pham&page='.$i.'">'.$i.'</a> ';
                	}
            	}

            	//Nút Next
            	if ($current_page < $total_page && $total_page > 1){
                	echo '<a href="index.php?f=san-pham&page='.($current_page+1).'">Next</a>';
            	}
			?>
		</div>
	</div>
</div>