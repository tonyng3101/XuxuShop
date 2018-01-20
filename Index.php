<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>XUXU LIPSTICKS | Chuyên hàng mỹ phẩm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="image/logo-black.png" type="image/x-icon">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login-form.css">
  
  <!-- Bootstrap -->
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans+Condensed:300,700|Montserrat:400|Roboto+Condensed:300,400,700&amp;subset=vietnamese" rel="stylesheet">
  <!-- Google Font -->
  <!--Font Awesome -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!--Font Awesome -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<?php
	//Include site
    include 'modules/connect.php';
    include 'modules/navigationbar.php';
    include 'modules/content.php';
    include 'modules/footer.php';
	?>
</body>
</html>