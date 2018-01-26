<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form cập nhật sách</title>
</head>
<body>
<?php
	include('connect.php');
	$id = $_GET['id'];
	$sql = "select * from book where id = {$id}";
	
	$recordset = mysql_query($sql);
	$row = mysql_fetch_array($recordset);
?>

<form name="form1" method="post" action="updatebook.php">
  <table width="500" border="1">
    <tr>
      <td colspan="2" align="center"><strong>Form cập nhật sách</strong></td>
    </tr>
    <tr>
      <td width="133">Mã sách:</td>
      <td width="351"><input name="txtid" type="text" 
      value="<?php echo $row['id']; ?>" size="40"></td>
    </tr>
    <tr>
      <td>Tiêu đề:</td>
      <td><input name="txttitle" type="text" value="<?php echo $row['title']; ?>" size="40"></td>
    </tr>
    <tr>
      <td>Giá:</td>
      <td><input name="txtprice" type="text" value="<?php echo $row['price']; ?>" size="40"></td>
    </tr>
    <tr>
      <td>Tác giả:</td>
      <td><input name="txtauthor" type="text" value="<?php echo $row['author']; ?>" size="40"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Cập nhật"></td>
    </tr>
  </table>
</form>
</body>
</html>