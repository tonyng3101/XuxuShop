
<?php 
include('connect.php');
?>

<div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
                    <a href="index.php" class="app-navigation-logo">
                        Boooya - Revolution Admin Template
                        <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel"><span class="icon-alarm"></span> <span class="app-navigation-logo-button-alert">7</span></button>
                    </a>
                    <nav>
                        <ul>
                        	
                                
                            <li class="title">PHẦN SẢN PHẨM</li>
                            <li><a href="index.php"><span class="nav-icon-hexa text-bloody-100">Tk</span> Thống kê</a></li>
                            <li><a href="documentation.php"><span class="nav-icon-hexa text-yellow-100">Dh</span> Đơn hàng <span class="label label-success label-bordered label-ghost">+2</span></a></li>
                            <?php
                                $query_rank="SELECT * FROM admin WHERE id='{$_SESSION['uid']}' ";
                                $results_rank=mysql_query($query_rank);
                                $row_rank= mysql_fetch_array($results_rank);
                                if($row_rank['rank']!=2)
                                {
                            ?>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-orange-100">Vd</span> Video </a>
                                <ul>                
                                  <li><a href="danhsachvideo.php"><span class="nav-icon-hexa">Ds</span>Danh sách</a></li>                        		  
                                  <li><a href="themvideo.php"><span class="nav-icon-hexa">Tm</span> Thêm mới</a></li>                        		
                              </ul>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-orange-100">Sp</span> Sản phẩm </a>
                                <ul>                
                                  <li><a href="danhsachsanpham.php"><span class="nav-icon-hexa">Ds</span>Danh sách</a></li>                               
                                  <li><a href="themmoisanpham.php"><span class="nav-icon-hexa">Tm</span> Thêm mới</a></li>                                
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-orange-100">Ls</span> Loại sản phẩm </a>
                                <ul>                
                                  <li><a href="danhsachloai.php"><span class="nav-icon-hexa">Ds</span>Danh sách</a></li>                               
                                  <li><a href="themmoiloaisanpham.php"><span class="nav-icon-hexa">Tm</span> Thêm mới</a></li>                                
                                </ul>
                            </li>
                            <?php
                                $query_rank="SELECT * FROM admin WHERE id='{$_SESSION['uid']}' ";
                                $results_rank=mysql_query($query_rank);
                                $row_rank= mysql_fetch_array($results_rank);
                                if($row_rank['rank']==1)
                                {
                            ?>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-orange-100">Sp</span> Tài khoản </a>
                                <ul>                
                                  <li><a href="danhsachtaikhoan.php"><span class="nav-icon-hexa">Ds</span>Danh sách</a></li>                               
                                  <li><a href="themtaikhoan.php"><span class="nav-icon-hexa">Tm</span> Thêm mới</a></li>                                
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>