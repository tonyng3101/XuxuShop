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
                            <h1>Boooya - Admin Template</h1>
                            <p>The revolution in admin template build</p>
                        </div>               
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                            <a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">Application</a></li>                                                     
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING -->
                    
                    <!-- START PAGE CONTAINER -->
                    <div class="container">
                                                
                        <div class="row">
                            <div class="col-md-3">
                                
                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Sales Per Month</div>
                                                <div class="title pull-right"><span class="label label-success label-ghost label-bordered">+14.2%</span></div>
                                            </div>                                        
                                            <div class="intval">9,427</div>                                        
                                            <div class="line">
                                                <div class="subtitle">Total items sold</div>
                                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span> good</div>
                                            </div>
                                        </div>                                                                        
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Sales Per Year</div>
                                                <div class="title pull-right text-success">+32.9%</div>
                                            </div>                                        
                                            <div class="intval">24,834</div>
                                            <div class="line">
                                                <div class="subtitle">Total items sold</div>
                                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span> good</div>
                                            </div>
                                        </div>                                                                        
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Profit</div>
                                                <div class="title pull-right text-success">+9.2%</div>
                                            </div>                                        
                                            <div class="intval">539,277 <small>usd</small></div>
                                            <div class="line">
                                                <div class="subtitle">Frofit for the year</div>                                                
                                            </div>
                                        </div>                                                                        
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Outlay</div>
                                                <div class="title pull-right text-success">-12.7%</div>
                                            </div>                                        
                                            <div class="intval">45,385<small>usd</small></div>
                                            <div class="line">
                                                <div class="subtitle">Statistic per year</div>                                                
                                            </div>
                                        </div>                                                                        
                                        <!-- END WIDGET -->
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="col-md-3">
                                
                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="line">
                                                <div class="title">Visitors</div>
                                                <div class="title pull-right"><span class="label label-warning label-ghost label-bordered">-3.5%</span></div>
                                            </div>                                        
                                            <div class="intval">99,573</div>
                                            <div class="line">
                                                <div class="subtitle">Visitors per month</div>
                                                <div class="subtitle pull-right text-warning"><span class="icon-arrow-down"></span> normal</div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="line">
                                                <div class="title">Returned</div>
                                                <div class="title pull-right text-success">67.1%</div>
                                            </div>                                        
                                            <div class="intval">61,488</div>
                                            <div class="line">
                                                <div class="subtitle">Returned visitors per month</div>
                                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span></div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="line">
                                                <div class="title">New</div>
                                                <div class="title pull-right text-success">33.9%</div>
                                            </div>                                        
                                            <div class="intval">38,085</div>
                                            <div class="line">
                                                <div class="subtitle">New visitors per month</div>                                                
                                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span></div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="line">
                                                <div class="title">Registred</div>
                                                <div class="title pull-right">+458</div>
                                            </div>                                        
                                            <div class="intval">12,554</div>
                                            <div class="line">
                                                <div class="subtitle">Total registred users</div>                                                
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                </ul>
                                                                
                            </div>
                            <div class="col-md-3">
                                
                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>                                        
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-bubble"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">                                                    
                                                    <div class="line">
                                                        <div class="title">Messages</div>         
                                                        <div class="title pull-right"><span class="label label-success label-ghost label-bordered">3 NEW</span></div>
                                                    </div>                                        
                                                    <div class="intval text-left">39 / 1,589</div>                                        
                                                    <div class="line">
                                                        <div class="subtitle"><a href="#">Open all messages</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->                                        
                                    </li>
                                    <li>                                        
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-warning"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">                                                    
                                                    <div class="line">
                                                        <div class="title">Server Notifications</div>                                                        
                                                    </div>                                        
                                                    <div class="intval text-left">14 / 631</div>                                        
                                                    <div class="line">
                                                        <div class="subtitle"><a href="#">Open all notifications</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->                                        
                                    </li>
                                    <li>                                        
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-envelope"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">                                                    
                                                    <div class="line">
                                                        <div class="title">Inbox Mail</div>                                                        
                                                    </div>                                        
                                                    <div class="intval text-left">2 / 481</div>                                        
                                                    <div class="line">
                                                        <div class="subtitle"><a href="#">Open inbox messages</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->                                        
                                    </li>
                                    <li>                                        
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-users"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">                                                    
                                                    <div class="line">
                                                        <div class="title">Customers</div>             
                                                        <div class="title pull-right"><span class="label label-danger label-bordered">15 NEW</span></div>
                                                    </div>                                        
                                                    <div class="intval text-left">6,233</div>                                        
                                                    <div class="line">
                                                        <div class="subtitle"><a href="#">Open contact list</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->                                        
                                    </li>
                                </ul>
                                
                            </div>
                            <div class="col-md-3">
                                
                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>                                        
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-cloud-check"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">                                                    
                                                    <div class="line">
                                                        <div class="title">Total Server Load</div>
                                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> UP</div>
                                                    </div>                                        
                                                    <div class="intval text-left">85.2%</div>                                        
                                                    <div class="line">
                                                        <div class="subtitle">Latest back up: <a href="#">12/07/2016</a></div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <!-- END WIDGET -->                                        
                                    </li>
                                    <li>                                        
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-database"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">                                                    
                                                    <div class="line">
                                                        <div class="title">Database Load</div>
                                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> UP</div>
                                                    </div>                                        
                                                    <div class="intval text-left">43.16%</div>
                                                    <div class="line">
                                                        <div class="subtitle">4/10 databases used</div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <!-- END WIDGET -->                                        
                                    </li>
                                    <li>                                        
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-inbox text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">                                                    
                                                    <div class="line">
                                                        <div class="title">Disk Space</div>
                                                        <div class="subtitle pull-right text-danger"><span class="fa fa-times"></span> Critical</div>
                                                    </div>                                        
                                                    <div class="intval text-left">99.98%</div>
                                                    <div class="line">
                                                        <div class="subtitle">234.2GB / 240GB used</div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <!-- END WIDGET -->                                        
                                    </li>
                                    <li>                                        
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-heart-pulse"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">                                                    
                                                    <div class="line">
                                                        <div class="title">Proccessor</div>
                                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Normal</div>
                                                    </div>                                        
                                                    <div class="intval text-left">32.5%</div>
                                                    <div class="line">
                                                        <div class="subtitle">Intule Cori P7, 3.6Ghz</div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <!-- END WIDGET -->                                        
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-6">
                                
                                <!-- START PRODUCT SALES HISTORY -->
                                <div class="block block-condensed">
                                    <div class="app-heading">                                        
                                        <div class="title">
                                            <h2>Product Sales History</h2>
                                            <p>In comparison with "Purchase Button"</p>
                                        </div>              
                                        <div class="heading-elements">                                            
                                            <button type="button" class="btn btn-default btn-icon-fixed dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon-calendar-full"></span> June 13, 2016 - July 14, 2016
                                            </button>
                                            <ul class="dropdown-menu dropdown-form dropdown-left">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            
                                                            <div class="form-group margin-bottom-10">
                                                                <label>From:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><span class="icon-calendar-full"></span></div>
                                                                    <input type="text" class="form-control bs-datepicker" value="13/06/2016">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-md-6">
                                                            
                                                            <div class="form-group">                                                        
                                                                <label>To:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><span class="icon-calendar-full"></span></div>
                                                                    <input type="text" class="form-control bs-datepicker" value="13/07/2016">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-default btn-block">Confirm</button>
                                                </li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="block-content">
                                        <div class="app-chart-wrapper app-chart-with-axis">
                                            <div id="yaxis" class="app-chart-yaxis"></div>
                                            <div class="app-chart-holder" id="dashboard-chart-line" style="height: 325px;"></div>
                                            <div id="xaxis" class="app-chart-xaxis"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PRODUCT SALES HISTORY -->
                                
                            </div>
                            <div class="col-md-6">
                                
                                <!-- START LATEST TRANSACTIONS -->
                                <div class="block block-condensed">
                                    <div class="app-heading">                                        
                                        <div class="title">
                                            <h2>Latest Transactions</h2>
                                            <p>Quick information</p>
                                        </div>              
                                        <div class="heading-elements">
                                            <button class="btn btn-default btn-icon-fixed"><span class="icon-file-add"></span> All Transactions</button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="table-responsive">
                                            <table class="table table-clean-paddings margin-bottom-0">
                                                <thead>
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th width="150">Order</th>                                                    
                                                        <th width="150">Status</th>
                                                        <th width="55"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_2.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">John Doe</a>
                                                                    <span>on July 13, 2016</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-21</td>
                                                        <td><span class="label label-success label-bordered">Confirmed</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li> 
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li> 
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li> 
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_3.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">Juan Obrien</a>
                                                                    <span>on July 12, 2016</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-20</td>
                                                        <td><span class="label label-warning label-bordered">Waiting payment</span></td>                                                    
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li> 
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li> 
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li> 
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>                                                
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_4.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">Erin Stewart</a>
                                                                    <span>on July 12, 2016</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-18</td>
                                                        <td><span class="label label-success label-bordered">Confirmed</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li> 
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li> 
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li> 
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>                                                
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_5.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">Jeff Kuhn</a>
                                                                    <span>on July 11, 2016</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-17</td>
                                                        <td><span class="label label-danger label-bordered">Payment expired</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li> 
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li> 
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li> 
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>                                                
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_6.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">Jared Stevens</a>
                                                                    <span>on July 11, 2016</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-14</td>
                                                        <td><span class="label label-primary label-bordered">Delivered</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li> 
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li> 
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li> 
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END LATEST TRANSACTIONS -->
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                
                                <!-- START PURCHASE STATISTICS -->
                                <div class="block block-condensed">
                                    <div class="app-heading">                                        
                                        <div class="title">
                                            <h2>Purchase Statistics</h2>
                                            <p>Who purchase products</p>
                                        </div>              
                                        <div class="heading-elements">
                                            <button class="btn btn-default btn-icon-fixed"><span class="icon-sync"></span> Update</button>
                                        </div>
                                    </div>
                                    
                                    <div class="block-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">                                            
                                                    <label>20-25</label><span class="pull-right text-bold">37%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="37%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width: 37%"></div>
                                                    </div>                                            
                                                </div>
                                                <div class="form-group">                                            
                                                    <label>26-30</label><span class="pull-right text-bold">33%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="33%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%"></div>
                                                    </div>                                            
                                                </div>
                                                <div class="form-group">                                            
                                                    <label>31-40</label><span class="pull-right text-bold">25%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="25%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                                    </div>                                            
                                                </div>
                                                <div class="form-group">                                            
                                                    <label>41-50</label><span class="pull-right text-bold">12%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="15%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%"></div>
                                                    </div>                                            
                                                </div>
                                                <div class="form-group">                                            
                                                    <label>51+</label><span class="pull-right text-bold">3%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="3%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%"></div>
                                                    </div>                                            
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">                                            
                                                    <label>Male</label><span class="pull-right text-bold">75%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="75%">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                    </div>                                            
                                                </div>
                                                <div class="form-group">                                            
                                                    <label>Female</label><span class="pull-right text-bold">25%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="25%">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">                                            
                                                    <label>&lt; $25</label><span class="pull-right text-bold">68%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="68%">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%"></div>
                                                    </div>                                            
                                                </div>
                                                <div class="form-group">                                            
                                                    <label>> $26</label><span class="pull-right text-bold">22%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="22%">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                                    </div>                                            
                                                </div>
                                                <div class="form-group">                                            
                                                    <label>&lt; $100</label><span class="pull-right text-bold">10%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="10%">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PURCHASE STATISTICS -->
                                
                            </div>
                            <div class="col-md-4">
                                
                                <!-- START TOP STORES -->
                                <div class="block block-condensed">
                                    <div class="app-heading">                                        
                                        <div class="title">
                                            <h2>Locations</h2>
                                            <p>Statistics by locations</p>
                                        </div>              
                                        <div class="heading-elements">
                                            <button class="btn btn-default btn-icon-fixed"><span class="icon-sync"></span> Update</button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        
                                        <div id="dashboard-map" class="app-chart-holder" style="height: 285px;"></div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                
                                <!-- START TOP STORES -->
                                <div class="block block-condensed">
                                    <div class="app-heading">                                        
                                        <div class="title">
                                            <h2>Top 5 Stores</h2>
                                            <p>Best sellers per month</p>
                                        </div>              
                                        <div class="heading-elements">
                                            <button class="btn btn-default btn-icon-fixed"><span class="icon-store"></span>All Stores</button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        
                                        <div class="form-group">                                            
                                            <label>1. Shopnumone</label><span class="pull-right text-bold">135</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="75%">
                                                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">                                            
                                            <label>2. Best Shoptwo</label><span class="pull-right text-bold">121</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="70%">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">                                            
                                            <label>3. Third Awesome</label><span class="pull-right text-bold">107</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="65%">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">                                            
                                            <label>4. Alltranding</label><span class="pull-right text-bold">83</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="51%">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100" style="width: 51%"></div>
                                            </div>                                            
                                        </div>
                                        <div class="form-group">                                            
                                            <label>5. Shop Name</label><span class="pull-right text-bold">77</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="42%">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%"></div>
                                            </div>                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- END TOP STORES -->
                                
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