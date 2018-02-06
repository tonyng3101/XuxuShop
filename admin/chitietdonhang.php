<!DOCTYPE html>
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['uid'])) {
     header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>                        
        <!-- START TITLE -->                  
        <title>XUXU LIPSTICKS | Chi tiết hóa đơn</title>
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
        
        <!-- APP WRAPPER -->
        <div class="app">           

            <!-- START APP CONTAINER -->
            <div class="app-container">
                <div class="form-group">
                    <!-- START SIDEBAR -->
                    <?php include ('nvar-bar.php'); ?>
                    <!-- END SIDEBAR -->
                    
                
                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <?php include ('header.php'); ?>
                    <!-- END APP HEADER  -->
                    <div class="app-heading app-heading-bordered app-heading-page">                        
                        <div class="title">
                            <h1 style="font-size: 20px;">Chi tiết đơn hàng</h1>
                        </div>
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                            <a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="donhang.php">Đơn hàng</a></li>
                            <li class="active">Chi tiết đơn hàng</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING --> 
   
                    <!-- START PAGE CONTAINER -->
                    <div class="container">
                        <?php
                            include('connect.php');
                            $id = $_GET['id'];
                            $sql = "select * from don_hang where id_ls = {$id}";
                            $recordset = mysql_query($sql);
                            $row = mysql_fetch_array($recordset);

                            $sqlc = "select * from chitiet_donhang where id_ls = {$id}";
                            $rowc = mysql_fetch_array(mysql_query($sqlc));
                            $id_kh = $row['id_kh'];
                            $id_sp = $rowc['id_sp'];



                            $sqlkh = "select * from khach_hang where id_kh = {$id_kh}";
                            $rowkh = mysql_fetch_array(mysql_query($sqlkh));
                            

                            $sqlsp = "select * from san_pham where id_sp = {$id_sp}";
                            $rowsp = mysql_fetch_array(mysql_query($sqlsp));
                            
                            
                            $status = '';
                                    if ($row['status'] == 0) {
                                        $status = 'Hủy đơn hàng';
                                    }elseif ($row['status'] == 1) {
                                        $status = 'Chờ xác nhận';
                                    }elseif ($row['status'] == 2) {
                                        $status = 'Xác nhận đơn hàng';
                                    }elseif ($row['status'] == 3) {
                                        $status = 'Đã giao hàng';
                                    }
                        ?>
                        <div class="col-sm-4">
                            <img width="300px" height="300px" src="../image/anhtaikhoan/<?php echo $row['anh_daidien']; ?>" />
                        </div>
                        <div class="col-sm-8">
                     <form class="form-horizontal" name="form1" method="post" style="text-align: center;">
                        <div class="form-group" style="text-align: center; border-bottom: 2px solid #fff;">
   						 <label class="control-label col-sm-3">Mã đơn hàng:</label>
   							<div class="col-sm-5" style="padding-top: 10px; text-align: left;">          
        					  <?php echo $row['id_ls']; ?>
      						</div>
  						</div>
  						<div class="form-group" style="border-bottom: 2px solid #fff;">
   						 <label class="control-label col-sm-3">Mã khách hàng:</label>
   							<div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
        						<?php echo $row['id_kh']; ?>
      						</div>
  						</div>
                        <div class="form-group" style="text-align: center; border-bottom: 2px solid #fff;">
                         <label class="control-label col-sm-3">Tên sản phẩm:</label>
                            <div class="col-sm-3" style="padding-top: 10px; text-align: left;">          
                              <?php echo $rowsp['ten_sp']; ?>
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label col-sm-0">Số lượng:</label>        
                            </div>
                            <div class="col-sm-3" style="padding-top: 10px; text-align: left;">         
                              <?php echo $rowc['so_luong']; ?>
                            </div>
                        </div>
                        <div class="form-group" style="border-bottom: 2px solid #fff;">
   						 <label class="control-label col-sm-3">Tên tài khoản:</label>
   							<div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
        						<?php echo $row['username']; ?>
      						</div>
  						</div>
                        <div class="form-group" style="border-bottom: 2px solid #fff;">
                         <label class="control-label col-sm-3">Họ tên:</label>
                            <div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
                                <?php echo $rowkh['ten_kh']; ?>
                            </div>
                        </div>
                        <div class="form-group" style="border-bottom: 2px solid #fff;">
   						 <label class="control-label col-sm-3">Địa chỉ nhận hàng:</label>
   							<div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
        						<?php echo $row['address']; ?>
      						</div>
  						</div>
                        <div class="form-group" style="border-bottom: 2px solid #fff;">
                         <label class="control-label col-sm-3">Điện thoại:</label>
                            <div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
                                <?php echo $row['phone']; ?>
                            </div>
                        </div>
                        <div class="form-group" style="border-bottom: 2px solid #fff;">
                         <label class="control-label col-sm-3">Tổng số tiền:</label>
                            <div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
                                <?php echo $row['amount']; ?>
                            </div>
                        </div>
                        <div class="form-group" style="border-bottom: 2px solid #fff;">
                         <label class="control-label col-sm-3">Ghi chú đơn hàng:</label>
                            <div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
                                <?php echo $row['note']; ?>
                            </div>
                        </div>
                        <div class="form-group" style="border-bottom: 2px solid #fff;">
                         <label class="control-label col-sm-3">Tình trạng:</label>
                            <div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
                                <?php echo $status; ?>
                            </div>
                        </div>
                        <div class="form-group" style="border-bottom: 2px solid #fff;">
                         <label class="control-label col-sm-3">Ngày tạo:</label>
                            <div class="col-sm-5" style="padding-top: 10px;text-align: left;">          
                                <?php echo $row['created']; ?>
                            </div>
                        </div>
					</form>
                    </div>                                            
                </div>
            </div>
                    <!-- END PAGE CONTAINER -->
                   </div>            
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
            
            <!-- MODAL PREVIEW -->
            <div class="modal fade" id="preview" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>
                    
                    <div class="modal-content">
                        <div class="modal-body padding-5"></div>
                    </div>
                </div>            
            </div>
            <!-- END MODAL PREVIEW -->
            
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
        <script type="text/javascript" src="js/vendor/isotope/isotope.pkgd.min.js"></script>
        <!-- END THIS PAGE SCRIPTS -->
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/app_plugins.js"></script>
        <script type="text/javascript" src="js/app_demo.js"></script>
        <!-- END APP SCRIPTS -->
    </body>
</html>