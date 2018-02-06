<div class="app-header">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                            <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                        </ul>
                        <form class="app-header-search" action="" method="post">        
                            <input type="text" name="keyword" placeholder="Search">
                        </form>    
                    
                        <ul class="app-header-buttons pull-right">
                            <li>
                                <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls">
                                    <?php 
                                    include('connect.php');
                                    $query=mysql_query("SELECT * FROM admin where id = '{$_SESSION['uid']}'");
                                    $row = mysql_fetch_array($query);
                                    if ($row['anh_daidien'] == '') {
                                        $anh_daidien = 'assets/images/users/user_1.jpg';
                                    }else{
                                        $anh_daidien = '../image/anhtaikhoan/'.$row['anh_daidien'];
                                    }
                                     ?>
                                    <img src="<?php echo $anh_daidien ?>" height="40px" alt="<?php echo $_SESSION['username']; ?>">
                                    <div class="contact-container">
                                        <a href="#"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?></a>
                                        <?php
                                        
                                        if($row['rank']==1)
                                        {
                                            echo '<p>Admin</p>';
                                        }
                                        else 
                                        {
                                            echo '<p>Nhân viên</p>';
                                        }
                                        ?>
                                    </div>
                                    <div class="contact-controls">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-default btn-icon" data-toggle="dropdown"><span class="icon-cog"></span></button>                        
                                            <ul class="dropdown-menu dropdown-left">
                                                <li><a href="capnhatuser.php?id=<?php echo $_SESSION['uid']; ?>"><span class="icon-user"></span>Profile</a></li> 
                                                <li><a href="doimatkhau.php"><span class="icon-cog"></span>Đổi mật khẩu</a></li>
                                                <li><a href="#"><span class="icon-users"></span> Contacts <span class="label label-default pull-right">76</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="logout.php"><span class="icon-exit"></span>Đăng xuất</a></li> 
                                            </ul>
                                        </div>                    
                                    </div>
                                </div>
                            </li>        
                        </ul>
                    </div>