<div class="content">
	<?php
		if(isset($_GET['function'])){
            $tam=$_GET['function'];
        }else{
            $tam= '';
		}

		if ($tam == '') {
			include 'modules/contents/home.php';
		}else if ($tam == 'san-pham') {
			include 'modules/contents/san-pham.php';
		}else if ($tam == 'son-thoi') {
			include 'modules/contents/son-thoi.php';
		}else if ($tam == 'son-kem') {
			include 'modules/contents/son-kem.php';
		}else if ($tam == 'son-duong') {
			include 'modules/contents/son-duong.php';
		}else if ($tam == 'log-in') {
			include 'modules/contents/form-log-in.php';
		}
	?>
</div>