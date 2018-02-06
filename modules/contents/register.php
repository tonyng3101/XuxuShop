<?php
	if (isset($_SESSION['idkh'])) {
		header('Location: Index.php');
	}
?>
<div id="login" class="parallax text-center">
	<h1 style="font-family: 'GroteskBoldCond'; font-size: 112px; color: #fff; letter-spacing: 13.5px; padding-top: 15px;"> SIGN UP</h1>
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
  		<form action="modules/login/register.php" method="post">
  			<label class="lb">Họ tên:</label>
    		<input type="text" id="name" name="txtname" placeholder="Họ & tên" required>

    		<label class="lb">Tên đăng nhập:</label>
    		<input type="text" id="user" name="txtuser" placeholder="Tên đăng nhập" required>

    		<label class="lb">Email:</label>
    		<input type="text" id="email" name="txtemail" placeholder="Email" required>

    		<label class="lb">Mật khẩu:</label>
    		<input type="password" id="password" name="txtpassword" placeholder="Mật khẩu" required>

    		<label class="lb">Nhập lại mật khẩu:</label>
    		<input type="password" id="repass" name="txtrepass" placeholder="Tên đăng nhập" required>

    		<input type="submit" name="login" class="login login-submit" value="Đăng kí">
  		</form>
    
  	<div class="login-help">
    	Đã có tài khoản? <a href="index.php?f=log-in">Đăng nhập</a>
  	</div>
</div>
</div>
  </div>
</div>
