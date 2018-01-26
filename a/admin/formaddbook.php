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
      <td colspan="2" align="center"><strong>Form thêm sách</strong></td>
    </tr>
    <tr>
      <td width="133">Mã sách:</td>
      <td width="351"><input name="txtid" type="text" id="txtid" size="40"></td>
    </tr>
    <tr>
      <td>Tiêu đề:</td>
      <td><input name="txttitle" type="text" id="txttitle" size="40"></td>
    </tr>
    <tr>
      <td>Giá:</td>
      <td><input name="txtprice" type="text" id="txtprice" size="40"></td>
    </tr>
    <tr>
      <td>Tác giả:</td>
      <td><input name="txtauthor" type="text" id="txtauthor" size="40"></td>
    </tr>
    <tr>
      <td>Ảnh:</td>
      <td><input name="bookimage" type="file"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Thêm sách"></td>
    </tr>
  </table>
</form>
</body>
</html>