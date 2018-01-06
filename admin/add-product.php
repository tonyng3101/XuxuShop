
<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco',$con);
	$sql = mysql_query('select * from type');
?>
<form action="product/add.php" method="post" enctype="multipart/form-data" id="product-content">
<table>
	<tr>
    	<td colspan="10"><h3>Thông tin sản phẩm</h3></td>
    <tr>
    <tr>
    	<td colspan="10"><hr  width="100%" align="left" /> </td>
    </tr>
	<tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Tên sản phẩm: </b></td>
         <td class="add" colspan="9"><input type="text" name="txtname" maxlength="50" placeholder="Tên sản phẩm" required/></td>
    </tr>
    
    <tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Giá: </b></td>
         <td class="add" colspan="9"><input type="text" name="txtprice" maxlength="50" placeholder="Giá sản phẩm" required/></td>
    </tr>
    
	<tr>
        <th width="123px" scope="row">Danh mục: </th>
        <td>
        <select name="category" class="list">
        <?php
            while($row = mysql_fetch_array($sql)) {
        ?>
            <option value="<?php echo $row['id_type']; ?>"><?php echo $row['name_type']; ?></option>
        <?php } ?>
        </select>
        </td>
  	</tr>
    
    <tr>
    	<td style="width:123px;"><b>Hình ảnh: </b></td>
        <td colspan="9"><input type="file" name="file" /></td>
    </tr>
    
    <tr>
    	<td colspan="10"><hr  width="100%" align="left" /> </td>
    </tr>
    <tr>
    	<td colspan="10" align="center">
        	<button class="btnadd" type="submit">Lưu</button> <a href="index.php"><button class="btnback" type="button">Quay lại</button></a>
        </td>
    </tr>
</table>

</form>