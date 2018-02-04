<div class="content">
	<?php
		if(isset($_GET['f'])){
            $tam=$_GET['f'];
        }else{
            $tam= '';
		}

		if ($tam == '') {
			include 'modules/contents/home.php';
		}
		else if ($tam == 'san-pham') {
			include 'modules/contents/san-pham.php';
		}
		else if ($tam == 'log-in') {
			include 'modules/contents/log-in.php';
		}
		else if ($tam == 'log-out') {
			header('Location: modules/login/logout.php');
		}
		elseif ($tam == 'detail-product') {
			include 'modules/contents/detail-product.php';
		}
		elseif ($tam == 'addcart') {
			header('Location: modules/cart/addcart.php');
		}

	?>
</div>