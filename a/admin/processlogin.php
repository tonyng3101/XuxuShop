<?php
	session_start();
	
	include('connect.php');
	
	$username = $_POST['txtusername'];
	$password = $_POST['txtpassword'];

	$sql = "select * from account where username = '{$username}' and password = '{$password}'";
	
	$recordset = mysql_query($sql);
	
	$row = mysql_fetch_array($recordset);
	
	if($row != null) {
		//luu thong tin session
		$_SESSION['username'] = $username;
		
		header('Location: listbook.php');
	} else {
		echo 'login failured';	
	}
	
?>