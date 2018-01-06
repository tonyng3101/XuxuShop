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
                    
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-table"></i> Sản phẩm</a>
                    </li>
                    <li>
                        <a href="danhmuc.php"><i class="fa fa-fw fa-edit"></i> Danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="address.php"><i class="fa fa-fw fa-heart"></i> Hệ thống cửa hàng</a>
                    </li>
                    <li class="active">
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
                            Feedback
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-desktop"></i> Feedback
                            </li>
                        </ol>
                    </div>
                    <div id="manage-table">
                    
                    <?php
						//Kết nối
						$con = mysql_connect ('localhost','root','');
						mysql_select_db('tocotoco', $con);
						
						$sql = 'select * from feedback';
						
						$recordet = mysql_query($sql);
					?>
                    	<table border="1" class="feedback" width="1260px">
                        <tr height="50px" class="fiel">
                        	<td width="30px"><b>ID</b></td>
                            <td width="100px"><b>Ngày gửi</b></td>
                            <td width="200px"><b>Họ tên</b></td>
                            <td width="250px"><b>Email</b></td>
                            <td width="300px"><b>Nội dung</b></td>
                            <td>Thao tác</td>
                        </tr>
                        <?php
							//Vòng lặp
							$counter=0;
							$style = "";
							
							while ($row =  mysql_fetch_array($recordet))
							{
								
								if($counter % 2 == 0){
								$style = "";
							}else{
								$style ="background:#F9F9F9";
							}
							$counter++;
							
						?>
                        <tr style=" <?php echo $style ?>">
                        	<td class="info"><?php echo $row['id']; ?></td>
                            <td class="info"><?php echo $row['date']; ?></td>
                            <td class="info"><?php echo $row['name']; ?></td>
                            <td class="info"><?php echo $row['email']; ?></td>
                            <td class="long"><?php echo $row['comment']; ?></td>
                            <td class="long"><a class="delete" href="feedback/delete-fb.php?id=<?php echo $row['id_fb']; ?>" onclick="return confirm('Bạn có muốn xóa feedback số <?php echo $row['id'] ?>')">Xóa</a></td>
                        </tr>
                        
                        <?php
							}
						?>
                        </table>
                    </div>
                </div>
            </div>
            <!--main content-->
            
            
            
            <!--main content-->

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