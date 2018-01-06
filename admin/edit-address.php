
<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco',$con);
	
	$id = $_GET['id'];
	$sql = "select * from store_address where id_store=".$id;

	$recordset = mysql_query($sql);
	$row = mysql_fetch_array($recordset);

?>
<form action="address/edit.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data" id="product-content">
<table>
	<tr>
    	<td colspan="10"><h3>Thông tin cơ bản</h3></td>
    <tr>
    <tr>
    	<td colspan="10"><hr  width="100%" align="left" /> </td>
    </tr>
	<tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Tên cửa hàng: </b></td>
         <td class="add" colspan="9">
         	<input type="text" name="txtname" maxlength="50" placeholder="Tên cửa hàng" value="<?php echo $row['name_store']; ?>" required/>
          </td>
    </tr>
    
    <tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Địa chỉ: </b></td>
         <td class="add" colspan="9">
         	<input type="text" name="txtprice" maxlength="50" placeholder="Địa chỉ cửa hàng" value="<?php echo $row['add_store']; ?>" required/>
         </td>
    </tr>
    
    <tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Phone: </b></td>
         <td class="add" colspan="9">
         	<input type="text" name="txtphone" maxlength="50" placeholder="Số điện thoại" value="<?php echo $row['phone_store']; ?>" required/>
         </td>
    </tr>
    
    <tr>
    	<td colspan="10"><hr  width="100%" align="left" /> </td>
    </tr>
    <tr>
    	<td colspan="10" align="center">
        	<button class="btnadd" type="submit">Lưu</button> <a href="address.php"><button class="btnback" type="button">Quay lại</button></a>
        </td>
    </tr>
</table>

</form>