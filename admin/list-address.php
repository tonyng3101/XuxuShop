
<a class="edit" href="address.php?function=add">Thêm cửa hàng mới</a>


                
                	<?php
						//Kết nối
						$con = mysql_connect ('localhost','root','');
						mysql_select_db('tocotoco', $con);
						
						$sql = mysql_query('select * from store_address');
						
					?>
                    
                    	<table border="1" class="product" width="100%" style="margin-top:20px;">
                        <tr height="50px" class="fiel">
                        	<td width="50px"><b>ID</b></td>
                            <td width="200px"><b>Tên cửa hàng</b></td>
                            <td width="130px"><b>Thao tác</b></td>
                        </tr>
                        <?php
							//Vòng lặp

							while ($row =  mysql_fetch_array($sql))
							{

						?>
                        <tr style=" <?php echo $style ?>">
                        	<td align="center"><?php echo $row['id_store']; ?></td>
                            <td class="product" align="center">
                                <a href="address.php?function=edit&amp;id=<?php echo $row['id_store']; ?>">
								<p><?php echo $row['name_store']; ?></p>
                                </a>
                            </td>
                            <td class="info"><a class="edit" href="address.php?function=edit&id=<?php echo $row['id_store']; ?>">Sửa</a> - 
                            <a class="delete" href="address.php?function=delete&id=<?php echo $row['id_store']; ?>" onclick="return confirm('Bạn có muốn xóa <?php echo $row['name_store'] ?>?')">Xóa</a></td>
                        </tr>
                        
                        <?php
							}
						?>
                        </table>