 <div id="ultimate-heading-67195a7541fb81846" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-67195a7541fb81846 uvc-2522 " data-hspacer="line_only" data-halign="center" style="text-align:center">
    <div class="uvc-main-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-67195a7541fb81846 h2" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:36px;&quot;,&quot;line-height&quot;:&quot;&quot;}">
      <h2 class="" style="font-family:'Roboto Condensed', sans-serif; font-weight:300; text-transform: uppercase;">Hình ảnh mới 2018</h2>
    </div>
  </div>

<div id="product" class="container-fluid text-center">
  <?php

  //Tìm kiếm trong trang.
  //Nếu tồn tại post search thì sẽ list ra sản phẩm theo từ khóa
  //Nếu không tồn tại hoặc empty thì sẽ ra list sản phẩm
  if (isset($_POST['search'])) {
    $search = addslashes($_POST['search']);
    if (empty($search)) {
          if (isset($_GET['c'])) {
        $id = $_GET['c'];
        $catalogue = $id;
      }else{
        //Biến này dùng để phân loại sản phẩm
        $catalogue = '';
      }

      if ($catalogue == '') {
        $sql = "SELECT count(id_sp) as total from san_pham";
      }elseif ($catalogue != '' ) {
        $catalogue = $id;
        $sql = "SELECT count(id_sp) as total from san_pham where id_loai='$catalogue'";
      }

        }else{
          $catalogue = '';
      $sql = "SELECT count(id_sp) as total from san_pham where ten_sp like '%$search%'";
        }
  }else{
    if (isset($_GET['c'])) {
      $id = $_GET['c'];
      $catalogue = $id;
    }else{
      $catalogue = '';
    }

    if ($catalogue == '') {
      $sql = "SELECT count(id_sp) as total from san_pham";
    }elseif ($catalogue != '' ) {
      $catalogue = $id;
      $sql = "SELECT count(id_sp) as total from san_pham where id_loai='$catalogue'";
  }
  }
  
  //Get id loại sản phẩm.
  
  


      //Xử lí phân trang

      $query = mysql_query($sql);

      $row = mysql_fetch_assoc($query);

      $total_records = $row['total'];

      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

      //Giới hạn sản phẩm của 1 trang
          $limit = 4;

          //Tổng số trang
          $total_page = ceil($total_records / $limit);

          //Giới hạn current_page đến total_page
          if ($current_page > $total_page){
              $current_page = $total_page;
          }
          else if ($current_page < 1){
              $current_page = 1;
          }

          //Điểm bắt đầu

          $start = ($current_page - 1) * $limit;


          //Query

          if (isset($_POST['search'])) {
            $search = addslashes($_POST['search']);
            //Phân trang nếu có search
            if (empty($search)) {
              if ($catalogue == '') {
            $query = mysql_query("SELECT * FROM san_pham ORDER BY id_sp DESC LIMIT $start, $limit");
          }elseif ($catalogue != '') {
            $query = mysql_query("SELECT * FROM san_pham where id_loai='$catalogue' ORDER BY id_sp DESC LIMIT $start, $limit");
          }
            }else{
              $catalogue = '';
              $query = mysql_query("SELECT * from san_pham where ten_sp like '%$search%' ORDER BY id_sp DESC");
            }
            
          }
          //Phân trang nếu không có biến search
          else {
            $search = '';
            if ($catalogue == '') {
          $query = mysql_query("SELECT * FROM san_pham ORDER BY id_sp DESC LIMIT $start, $limit");
        }elseif ($catalogue != '') {
          $query = mysql_query("SELECT * FROM san_pham where id_loai='$catalogue' ORDER BY id_sp DESC LIMIT $start, $limit");
        }
          }

        ?>


<!-- Phần thông tin chính -->

<div id="main-prod-home">
<!-- List Sản phẩm -->
  <div class="prod col-sm-12">
        <?php
      //Vòng lặp in sản phẩm
      while ($row = mysql_fetch_assoc($query)) {
    ?>
    <div class="product-show">
      <div class="caption-style-2" style="background-image: url(image/<?php echo $row['hinhanh_sp']; ?>);">
        <?php 
        //Nếu tồn tại giảm giá thì sẽ in ra giá giảm + %
          if ($row['giam_gia'] > 0) {
            $price = $row['gia_sp'] - ($row['giam_gia'] * $row['gia_sp'])/100;
            $deal = '<strike>'.number_format($row['gia_sp'],0,',','.').'</strike> '.number_format($price,0,',','.');
            echo '<h4 class="deal">-'.$row['giam_gia'].'%</h4>';
          }else{
            $deal = number_format($row['gia_sp'],0,',','.');
          }
        ?>  
        <div class="caption">
          <div class="blur"></div>
            <div class="caption-text">
              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      
      <div class="title-prod text-center">
        <h4>
          <a href="index.php?f=detail-product&id=<?php echo $row['id_sp'] ?>" style="text-transform: uppercase;">
          <?php
            echo $row['ten_sp'];
           ?>
          </a>
        </h4>
        <h4>
          <?php echo $deal; ?>
        </h4>
        <h5>
          <a href="index.php?f=addcart&id=<?php echo $row['id_sp'] ?>"><button class="btn btn-default">Thêm vào giỏ</button></a>
          <button class="btn btn-danger">Mua ngay</button>
        </h5>
      </div>
    </div>
    <?php
      }
    ?>

    <div class="pagination text-center col-sm-12">
      <?php 
        //Nút Prev
        if ($current_page > 1 && $total_page > 1){
                  echo '<a href="index.php?page='.($current_page-1).'">Prev</a> ';
              }

              for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                  if ($i == $current_page){
                      echo '<span>'.$i.'</span> ';
                  }
                  else{
                      echo '<a href="index.php?page='.$i.'">'.$i.'</a> ';
                  }
              }

              //Nút Next
              if ($current_page < $total_page && $total_page > 1){
                  echo '<a href="index.php?page='.($current_page+1).'">Next</a>';
              }
      ?>
    </div>
  </div>
</div>
</div>