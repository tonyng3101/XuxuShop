<?php
  //nhung noi dung cua file connect.php vao trang
  include('connect.php');
  //Tao cau truy van va thuc thi cau truy van
  $sql = 'select * from video';
  
  //thuc thi cau truy van
  $recordset = mysql_query($sql);
?>       
<!-- Header Of Website -->
<div id="home" class="parallax text-center">
	<img src="image/logo-white.png" width="15%" style="margin-top: 80px;">
	<h1 style="font-family: 'GroteskBoldCond'; font-size: 100px; color: #fff; letter-spacing: 13.5px"> XUXU LIPSTICK</h1>
	<hr style="width: 350px; margin: 2 auto;">
	<h3 style="font-family: 'AvenirLTStd-Light'; color: #fff; letter-spacing: 7px; font-size: 16px">ULTRA MATTE LIP-MATTE LIP CREAM</h3>

	<a href="index.php?f=san-pham" style="text-decoration: none;"><div class="sim-button button28"><span>Shop Now</span></div></a>
</div>

<!-- End Header -->

<!-- Product Of Website -->

<div id="product" class="container-fluid text-center">
	<a href="Index.php?f=san-pham&c=1">
  	<div class="col-sm-4 product text-center">
  	<div class="catalogue">
  		<div class="background-cat" style="background-image: url(image/son-thoi.jpg);"></div>
  		<div class="diamond"></div>
  		<div class="text-inside">
  			<h4 class="title big-title text-center">SON THỎI</h4>
  			<hr  width="15px"/>
  			<h4 class="title text-center">Xem Ngay</h4>
  		</div>
    </div>
  	</div>
	</a>
  	
  <a href="Index.php?f=san-pham&c=2">
  	<div class="col-sm-4 product text-center">
  	<div class="catalogue">
  		<div class="background-cat" style="background-image: url(image/son-kem.jpg);"></div>
  		<div class="diamond"></div>
  		<div class="text-inside">
  			<h4 class="title big-title text-center">SON KEM</h4>
  			<hr  width="15px"/>
  			<h4 class="title text-center">Xem Ngay</h4>
  		</div>
    </div>
  </div>
	</a>

	<a href="Index.php?f=san-pham&c=3">
  	<div class="col-sm-4 product text-center" style="float: right;">
  	<div class="catalogue">
  		<div class="background-cat" style="background-image: url(image/sp-19.jpg);"></div>
  		<div class="diamond"></div>
  		<div class="text-inside">
  			<h4 class="title big-title text-center">SON DƯỠNG</h4>
  			<hr  width="15px"/>
  			<h4 class="title text-center">Xem Ngay</h4>
  		</div>
    </div>
  	</div>
	</a>
</div>
<!-- End Product -->

<!-- About Website -->
<div id="about">
	<div class="container-fluid bg-white">
		<div class="row">
			<div class="col-sm-6">
          <div class="text-about text-center">
            <h3>XUXU LIPSTICK</h3>
            <hr  width="15px" style="border:1px solid #000" />
            <h5>XUXU LIPSTICK là dòng son tươi thiên nhiên cao cấp, 100% không chì. Chất son siêu lì, mịn, bôi đến đâu từng lớp son như ngấm vào môi. Đặc biệt rất an toàn và có thể ăn được.</h5>
            <h5>Cực mềm môi, chỉ cần mím môi lại sau khi tô là có thể cảm nận được độ mềm mướt, nói không với bong tróc.</h5>
            <h5>Son giữ màu được từ 6- 8 tiếng, cực lâu trôi. Dưỡng môi, trị thâm rất hiệu quả.</h5> 
          </div>
    		</div>
			<div class="col-sm-6" style="padding-left: 0;">
    			<div class="background-about-1" style="background-image: url(image/sp-3.jpg);"></div>
          <div class="background-about-1" style="background-image: url(image/sp-18.jpg);"></div>
    		</div>
		</div>
	</div>

	<div class="container-fluid bg-white">
		<div class="row">
			<div class="col-sm-6" style="padding-right: 0;">
    			<div class="background-about" style="background-image: url(image/sp-10.jpg);"></div> 
    		</div>
    		<div class="col-sm-6 text-center" style="padding-left: 0px;">
          <div class="red-bg" style="padding: 145px 0 100px 0; height: 525px">
              <h1 style="font-family: 'GroteskBoldCond'; font-weight: 400; font-size: 97px;letter-spacing: -3px;">SALE 10% OFF !</h1>
              <a href="index.php?f=san-pham"><input type="button" name="button" class="View-Shop" value="Shop Now"></a>
          </div>
    		</div>
		</div>
	</div>
</div>
<!-- End About -->
<div class="box">
  <div class="box_top">
    <p>Video</p>
  </div>
  <div class="box_main">
    <div id="video">
      <div id="content_video">
      <?php
        $query_video_one="SELECT * FROM video ORDER BY ordernum DESC LIMIT 1";
        $results_video_one=mysql_query($query_video_one);
        $query_video_two=mysql_fetch_assoc($query_video_one);
        $str_one=explode('=',$query_video_two['link']);
      ?>
      <iframe width="100%" height="300px;" class="embed-player" src="http://www.youtube.com/embed/<?php echo $str_one[1]; ?>" frameborder="0" allowfullscreen></iframe>
      <br/>
      <?php
        $query_video="SELECT * FROM video ORDER BY ordernum DESC";
        $results_video=mysql_query($query_video);
      ?>
      <ul class="list-video">
        <?php
          while ($video=mysql_fetch_array($results_video,MYSQL_ASSOC))
          {
            $str=explode('=',$video['link']);
            
          ?>
          <li><a style="cursor:pointer;" title="<?php echo $str[1] ?>"><i class="fa fa-caret-right fw"></i><?php echo $video['title']; ?></a></li>
          <?php
          }
        ?>
        <script>
          $(document).ready(function(){
            $('.list-video li').click(function(){
              $(this).parent().siblings(''.embed-player).attr('src','hrrp://www.youtube.com/embed/'+(this).children('a').attr('title'));
            });
          });
        </script>
      </ul>
      </div>
    </div>
  </div>
</div>

<!-- Contact Of Website -->
<div id="contact" class="parallax container-fluid">
  <div class="row">
    <div class="col-sm-7 slideanim" style="left: 21%; margin-top: 175px">
      <div class="row">
      <h3 class="text-center" style="color: #fff">FOR SPECIAL REQUESTS & ORDERS</h3>
      <hr  width="10px" color="#fff" style="border:2px solid #fff" />
      <form action="send-feedback.php" method="post" enctype="multipart/form-data">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <div class="col-sm-12 form-group" style="padding: 0;">
          <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required>
      </div>
      <textarea  style="resize: none; overflow: hidden;" class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br/>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" style="width: 100%; border-radius: 0;border-color: #000;  background-color: #000; color: #fff" type="submit" onclick="return confirm('Cảm ơn bạn đã góp ý với chúng tôi!')">Send</button>
        </div>
      </div> 
      </form>
    </div>
  </div>
</div>

<!--- End Contact -->

<script>
$(document).ready(function(){
  $(".navbar a").on('click', function(event) {

  if (this.hash !== "") {

    event.preventDefault();

    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      window.location.hash = hash;
      });
    }
  });

//Slide Image

  $(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
})
</script>
