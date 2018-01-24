<!-- <?php
    $sqlcheckrole="SELECT * FROM admin WHERE id={$_SESSION['uid']}";
    $checkrole=mysql_query($sqlcheckrole);
    $checkrole_row=mysql_fetch_assoc($checkrole);
    $current_url=$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI'];
    $current_tach=explode('/', $current_url);
    $tm=count($current_tach);
    echo $tm;
    $dem_mt=1;
    foreach ($current_tach as $current_tach2)
    {
        if ($dem_mt == $tm) 
        {
            if (isset($_GET['id'])) 
            {
                $current_tach2_id=explode('?',$current_tach2);
            }

            $mangthaythe=array();
            $tachcheckrole=explode(',',$checkrole_row['role']);
            $demthay=1;
            foreach ($tachcheckrole as $tachcheckrole_it) 
            {
                if ($demthay>1) 
                {
                    $tachcheckrole2=explode('-',$tachcheckrole_it);
                    $mangthaythe[]=array(
                        'link2' => $tachcheckrole2[2],
                        'link3' => $tachcheckrole2[3],
                        'link4' => $tachcheckrole2[4],
                        'link5' => $tachcheckrole2[5],
                    );
                    $okc=0;
                    foreach ($mangthaythe as $itemthay) 
                    {
                        if (isset($_GET['id'])) 
                        {
                            if ($current_tach2_id[0] == $itemthay['link4'] || $current_tach2_id[0] == $itemthay['link5']) 
                            {
                                $okc=1;
                                break;
                            }
                        }
                        else
                        {
                            if ($current_tach2 == $itemthay['link2'] || $current_tach2 == $itemthay['link3']) 
                            {
                                $okc=1;
                                break;
                            }
                        }
                    }
                }
                    
                $demthay++;   
            }
             
        }
        $dem_mt++;
    }
    if ($okc <> 1) 
    {
        echo '<script>alert("Bạn không có quyền vào linh này")</script>';
        $dem_mtch=1;
        foreach ($current_tach as $current_tach_ch2) 
        {
            if ($dem_mtch == $tm) 
            {
                if ($current_tach_ch2!="index.php") 
                {
                    header('Location: danhsachsanpham.php');
                }
            }
            $dem_mtch++;
        }
    }

?> -->
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
                                    <img src="assets/images/users/user_1.jpg" alt="John Doe">
                                    <div class="contact-container">
                                        <a href="#"><?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} ?></a>
                                        <span>Administrator</span>
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