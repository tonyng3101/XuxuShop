<?php
	if (isset($_SESSION['idkh'])) {
		header('Location: Index.php');
	}
?>
<div id="login" class="parallax text-center">
	<h1 style="font-family: 'GroteskBoldCond'; font-size: 112px; color: #fff; letter-spacing: 13.5px; padding-top: 100px;"> SIGN IN</h1>
	<hr  width="10px" color="#fff" style="border:2px solid #fff" />
	<div class="background-login">
	<div class="login-card">
		<span style="color: red;">
		<?php
			if (isset($_GET['error'])) {
				$error = $_GET['error'];
			}else{
				$error = '';
			}

			if ($error == 'unknow') {
				echo "Please enter username and password";
			}elseif ($error == 'unknowuser') {
				echo "Username is invalid";
			}elseif ($error == 'unknowpass') {
				echo "Password is invalid";
			}else {
				echo " ";
			}
		?>
		</span>
  		<form action="modules/login/login.php" method="post">
  			<label for="user" class="lb">Tên đăng nhập</label>
    		<input type="text" name="user" placeholder="Tên đăng nhập">
    		<label for="pass" class="lb">Mật khẩu</label>
    		<input type="password" name="pass" maxlength="16" placeholder="Mật khẩu">
    		<input type="submit" name="login" class="login login-submit" value="Đăng nhập">
  		</form>
    
  	<div class="login-help">
    	<a href="index.php?f=register">Đăng kí</a> • <a href="#">Quên mật khẩu</a>
  	</div>
</div>
</div>
  </div>
</div>
