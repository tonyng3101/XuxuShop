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
		elseif ($tam == 'san-pham') {
			include 'modules/contents/san-pham.php';
		}
		elseif ($tam == 'log-in') {
			include 'modules/contents/log-in.php';
		}
		elseif ($tam == 'register') {
			include 'modules/contents/register.php';
		}
		elseif ($tam == 'log-out') {
			header('Location: modules/login/logout.php');
		}
		elseif ($tam == 'detail-product') {
			include 'modules/contents/detail-product.php';
		}
		elseif ($tam == 'cart') {
			include 'modules/contents/cart.php';
		}
		elseif ($tam == 'payment') {
			include 'modules/contents/payment.php';
		}
		elseif ($tam == 'checkout') {
			include 'modules/contents/checkout.php';
		}
	?>
</div>