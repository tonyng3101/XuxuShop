<!DOCTYPE html>
<html lang="en">
    <head>                        
        <title>Boooya - Sortable Tables</title>            
        
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
<?php
	//nhung noi dung cua file connect.php vao trang
	include('connect.php');
	
	$username = '';
	
	if(isset($_SESSION['username']))
		$username = $_SESSION['username'];
	else
		$username = 'khách';
	
	//Tao cau truy van va thuc thi cau truy van
	$sql = 'select * from san_pham';
	
	//thuc thi cau truy van
	$recordset = mysql_query($sql);
?>       
        <!-- APP WRAPPER -->
        <div class="app">            
            
            <!-- START APP CONTAINER -->
            <div class="app-container">                
                <!-- START SIDEBAR -->
                <div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
                    <a href="index.html" class="app-navigation-logo">
                        Boooya - Revolution Admin Template
                        <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel"><span class="icon-alarm"></span> <span class="app-navigation-logo-button-alert">7</span></button>
                    </a>
                    <nav>
                        <ul>
                            <li class="title">PHẦN SẢN PHẨM</li>
                            <li><a href="index.php"><span class="nav-icon-hexa text-bloody-100">Tk</span> Thống kê</a></li>
                            <li><a href="documentation.php"><span class="nav-icon-hexa text-yellow-100">Dh</span> Đơn hàng <span class="label label-success label-bordered label-ghost">+2</span></a></li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-orange-100">Sp</span> Sản phẩm </a>
                                <ul>                                
                                    <li><a href="danhsachsanpham.php"><span class="nav-icon-hexa">Ds</span> Danh sách sản phẩm</a></li>
                                    <li><a href="themmoisanpham.php"><span class="nav-icon-hexa">Tm</span> Thêm sản phẩm</a></li>          
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Ls</span> Loại sản phẩm </a>
                                        <ul>                
                                            <li><a href="danhsachloai.php"><span class="nav-icon-hexa">Ds</span> Danh sách loại</a></li>                        
                                            <li><a href="pages-payment-pricing.html"><span class="nav-icon-hexa">Tm</span> Thêm loại</a></li>                        
                                        </ul>
                                    </li>
                                </ul>
                            </li> 
                            <li class="title">PHẦN KHÁCH HÀNG</li>
                            <li><a href="cauhoikhachhang.php"><span class="nav-icon-hexa text-bloody-100">Ch</span>Câu hỏi khách hàng</a></li> 
                            <li class="title">LAYOUTS</li>                
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-lime-200">Lc</span> Layout Components</a>
                                <ul>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Hd</span> Headers</a>
                                        <ul>                
                                            <li><a href="layouts-header.html"><span class="nav-icon-hexa">Sm</span> Simple</a></li>
                                            <li><a href="layouts-header-inside.html"><span class="nav-icon-hexa">Ic</span> Insde Content</a></li>
                                            <li><a href="layouts-header-fixed.html"><span class="nav-icon-hexa">Fh</span> Fixed Header</a></li>
                                            <li><a href="layouts-header-title.html"><span class="nav-icon-hexa">Wt</span> With Title</a></li>
                                            <li><a href="layouts-header-navigation.html"><span class="nav-icon-hexa">Sn</span> Simple Navigation</a></li>
                                            <li><a href="layouts-header-navigation-custom.html"><span class="nav-icon-hexa">Sh</span> Simple Navigation (Hover Item)</a></li>
                                            <li><a href="layouts-header-navigation-extended.html"><span class="nav-icon-hexa">En</span> Extended Navigation</a></li>
                                        </ul>
                                    </li>
                                    <li>                                                                
                                        <a href="#"><span class="nav-icon-hexa">Sb</span> Sidebars</a>
                                        <ul>
                                            <li><a href="layouts-sidebar-left.html"><span class="nav-icon-hexa">Ls</span> Left Sidebar</a></li>
                                            <li><a href="layouts-sidebar-right.html"><span class="nav-icon-hexa">Rs</span> Right Sidebar</a></li>
                                            <li><a href="layouts-sidebar-left-right.html"><span class="nav-icon-hexa">Lr</span> Left & Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>                                                                
                                        <a href="#"><span class="nav-icon-hexa">Nv</span> Navigation</a>
                                        <ul>
                                            <li><a href="layouts-navigation-default.html"><span class="nav-icon-hexa">Df</span> Default</a></li>
                                            <li><a href="layouts-navigation-default-fixed.html"><span class="nav-icon-hexa">Fx</span> Default Fixed</a></li>
                                            <li><a href="layouts-navigation-close-other.html"><span class="nav-icon-hexa">Co</span> Close Other</a></li>
                                            <li><a href="layouts-navigation-hidden.html"><span class="nav-icon-hexa">Hd</span> Hidden</a></li>
                                            <li><a href="layouts-navigation-minimized.html"><span class="nav-icon-hexa">Mz</span> Minimized</a></li>
                                            <li><a href="layouts-navigation-open-hover.html"><span class="nav-icon-hexa">Oh</span> Open On Hover</a></li>
                                            <li><a href="layouts-navigation-light.html"><span class="nav-icon-hexa">Ct</span> Custom Theme</a></li>
                                            <li><a href="layouts-navigation-mobile.html"><span class="nav-icon-hexa">Ms</span> Mobile Style (Simple)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Cn</span> Content</a>
                                        <ul>
                                            <li><a href="layouts-content-resizable.html"><span class="nav-icon-hexa">Rz</span> Resizable</a></li>
                                            <li><a href="layouts-content-tabbed.html"><span class="nav-icon-hexa">Tb</span> Tabbed Content</a></li>
                                            <li><a href="layouts-content-tabbed-controls.html"><span class="nav-icon-hexa">Tc</span> Tabbed Content (Controls)</a></li>                
                                            <li><a href="layouts-content-separated.html"><span class="nav-icon-hexa">Sc</span> Separated Content</a></li>                
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Sp</span> Sidepanels</a>
                                        <ul>
                                            <li><a href="layouts-sidepanel.html"><span class="nav-icon-hexa">Df</span> Default</a></li>
                                            <li><a href="layouts-sidepanel-overlay.html"><span class="nav-icon-hexa">Wo</span> With Overlay</a></li>
                                        </ul>
                                    </li>  
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Fo</span> Footers</a>
                                        <ul>
                                            <li><a href="layouts-footer-default.html"><span class="nav-icon-hexa">Sm</span> Simple</a></li>
                                            <li><a href="layouts-footer-extended.html"><span class="nav-icon-hexa">Et</span> Extended</a></li>
                                            <li><a href="layouts-footer-custom.html"><span class="nav-icon-hexa">Cd</span> Custom Design</a></li>                
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-green-100">Lo</span> Layout Options</a>            
                                <ul>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Ln</span> Left Navigation</a>                                        
                                        <ul>
                                            <li><a href="layouts-option-basic.html"><span class="nav-icon-hexa">Bs</span> Basic</a></li>
                                            <li><a href="layouts-option-basic-header.html"><span class="nav-icon-hexa">Wh</span> With Header</a></li>
                                            <li><a href="layouts-option-basic-footer.html"><span class="nav-icon-hexa">Wf</span> With Footer</a></li>
                                            <li><a href="layouts-option-basic-header-footer.html"><span class="nav-icon-hexa">Hf</span> Header & Footer</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Tn</span> Top Navigation</a>
                                        <ul>
                                            <li><a href="layouts-option-topnav-header.html"><span class="nav-icon-hexa">Hn</span> Header Navigation</a></li>
                                            <li><a href="layouts-option-topnav-horizontal.html"><span class="nav-icon-hexa">Hz</span> Horizontal Navigation</a></li>
                                            <li><a href="layouts-option-topnav-horizontal-boxed.html"><span class="nav-icon-hexa">Hb</span> Horizontal Navigation (Boxed)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Bx</span> Boxed</a>                                        
                                        <ul>
                                            <li><a href="layouts-option-boxed.html"><span class="nav-icon-hexa">Bs</span> Basic</a></li>
                                            <li><a href="layouts-option-boxed-custom.html"><span class="nav-icon-hexa">Wm</span> With Margin</a></li>
                                            <li><a href="layouts-option-boxed-content.html"><span class="nav-icon-hexa">Bc</span> Boxed Content</a></li>
                                        </ul>
                                    </li>
                                </ul>                        
                            </li>
                            
                            <li class="title">COMPONENTS</li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-sea-100">Ue</span> UI Elements <span class="label label-success label-bordered label-ghost">+2</span></a>
                                <ul>                                
                                    <li><a href="components-blocks-panels.html"><span class="nav-icon-hexa">Bp</span> Blocks & Panles</a></li>
                                    <li><a href="components-widgets.html"><span class="nav-icon-hexa">Wi</span> Widgets & Informers</a></li>
                                    <li><a href="components-tabs-accordion.html"><span class="nav-icon-hexa">Ta</span> Tabs & Accordions</a></li>
                                    <li><a href="components-alerts-notifications.html"><span class="nav-icon-hexa">An</span> Alerts & Notifications</a></li>
                                    <li><a href="components-modals-popups.html"><span class="nav-icon-hexa">Mp</span> Modals & Popups</a></li>
                                    <li><a href="components-dropdowns.html"><span class="nav-icon-hexa">Dd</span> Dropdowns</a></li>
                                    <li><a href="components-buttons.html"><span class="nav-icon-hexa">Bt</span> Buttons</a></li>                
                                    <li><a href="components-progressbar.html"><span class="nav-icon-hexa">Pb</span> Progress Bars</a></li>                                
                                    <li><a href="components-pagination.html"><span class="nav-icon-hexa">Pt</span> Pagination</a></li>                                
                                    <li><a href="components-spinners.html"><span class="nav-icon-hexa">Sp</span> Spinners</a></li>
                                    <li><a href="components-tour.html"><span class="nav-icon-hexa">To</span> Tour <span class="label label-success label-bordered label-ghost">new</span></a></li>
                                    <li><a href="components-help-classes.html"><span class="nav-icon-hexa">Hc</span> Help Classes <span class="label label-success label-bordered label-ghost">new</span></a></li>                  
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Lt</span> Lists</a>
                                        <ul>                
                                            <li><a href="components-lists.html"><span class="nav-icon-hexa">Bl</span> Basic Lists</a></li>
                                            <li><a href="components-user-contacts.html"><span class="nav-icon-hexa">Uc</span> User & Contacts</a></li>
                                            <li><a href="components-tiles.html"><span class="nav-icon-hexa">Te</span> Tiles</a></li>
                                            <li><a href="components-news-info.html"><span class="nav-icon-hexa">Ni</span> News & Info</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Tg</span> Typography</a>
                                        <ul>
                                            <li><a href="components-typography.html"><span class="nav-icon-hexa">Tp</span> Typography</a></li>
                                            <li><a href="components-labels-badges.html"><span class="nav-icon-hexa">Lb</span> Labels & Badges</a></li>
                                            <li><a href="components-text-heading.html"><span class="nav-icon-hexa">Th</span> Text Heading</a></li>
                                            <li><a href="components-heading.html"><span class="nav-icon-hexa">Pb</span> Page & Block Heading</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-teal-100">Fe</span> Features</a>
                                <ul>                
                                    <li><a href="components-features-gallery.html"><span class="nav-icon-hexa">Cg</span> Compact Gallery</a></li>
                                    <li><a href="components-features-tips.html"><span class="nav-icon-hexa">Tp</span> Tips</a></li>
                                    <li><a href="components-features-loading.html"><span class="nav-icon-hexa">Ld</span> Loading</a></li>
                                    <li><a href="components-features-statusbar.html"><span class="nav-icon-hexa">Sb</span> Status Bar</a></li>
                                    <li><a href="components-features-preview.html"><span class="nav-icon-hexa">Pv</span> Preview</a></li>
                                </ul>
                            </li>        
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-blue-100">Ic</span> Icons</a>
                                <ul>
                                    <li><a href="components-icons-fontawesome.html"><span class="nav-icon-hexa">Fa</span> Font Awesome</a></li>
                                    <li><a href="components-icons-linearicons.html"><span class="nav-icon-hexa">Li</span> Linearicons</a></li>                
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-darkblue-100">Tb</span> Tables</a>
                                <ul>
                                    <li><a href="components-tables-default.html"><span class="nav-icon-hexa">Df</span> Default</a></li>
                                    <li><a href="danhsachloai.php"><span class="nav-icon-hexa">Sa</span> Sortable</a></li>
                                    <li><a href="components-tables-export.html"><span class="nav-icon-hexa">Et</span> Export Tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-navyblue-100">Ch</span> Charts</a>
                                <ul>                                
                                    <li><a href="components-charts-morris.html"><span class="nav-icon-hexa">Mc</span> Morris Charts</a></li>
                                    <li><a href="components-charts-rickshaw.html"><span class="nav-icon-hexa">Rc</span> Rickshaw Charts</a></li>
                                    <li><a href="components-charts-other.html"><span class="nav-icon-hexa">Ot</span> Other</a></li>                
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-indigo-100">Mp</span> Maps</a>
                                <ul>
                                    <li><a href="components-maps-jvectormap.html"><span class="nav-icon-hexa">Jm</span> jVectorMap</a></li>
                                    <li><a href="components-maps-google.html"><span class="nav-icon-hexa">Gm</span> Google Maps</a></li>
                                </ul>
                            </li>
                            
                            <li class="title">FORMS</li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-purple-100">Fe</span> Form Elements <span class="label label-success label-bordered label-ghost">+2</span></a>
                                <ul>
                                    <li><a href="forms-elements-basic.html"><span class="nav-icon-hexa">Be</span> Basic Elements</a></li>
                                    <li><a href="forms-elements-checkbox-radio.html"><span class="nav-icon-hexa">Cr</span> Checkbox, Radio & Switch</a></li>
                                    <li><a href="forms-elements-select-datepicker.html"><span class="nav-icon-hexa">Sd</span> Select & Datepicker <span class="label label-success label-bordered label-ghost">new</span></a></li>
                                    <li><a href="forms-elements-valudation-states.html"><span class="nav-icon-hexa">Vs</span> Validation States</a></li>
                                    <li><a href="forms-elements-input-groups.html"><span class="nav-icon-hexa">Ig</span> Input Group</a></li>
                                    <li><a href="forms-elements-file-handling.html"><span class="nav-icon-hexa">Fh</span> File Handling</a></li>                
                                    <li><a href="forms-elements-other.html"><span class="nav-icon-hexa">Ot</span> Other <span class="label label-success label-bordered label-ghost">new</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-magenta-100">Vd</span> Validation</a>
                                <ul>
                                    <li><a href="forms-valudation-engine.html"><span class="nav-icon-hexa">Ve</span> Validation Engine</a></li>
                                    <li><a href="forms-valudation-helpers.html"><span class="nav-icon-hexa">Mh</span> Masked Helpers</a></li>                                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-pink-100">Ma</span> Miscellaneous <span class="label label-success label-bordered label-ghost">+1</span></a>
                                 <ul>
                                    <li><a href="forms-wysiwyg-editors.html"><span class="nav-icon-hexa">We</span> WYSIWYG Editors</a></li>
                                    <li><a href="forms-code-preview.html"><span class="nav-icon-hexa">Cp</span> Code Preview</a></li>
                                    <li><a href="forms-wizard.html"><span class="nav-icon-hexa">Fw</span> Form Wizard <span class="label label-success label-bordered label-ghost">new</span></a></li>
                                </ul>
                            </li>
                            
                            <li class="title">Navigation Examples</li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-maroon-100">Ic</span> Nav Element Icons</a>
                                <ul>
                                    <li><a href="#"><span class="nav-icon-hexa">Hw</span> Hexagon With Text</a></li>
                                    <li><a href="#"><span class="nav-icon-cube">Cb</span> Cube With Text</a></li>
                                    <li><a href="#"><span class="nav-icon-circle">Ct</span> Circle With Text</a></li>                
                                    <li><a href="#"><span class="icon-laptop-phone"></span> Linearicon icon</a></li>
                                    <li><a href="#"><span class="fa fa-cog"></span> FontAwesome icon</a></li>
                                </ul>            
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa text-orange-100">El</span> Element With Label <span class="label label-warning label-bordered label-ghost">label</span></a>
                                 <ul>
                                    <li><a href="#"><span class="nav-icon-hexa">Dl</span> Default Label <span class="label label-default">38</span></a></li>                
                                    <li><a href="#"><span class="nav-icon-hexa">La</span> Label With Animation <span class="label label-warning animated infinite rubberBand">hey!</span></a></li>                
                                </ul>            
                            </li>
                            
                            <li class="title">RTL</li>
                            <li><a href="rtl.html"><span class="nav-icon-hexa text-yellow-100">Rs</span> RTL Support</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- END SIDEBAR -->
                
                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
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
                                        <a href="#">John Doe</a>
                                        <span>Administrator</span>
                                    </div>
                                    <div class="contact-controls">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-default btn-icon" data-toggle="dropdown"><span class="icon-cog"></span></button>                        
                                            <ul class="dropdown-menu dropdown-left">
                                                <li><a href="#"><span class="icon-cog"></span> Settings</a></li> 
                                                <li><a href="#"><span class="icon-envelope"></span> Messages <span class="label label-danger pull-right">+24</span></a></li>
                                                <li><a href="#"><span class="icon-users"></span> Contacts <span class="label label-default pull-right">76</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><span class="icon-exit"></span> Log Out</a></li> 
                                            </ul>
                                        </div>                    
                                    </div>
                                </div>
                            </li>        
                        </ul>
                    </div>
                    <!-- END APP HEADER  -->
                    
                    <!-- START PAGE HEADING -->
                    <div class="app-heading app-heading-bordered app-heading-page">                        
                        <div class="title">
                            <h1>Danh sách sản phẩm</h1>
                            <p>Frequently Asked Questions</p>
                        </div>
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                            <a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">Phần sản phẩm</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li class="active">Danh sách sản phẩm</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING -->                 
                    
                    <!-- START PAGE CONTAINER -->
                    <div class="container">
                        <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <div class="title">
                                    <h5>Danh sách sản phẩm</h5>
                                    <p>Add class <code>datatable-extended</code> to get full-featured sortable table.</p>
                                </div>
                            </div>
                            <!-- END HEADING -->
                            
                            <div class="block-content">
                                
                         		<table class="table table-striped table-bordered datatable-extended">
                           			<thead>
                            			<tr>
                            				<th>STT</th>
                            				<th>Tên sản phẩm</th>
                            				<th>Giá sản phẩm</th>
                            				<th>Giảm giá</th>
                            				<th>Giới thiệu sản phẩm</th>
                            				<th>Mô tả</th>
                            				<th>Hình ảnh</th>
                            				<th>Danh sách hình ảnh</th>
                            				<th>Tình trạng</th>
                           				 	<th>Cập nhật</th>
                            				<th>Xóa</th>
                        				</tr>
                    				</thead>
                    			<tbody>
                    				<?php
										//xu ly ket qua tra ve
										while($row = mysql_fetch_array($recordset)) {
										$stt = $row['status'];
										$status = '';
		
											if($stt == 0)
												$status = 'Hết hàng';
											else
												$status = 'Còn hàng';
									?>
                        			<tr>
                            			<td><?php echo $row['id_sp']; ?></td>
                            			<td><?php echo $row['ten_sp']; ?></td>
                            			<td><?php echo $row['gia_sp']; ?></td>
                            			<td><?php echo $row['giam_gia']; ?></td>
                            			<td><?php echo $row['gioithieu_sp']; ?></td>
                            			<td><?php echo $row['mota_sp']; ?></td>
                            			<td><?php echo $row['hinhanh_sp']; ?></td>
                            			<td><?php echo $row['ds_hinhanh']; ?></td>
                            			<td><?php echo $status; ?></td>
                            			<td><a href="capnhatsanpham.php?id=<?php echo $row['id_sp']; ?>">Cập nhật</a></td>
                            			<td><a href="delete.php?id=<?php echo $row['id_sp']; ?>" onClick="return confirm('Bạn có thực sự muốn quất ?');">Xóa sách</a></td>
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