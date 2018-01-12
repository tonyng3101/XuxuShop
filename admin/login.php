
<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['username']))
{
	header('Location: index.php');
}
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>XuxuShop</title>
  

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #000;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(https://media.istockphoto.com/photos/make-up-products-on-wooden-background-picture-id656296692);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 50px);
	left: calc(50% - 300px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family:"Comic Sans MS", cursive, sans-serif;
	font-size: 40px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #FFF;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #FFF;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 40px;
	background: #666;
	border: 1px solid #CCC;
	cursor: pointer;
	border-radius: 6px;
	color: #CCC;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
.required
{
	color:red;
	font-size:11px;
	padding-top:5px;
}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><b>Xuxu<span>Shop</span></b></div>
		</div>
		<br>
		<div class="login">
        <?php
	//Gọi file connect.php 
		include('connect.php');
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from admin where username = '$username' and password = '$password' ";
			$query = mysql_query($sql);
			$num_rows = mysql_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}
	}
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$error=array();
	if(empty($_POST['username']))
	{
		$error[]='username';
	}
	else
	{
		$username=$_POST['username'];
	}
	if(empty($_POST['password']))
	{
		$error[]='password';
	}
	else
	{
		$username=$_POST['password'];
	}
}
?>
        	<form method="POST" action="login.php">
				<input type="text" placeholder="username" name="username" id="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>">
                <?php
				if(isset($error) && in_array('username',$error))
				{
					echo "<p class='required'>Tài khoản không đc để trống</p>";
				}
				?>
				<input type="password" placeholder="password" name="password" id="password"><br>
                <?php
				if(isset($error) && in_array('password',$error))
				{
					echo "<p class='required'>Mật khẩu không đc để trống</p>";
				}
				?>
                <input type="submit" name="btn_submit" class="btn btn-primary" value="Đăng nhập">
            </form>
		</div>
        
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>


</html>
