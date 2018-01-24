<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form đăng nhập</title>
</head>
<body>
<form name="form1" method="post" action="processlogin.php">
  <table width="500">
    <tr>
      <td colspan="2" align="center"><strong>Đăng nhập</strong></td>
    </tr>
    <tr>
      <td width="154">Tên đăng nhập</td>
      <td width="330"><input name="txtusername" type="text" id="txtusername" size="40"></td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td><input name="txtpassword" type="password" id="txtpassword" size="40"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Đăng nhập"></td>
    </tr>
  </table>
</form>

</body>
</html>