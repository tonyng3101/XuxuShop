<!DOCTYPE html>
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['uid'])) {
	 header('Location: login.php');
}
?>
<html lang="en">
    <head>                        
        <title>Boooya - Revolution Admin Template</title>            
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="css/styles.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>        
        
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
                        <div class="icon icon-lg">
                            <span class="icon-laptop-phone"></span>
                        </div>
                        <div class="title">
                            <h1>Cập nhật</h1>
                            <p>The revolution in admin template build</p>
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
                            <li class="active">Cập nhật</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING -->
                    
                    <!-- START PAGE CONTAINER -->
                    <style type="text/css">
					.required
					{
						color:red;
					}
					</style>
                    <div class="container">
						<div class="row">
                        	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <?php
							include('connect.php');
							if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min_range'=>1)))
							{
								$id = $_GET['id'];
							}
							else
							{
								header('Location: danhsachtaikhoan.php');
								exit();
								
							}
							if($_SERVER['REQUEST_METHOD']=='POST')
							{
								$error=array();
								
								if(empty($_POST['hoten']))
								{
									$error[]='hoten';
								}
								else
								{
									$hoten=$_POST['hoten'];
								}
								if(empty($_POST['dienthoai']))
								{
									$error[]='dienthoai';
								}
								else
								{
									$dienthoai=$_POST['dienthoai'];
								}
								if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==TRUE)
								{
									$email=mysql_real_escape_string($_POST['email']);
								}
								else
								{
									$error[]='email';
								}
								if(empty($_POST['diachi']))
								{
									$error[]='diachi';
								}
								else
								{
									$diachi=$_POST['diachi'];
								}
								$status=$_POST['status'];
                                $rank=$_POST['rank'];
								if(empty($error))
								{
										$query_in="UPDATE admin
													SET hoten='{$hoten}',
														dienthoai='{$dienthoai}',
														email='{$email}',
														diachi='{$diachi}',
														status={$status},
                                                        rank={$rank}
													WHERE id={$id}
													";
										$results_in=mysql_query($query_in);
										if(mysql_affected_rows($conn)==1)
										{
											echo "<p style='color:green;'> Sửa  thành công</p>";
										}
										else
										{
											echo "<p class='required'>Sửa không thành công</p>";
										}
								}
								else
								{
									$message="<p class='required'>Bạn hãy nhập đầy đủ thông tin</p>";
								}
							}
							$query_id="SELECT username,hoten,dienthoai,email,diachi FROM admin WHERE id={$id}";
	
							$results_id=mysql_query($query_id);
							
							//Kiểm tra ID có tồn tại không
							if(mysql_num_rows($results_id)==1)
							{
								list($username,$hoten,$dienthoai,$email,$diachi)=mysql_fetch_array($results_id, MYSQL_NUM);
							}
							else
							{
								$message="<p class='required'>ID user không tồn tại</p>";
							}
							?>
                            	<form name="frmthemtaikhoan" method="POST">
                                	<?php
										if(isset($message))
										{
											echo $message;
										}
									?>
                                    <h3>Cập nhật tài khoản</h3>
                                    <div class="form-group">
                                    	<label> Tài khoản</label>
                                        <input type="text" name="username" value="<?php if(isset ($username)){echo $username;} ?>" class="form-control" placeholder="Tài khoản" readonly>
                                        <?php
											if(isset($error) && in_array('username',$error))
											{
												echo "<p class='required'> Tài khoản không để trống</p>";
											}
										?>
                                    </div>
                                    <div class="form-group">
                                    	<label>Họ tên</label>
                                        <input type="text" name="hoten" value="<?php if(isset ($hoten)){echo $hoten;} ?>" class="form-control" placeholder="Họ tên">
                                         <?php
											if(isset($error) && in_array('hoten',$error))
											{
												echo "<p class='required'>Họ tên không để trống</p>";
											}
										?>
                                    </div>
                                    <div class="form-group">
                                    	<label>Điện thoại</label>
                                        <input type="text" name="dienthoai" value="<?php if(isset ($dienthoai)){echo $dienthoai;} ?>" class="form-control" placeholder="Điện thoại">
                                         <?php
											if(isset($error) && in_array('dienthoai',$error))
											{
												echo "<p class='required'>Điện thoại không để trống</p>";
											}
										?>
                                    </div>
                                    <div class="form-group">
                                    	<label>Email</label>
                                        <input type="text" name="email" value="<?php if(isset ($email)){echo $email;} ?>" class="form-control" placeholder="Tài khoản">
                                         <?php
											if(isset($error) && in_array('email',$error))
											{
												echo "<p class='required'>Email không hợp lệ</p>";
											}
										?>
                                    </div>
                                    <div class="form-group">
                                    	<label>Địa chỉ</label>
                                        <input type="text" name="diachi" value="<?php if(isset ($diachi)){echo $diachi;} ?>" class="form-control" placeholder="Địa chỉ">
                                         <?php
											if(isset($error) && in_array('diachi',$error))
											{
												echo "<p class='required'>Địa chỉ không để trống</p>";
											}
										?>
                                    </div>
                                    <div class="form-group">
                                    	<label style="display:block;">Trạng thái:</label>
                                        <?php
											if(isset($status)==1)
											{
										?>
                                        <label class="radio-inline"><input checked="checked" type="radio" name="status" value="1">Kích hoạt</label>
                                        <label class="radio-inline"><input type="radio" name="status" value="0">Không kích hoạt</label>
                                        <?php
											}
											else
											{
												?>
                                                	<label class="radio-inline"><input checked="checked" type="radio" name="status" value="1">Kích hoạt</label>
                                        			<label class="radio-inline"><input type="radio" name="status" value="0">Không kích hoạt</label>
                                                <?php
											}
										?>
                                    </div>
                                    <div class="form-group">
                                        <label style="display:block;">Cấp:</label>
                                        <?php
                                            if(isset($rank)==1)
                                            {
                                        ?>
                                        <label class="radio-inline"><input checked="checked" type="radio" name="rank" value="1">Admin</label>
                                        <label class="radio-inline"><input type="radio" name="rank" value="0">Nhân viên</label>
                                        <?php
                                            }
                                            else
                                            {
                                                ?>
                                                    <label class="radio-inline"><input checked="checked" type="radio" name="rank" value="1">Admin</label>
                                                    <label class="radio-inline"><input type="radio" name="rank" value="0">Nhân viên</label>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Cập nhật">
                                </form>
                            </div>
                        </div> 
                    </div>
                    <!-- END PAGE CONTAINER -->
                    
                </div>
                <!-- END APP CONTENT -->
                                
            </div>
            
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
        <script type="text/javascript" src="js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap.min.js"></script>
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="js/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        
        <script type="text/javascript" src="js/vendor/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/vendor/rickshaw/rickshaw.min.js"></script>
        <!-- END THIS PAGE SCRIPTS -->
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/app_plugins.js"></script>
        <script type="text/javascript" src="js/app_demo.js"></script>
        <!-- END APP SCRIPTS -->
        <script type="text/javascript" src="js/app_demo_dashboard.js"></script>
    </body>
</html>