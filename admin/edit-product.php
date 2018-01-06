
<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco',$con);
	$type = mysql_query('select * from type');
	
	$id = $_GET['id'];
	$sql = "select * from menu where id_taste=".$id;

	$recordset = mysql_query($sql);
	$row = mysql_fetch_array($recordset);

?>
<form action="product/edit.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data" id="product-content">
<table>
	<tr>
    	<td colspan="10"><h3>Thông tin cơ bản</h3></td>
    <tr>
    <tr>
    	<td colspan="10"><hr  width="100%" align="left" /> </td>
    </tr>
	<tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Tên sản phẩm: </b></td>
         <td class="add" colspan="9">
         	<input type="text" name="txtname" maxlength="50" placeholder="Tên sản phẩm" value="<?php echo $row['name'] ?>" required/>
          </td>
    </tr>
    
    <tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Giá: </b></td>
         <td class="add" colspan="9">
         	<input type="text" name="txtprice" maxlength="50" placeholder="Giá sản phẩm" value="<?php echo $row['price'] ?>" required/>
         </td>
    </tr>
    
	<tr>
        <th width="123px" scope="row">Danh mục: </th>
        <td>
        <select name="category" class="list">
        <?php
            while($row1 = mysql_fetch_array($type)) {
        ?>
            <option value="<?php echo $row1['id_type'];?>" <?php if($row1['id_type'] == $row['id_type']){echo 'selected="selected"';}?> >
				<?php echo $row1['name_type']; ?>
            </option>
        <?php } ?>
        </select>
        </td>
  	</tr>
    
    <tr>
    	<td style="width:123px;"><b>Hình ảnh: </b></td>
        <td colspan="9"><input type="file" name="file" /></td>
    </tr>
    <tr>
        <td colspan="10"><img src="../images/<?php echo $row['image']; ?>" width="250px" style="margin-top:15px" /></td>
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