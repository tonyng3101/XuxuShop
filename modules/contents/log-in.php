<?php
	session_start();
	if (isset($_SESSION['id'])) {
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
    		<input type="text" name="user" placeholder="Username...">
    		<input type="password" name="pass" maxlength="16" placeholder="Password...">
    		<input type="submit" name="login" class="login login-submit" value="Login">
  		</form>
    
  	<div class="login-help">
    	<a href="#">Register</a> • <a href="#">Forgot Password</a>
  	</div>
</div>
</div>
  </div>
</div>
