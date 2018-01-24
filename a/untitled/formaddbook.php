<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form thêm sách</title>
</head>
<body>
<form name="form1" method="post" action="addbook.php" enctype="multipart/form-data">
  <table width="500" border="0">
    <tr>
      <td colspan="2" align="center"><strong>Form thêm son</strong></td>
    </tr>
    <tr>
      <td width="133">Mã son:</td>
      <td width="351"><input name="txtid" type="text" id="txtid" size="40"></td>
    </tr>
    <tr>
      <td>Tên:</td>
      <td><input name="txtten" type="text" id="txtten" size="40"></td>
    </tr>
    <tr>
      <td>Giá:</td>
      <td><input name="txtgia" type="text" id="txtgia" size="40"></td>
    </tr>
    <tr>
      <td>Giảm giá:</td>
      <td><input name="txtgiamgia" type="text" id="txtgiamgia" size="40"></td>
    </tr>
    <tr>
      <td>Ảnh:</td>
      <td><input name="bookimage" type="file"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Thêm son"></td>
    </tr>
  </table>
</form>
</body>
</html>