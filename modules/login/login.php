<?php
	session_start();

	include '../connect.php';
	if (isset($_POST['login'])) {
		  $user = addslashes($_POST['user']);
  		$pass = addslashes($_POST['pass']);

  		if ($user == '' || $pass == '') {
  			header('Location: ../../index.php?function=log-in&error=unknow');
  		}else{
        $sql = "SELECT id_kh, username, password, ten_kh from khach_hang where username='".$user."'";

        $query = mysql_query($sql);
        $numrow = mysql_num_rows($query) ;

        if ($numrow == 0) {
          header('Location: ../../index.php?function=log-in&error=unknowuser');
        }else{
          $row = mysql_fetch_array($query);

          if ($pass != $row['password']) {
            header('Location: ../../index.php?function=log-in&error=unknowpass');
          }else{
            $_SESSION['idkh'] = $row['id_kh'];
            $_SESSION['namekh'] = $row['ten_kh'];
            header('Location: ../../index.php');
          }
        }
      }	
  }
?>