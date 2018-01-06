
<?php
	$con = mysql_connect('localhost','root','');
	mysql_select_db('tocotoco',$con);
	$sql = mysql_query('select * from store_address');
?>
<form action="address/add.php" method="post" enctype="multipart/form-data" id="product-content">
<table>
	<tr>
    	<td colspan="10"><h3>Thông tin cửa hàng</h3></td>
    <tr>
    <tr>
    	<td colspan="10"><hr  width="100%" align="left" /> </td>
    </tr>
	<tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Tên cửa hàng: </b></td>
         <td class="add" colspan="9"><input type="text" name="txtname" maxlength="50" placeholder="Tên cửa hàng" required/></td>
    </tr>
    
    <tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Địa chỉ: </b></td>
         <td class="add" colspan="9"><input type="text" name="txtadd" maxlength="50" placeholder="Địa chỉ cửa hàng" required/></td>
    </tr>
    
    <tr id="row2">
         <td style="padding-bottom:10px; width:70px;"><b>Số điện thoại: </b></td>
         <td class="add" colspan="9"><input type="text" name="txtphone" maxlength="50" placeholder="Số điện thoại" required/></td>
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