<!DOCTYPE html>
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<html lang="en">
    <head>                        
        <title>XUXU LIPSTICKS | Danh sách tài khoản</title>
        <link rel="icon" href="../image/logo-black.png" type="image/x-icon">           
        <!-- END TITLE -->            
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="css/styles.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>        
<?php
	//nhung noi dung cua file connect.php vao trang
	include('connect.php');
	//Tao cau truy van va thuc thi cau truy van
	$sql = 'select * from admin';
	
	//thuc thi cau truy van
	$recordset = mysql_query($sql);
?>       
        <!-- APP WRAPPER -->
        <div class="app">            
            
            <!-- START APP CONTAINER -->
            <div class="app-container">  
                          
                <?php include ('nvar-bar.php'); ?>
                
                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <?php include ('header.php'); ?>
                    <!-- END APP HEADER  -->
                    
                    <!-- START PAGE HEADING -->
                    <div class="app-heading app-heading-bordered app-heading-page">                        
                        <div class="title">
                            <h1 style="font-size: 20px;">Danh sách tài khoản</h1>
                            <p>Tài khoản trang quản trị</p>
                        </div>
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                            <a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">Tài khoản</li>
                            <li class="active">Danh sách tài khoản</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING -->                 
                    
                    <!-- START PAGE CONTAINER -->
                    <div class="container">
                        <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <div class="title">
                                    <h5>Danh sách tài khoản</h5>
                                </div>
                            </div>
                            <!-- END HEADING -->
                            
                            <div class="block-content">
                                
                         		<table class="table table-striped table-bordered datatable-extended">
                           			<thead>
                            			<tr>
                            				<th>STT</th>
                            				<th>Tài khoản</th>
                            				<th>Họ tên</th>
                            				<th>Email</th>                            				
                            				<th>Tình trạng</th>
                                            <th>Cấp</th>
                                            <th>Chi tiết</th>
                                            <?php
                                            $query_rank="SELECT * FROM admin WHERE id='{$_SESSION['uid']}' ";
                                            $results_rank=mysql_query($query_rank);
                                            $row_rank= mysql_fetch_array($results_rank);
                                            if($row_rank['rank']==1)
                                            {
                                            ?>
                                            <th>Reset pass</th>
                           				 	<th>Cập nhật</th>
                            				<th>Xóa</th>
                                            <?php } ?>
                        				</tr>
                    				</thead>
                    			<tbody>
                    				<?php
										//xu ly ket qua tra ve
										while($row = mysql_fetch_array($recordset)) {
										$stt = $row['status'];
										$status = '';
		
											if($stt == 0)
												$status = 'Chưa kích hoạt';
											else
												$status = 'Kích hoạt';
                                            //rank
                                        $stt = $row['rank'];
                                        $rank = '';
        
                                            if($stt == 1)
                                                $rank = 'Admin';
                                            else
                                                $rank = 'Nhân viên';
									?>
                        			<tr>
                                    	<td><?php echo $row['id']; ?></td>
                            			<td><?php echo $row['username']; ?></td>
                            			<td><?php echo $row['hoten']; ?></td>
                            			<td><?php echo $row['email']; ?></td>
                            			<td><?php echo $status; ?></td>
                                        <td><?php echo $rank; ?></td>
                                        <td><a href="chitiettaikhoan.php?id=<?php echo $row['id']; ?>">View</a></td>
                                        <?php
                                            if($row_rank['rank']==1)
                                            {
                                        ?>
                                        <td><a href="reset_user.php?id=<?php echo $row['id']; ?>"><span class="icon-sync"></span></a></td>
                            			<td><a href="capnhatuser.php?id=<?php echo $row['id']; ?>"><span class="icon-pencil"></span></a></td>
                            			<td><a href="delete_user.php?id=<?php echo $row['id']; ?>" onClick="return confirm('Bạn có thực sự muốn xóa không ?');"><span class="icon-trash"></span></a></td>
                                        <?php } ?>
                        			</tr>
                        			<?php } ?>
                   			 	</tbody>
                			</table>   
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- END PAGE CONTAINER -->
                    
                </div>
                <!-- END APP CONTENT -->
                                
            </div>
            <!-- END APP CONTAINER -->            
            
            <!-- START APP SIDEPANEL -->
            <div class="app-sidepanel scroll" data-overlay="show">                
                <div class="container">
                    
                    <div class="app-heading app-heading-condensed app-heading-small">
                        <div class="icon icon-lg">
                            <span class="icon-alarm"></span>
                        </div>
                        <div class="title">
                            <h2>Notifications</h2>              
                            <p><strong>7 new</strong>, latest: July 19, 2016 at 10:14:32.</p>
                        </div>                                
                    </div>        
            
                    <div class="listing margin-bottom-10">                                                                                
                        <div class="listing-item margin-bottom-10">
                            <strong>Product Delivered</strong> <span class="label label-success pull-right">delivered</span>
                            <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 19/07/2016 10:14:32 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Successful Payment</strong> <span class="label label-success pull-right">success</span>
                            <p class="margin-0 margin-top-5">Payment for order #SPW-955-17: <strong>$145.44</strong>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:55:12 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>New Order #SPW-955-17</strong> <span class="label label-warning pull-right">waiting</span>
                            <p class="margin-0 margin-top-5">Added new order, waiting for payment. <a href="#">Order details</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:51:55 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Money Back Request</strong> <span class="label label-primary pull-right">return</span>
                            <p class="margin-0 margin-top-5">#SPW-955-17 return requested. <a href="#">Request details</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 08:44:51 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>The critical amount of product</strong> <span class="label label-danger pull-right">important</span>
                            <p class="margin-0 margin-top-5">Product: <a href="#">Extra Awesome Product</a> (amount: <span class="text-danger">2</span>). <a href="#">Storehouse</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-cube margin-right-5"></span> 19/07/2016 08:30:00 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Product Delivery Start</strong> <span class="label label-warning pull-right">delivering</span>
                            <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Critical Server Load</strong> <span class="label label-danger pull-right">server</span>
                            <p class="margin-0 margin-top-5">Disk space: 248.1Gb/250Gb. <a href="#">Control panel</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                            </p>
                        </div>
                    </div>
                    <div class="row margin-bottom-30">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button class="btn btn-default btn-block">All Notification</button>
                        </div>            
                    </div>
                    
                    <div class="app-heading app-heading-condensed app-heading-small margin-bottom-20">
                        <div class="icon icon-lg">
                            <span class="icon-cog"></span>
                        </div>
                        <div class="title">
                            <h2>Settings</h2>              
                            <p>Notification Settings</p>
                        </div>                                
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_1" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Delivery Information</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_2" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Product Amount Information</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_3" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Order Information</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_4" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Server Load</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_5" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>User Registrations</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_6" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Purchase Information</label>
                            </div>
                        </div>            
                    </div>
                    
                </div>
            </div>
            <!-- END APP SIDEPANEL -->
            
            <!-- APP OVERLAY -->
            <div class="app-overlay"></div>
            <!-- END APP OVERLAY -->
        </div>        
        <!-- END APP WRAPPER -->                
        
        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END IMPORTANT SCRIPTS -->
        <!-- THIS PAGE SCRIPTS -->
        <script type="text/javascript" src="js/vendor/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/vendor/datatables/dataTables.bootstrap.min.js"></script>
        <!-- END THIS PAGE SCRIPTS -->
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/app_plugins.js"></script>
        <script type="text/javascript" src="js/app_demo.js"></script>
        <!-- END APP SCRIPTS -->
    </body>
</html>