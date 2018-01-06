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
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

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
                <a class="navbar-brand" href="hang/index.php"><img src="../images/logo.png" height="30px" width="auto" /></a>
            </div>
            <!-- Top Menu Items -->
            >
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-table"></i> Sản phẩm</a>
                    </li>
                    <li class="active">
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
                            Danh mục sản phẩm
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="hang/index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-wrench"></i> Danh mục sản phẩm
                            </li>
                        </ol>
                    </div>
                </div>
                <div id="manage-table">
               		
                    <?php
						//Kết nối
						$con = mysql_connect ('localhost','root','');
						mysql_select_db('tocotoco', $con);
						
						$id = $_GET['id'];
						
						$sql = "select * from type where id_type =" .$id;
						
						$recordet = mysql_query($sql);
						
						$row = mysql_fetch_array($recordet);
					?>
                    	<div class="form-catalog">
                            <form action="danhmuc/edit.php?id=<?php echo $id?>" method="post" id="form-catalog" enctype="multipart/form-data">
                                <table border="0">
                                    <tr id="row2" style="display:block">
                                    	<td style="padding-bottom:10px; width:70px;"><b>Tên hãng: </b></td>
                                    </tr>
                                    <tr>
                                    <td class="add"><input type="text" name="txtname" maxlength="50" placeholder="Tên danh mục" value="<?php echo $row['name_type']; ?>" required/></td>
                                    </tr>
                                    <tr id="submit">
                                        <td colspan="2" align="center"><button class="btnadd" type="submit">Lưu</button> <a href="danhmuc.php"><button class="btnback" type="button">Quay lại</button></a></td>
                                    </tr>
                                </table>
                            </form>
                            <script type="text/javascript">
 
                            $(document).ready(function() {
                         
                                //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
                                $("#form-catalog").validate({
                                    rules: {
                                        txtname: "required"
                                    },
                                    messages: {
                                        txtname: "*Vui lòng nhập tên hãng"
                                    }
                                });
                            });
                            </script>
                    </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="hang/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="hang/js/bootstrap.min.js"></script>

</body>
</html>