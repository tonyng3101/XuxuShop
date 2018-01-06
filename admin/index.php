<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="../images/logo2.png" type="image/x-icon">

    <title>Tocotoco Manage Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../images/logo.png" height="30px" width="auto" /></a>
            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li  class="active">
                        <a href="index.php"><i class="fa fa-fw fa-table"></i> Sản phẩm</a>
                    </li>
                    <li>
                        <a href="danhmuc.php"><i class="fa fa-fw fa-edit"></i> Danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="address.php"><i class="fa fa-fw fa-heart"></i> Hệ thống cửa hàng</a>
                    </li>
                    <li>
                        <a href="feedback.php"><i class="fa fa-fw fa-desktop"></i> Feedback</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sản phẩm
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Sản phẩm
                            </li>
                        </ol>
                    </div>
                </div>
                
                <div class="product">
                
                    <?php
                    if(isset($_GET['function'])){
                            $tam=$_GET['function'];
                        }else{
                            $tam='';
                        }if($tam==''){
                            include ('list-product.php');
                        }else if($tam=='add') {
                            include ('add-product.php');
                        }else if($tam=='edit'){
                            include ('edit-product.php');
                        }else if($tam=='delete'){
							include ('product/delete.php');
						}else if($tam=='search'){
							include ('search-product.php');
						}
                    ?>
                
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    
    
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>