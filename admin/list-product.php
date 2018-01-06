
<a class="edit" href="index.php?function=add">Thêm sản phẩm mới</a>


                
                	<?php
						//Kết nối
						$con = mysql_connect ('localhost','root','');
						mysql_select_db('tocotoco', $con);
						
						$sql = mysql_query('select * from menu');
						$sql2 = mysql_query('select * from type');
						
						$ten_sp = '';
					?>
                    <form action="index.php?function=search" method="post" style="float:right;margin-bottom:15px; margin-right:49px">
                    	<table border="0">
                        	<tr>
                            	<td><input type="text" name="txtname" value="<?php echo $ten_sp ?>" class="text-search" style="margin:5px 5px;; padding:5px 0px; border-radius:3px;" /></td>
                                <td>
                                <select name="type" class="list" style="padding:7px 5px; margin:5px 5px; border-radius:3px" class="text-search">
								<?php
                                    while($row1 = mysql_fetch_array($sql2)) {
                                ?>
                                    <option value="<?php echo $row1['id_type']; ?>"><?php echo $row1['name_type']; ?></option>
                                <?php } ?>
                                </select>
                                </td>
                                <td><button type="submit" class="btn btn-danger">Tìm kiếm</button></td>
                            </tr>
                        </table>
                    </form>
                    	<table border="1" class="product" width="100%" style="margin-top:20px;">
                        <tr height="50px" class="fiel">
                        	<td width="50px"><b>ID</b></td>
                            <td width="200px"><b>Tên sản phẩm</b></td>
                            <td width="130px"><b>Thao tác</b></td>
                        </tr>
                        <?php
							//Vòng lặp

							while ($row =  mysql_fetch_array($sql))
							{

						?>
                        <tr style=" <?php echo $style ?>">
                        	<td align="center"><?php echo $row['id_taste']; ?></td>
                            <td class="product" align="center">
                            	<a href="index.php?function=edit&amp;id=<?php echo $row['id_taste']; ?>">
                            	<img src="../images/<?php echo $row['image']; ?>" width="250px" />
                                </a>
                                <a href="index.php?function=edit&amp;id=<?php echo $row['id_taste']; ?>">
								<p><?php echo $row['name']; ?></p>
                                </a>
                            </td>
                            <td class="info"><a class="edit" href="index.php?function=edit&id=<?php echo $row['id_taste']; ?>">Sửa</a> - 
                            <a class="delete" href="index.php?function=delete&id=<?php echo $row['id_taste']; ?>" onclick="return confirm('Bạn có muốn xóa <?php echo $row['name'] ?>?')">Xóa</a></td>
                        </tr>
                        
                        <?php
							}
						?>
                        </table>