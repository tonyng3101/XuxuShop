<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">XUXU LIPSTICK</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" href="Index.php?f=san-pham">Sản phẩm<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php 
              $sql = "SELECT * From loai_sanpham";
              $query = mysql_query($sql);

              while ($row = mysql_fetch_array($query)) {
                ?>
                <li><a href="Index.php?f=san-pham&c=<?php echo $row['id_loai'] ?>"><?php echo $row['ten_loai']; ?></a></li>
                <?php
              }
             ?>
        </ul>
        </li>
        <li><a href="index.php#about">Giới thiệu</a></li>
        <li><a href="index.php#contact">Liên hệ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php 
      if (isset($_SESSION['namekh'])){
      $id = $_SESSION['idkh'];
      $sqls = "SELECT * From khach_hang where id_kh = '$id'";
      $querys = mysql_query($sqls);
      $rows = mysql_fetch_array($querys)

      ?>
        <li>
          <div class="user-pic" style="background-image: url(image/user/<?php echo $rows['profile_picture']; ?>);"></div>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" href="">
            <?php echo $_SESSION['namekh']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Đơn Mua</a></li>
            <li><a href="#">Tài Khoản Của Tôi</a></li>
            <li><hr style="margin: 0px; border: 0.5px solid #333"></li>
            <li><a href="Index.php?f=log-out">Đăng Xuất</a></li>
          </ul>
        </li>
      <?php 
       }
       else{
           echo '<li><a href="index.php?f=log-in"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>';
       }
       ?>
      <li>
        <a href="index.php?f=cart" class="cart">
          <?php 
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $k => $v) {
                $item[] = $k;
              }
              $total = 0;
              if (empty($item)) {
                $total = 0;;
              }
              else{
                $str = implode(",", $item);
                $sql = "SELECT * FROM san_pham where id_sp in ($str)";

                $query = mysql_query($sql);

                
                while ($row = mysql_fetch_array($query)) {
                  $total += $_SESSION['cart'][$row['id_sp']];
                }
              }

              
              echo '<p>'.$total.'</p>';
            }else{
              echo '<p>0</p>';
            }
           ?>
        </a>
      </li>

    </ul>
    </div>
  </div>
</nav>