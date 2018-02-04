<?php
  //nhung noi dung cua file connect.php vao trang
  include('connect.php');

  //Tao cau truy van va thuc thi cau truy van
  $sql = 'SELECT * from loai_sanpham ';
  
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
  <?php
  //Tao cau truy van va thuc thi cau truy van
  $sql = 'SELECT * from loai_sanpham ';
  
  //thuc thi cau truy van
  $recordset = mysql_query($sql);
  //xu ly ket qua tra ve
  while($row = mysql_fetch_array($recordset)) {
?>
	<a href="Index.php?f=san-pham&c=<?php echo $row['id_loai'] ?>">
  	<div class="col-sm-4 product text-center">
    	<div id="zoom-catalogue" class="catalogue">
    		<div class="background-cat" style="background-image: url(image/<?php echo $row['anh_nen']; ?>);"></div>
    		<div class="diamond"></div>
    		<div class="text-inside">
    			<h4 class="title big-title text-center"><?php echo $row['ten_loai']; ?></h4>
    			<hr  width="15px"/>
    			<h4 class="title text-center">Xem Ngay</h4>
    		</div>
      </div>
  	</div>
	</a>
<?php } ?> 	
</div>
<!-- End Product -->
<?php
    include 'sanphammoi.php';
  ?>
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
<style type="text/css" data-creator="html5gallery"> .html5gallery-toolbox-0 {display:none;} .html5gallery-toolbox-bg-0 {display:none;} .html5gallery-toolbox-buttons-0 {display:block;} .html5gallery-play-0 { position:absolute; display:none; cursor:pointer; top:214px; left:378px; width:48px; height:48px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/side_play.png') no-repeat top left;}  .html5gallery-pause-0 { position:absolute; display:none; cursor:pointer; top:214px; left:378px; width:48px; height:48px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/side_pause.png') no-repeat top left;}  .html5gallery-left-0 { position:absolute; display:none; cursor:pointer; top:111px; left:0px; width:48px; height:48px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/side_prev.png') no-repeat center center;}  .html5gallery-right-0 { position:absolute; display:none; cursor:pointer; top:111px; left:426px; width:48px; height:48px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/side_next.png')  no-repeat center center;}  .html5gallery-lightbox-0 {position:absolute; display:none; cursor:pointer; top:214px; left:426px; width:48px; height:48px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/side_lightbox.png') no-repeat top left;} </style>
<style type="text/css" data-creator="html5gallery"> .html5gallery-container-0 { display:block; position:absolute; left:0px; top:0px; width:504px; height:376px;  background-color:;} .html5gallery-box-0 {display:block; position:absolute; text-align:center; left:8px; top:8px; width:488px; height:270px;} .html5gallery-title-text-0  {color:#ffffff; font-size:14px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; white-space:normal; text-align:left; padding:10px 0px 10px 10px;  background:rgb(102, 102, 102) transparent; background: rgba(102, 102, 102, 0.6); filter:'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99666666, endColorstr=#99666666)'; -ms-filter:'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99666666, endColorstr=#99666666)'; } .html5gallery-title-text-0  a {color:#ffffff;} .html5gallery-error-0  {text-align:center; color:#ff0000; font-size:14px; font-family:Arial, sans-serif;} .html5gallery-description-text-0  {color:#ffffff; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; white-space:normal; text-align:left; padding:0px 0px 10px 10px;  background:rgb(102, 102, 102) transparent; background: rgba(102, 102, 102, 0.6); filter:'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99666666, endColorstr=#99666666)'; -ms-filter:'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99666666, endColorstr=#99666666)'; } .html5gallery-description-text-0  a {color:#ffffff;} .html5gallery-fullscreen-title-0 {color:#333333; font:bold 12px Arial,Helvetica,sans-serif; overflow:hidden; white-space:normal; line-height:18px;} .html5gallery-fullscreen-title-0 a {color:#333333;} .html5gallery-fullscreen-description-0 {color:#333333; font:normal 12px Arial,Helvetica,sans-serif; overflow:hidden; white-space:normal; line-height:14px;} .html5gallery-fullscreen-description-0 a {color:#333333;} .html5gallery-viral-0 {display:block; overflow:hidden; position:absolute; text-align:left; top:0px; left:0px; width:488px; height:0px; padding-top:-12px;} .html5gallery-title-0 {display:none; overflow:hidden; position:absolute; left:0px; width:480px; top:0px; height:auto; } .html5gallery-timer-0 {display:block; position:absolute; top:268px; left:0px; width:0px; height:2px; background-color:#ccc; filter:alpha(opacity=60); opacity:0.6; } .html5gallery-elem-0 {display:block; overflow:hidden; position:absolute; top:0px; left:0px; width:480px; height:270px;} .html5gallery-loading-0 {display:block; position:absolute; top:4px; right:4px; width:100%; height:100%; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/loading.gif') no-repeat top right;} .html5gallery-loading-center-0 {display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/loading_center.gif') no-repeat center center;} .html5gallery-title-0 { padding:4px;} .html5gallery-timer-0 { margin:4px;} .html5gallery-elem-0 { overflow:hidden; padding:4px; -moz-box-shadow: 0px 2px 5px #aaa; -webkit-box-shadow: 0px 2px 5px #aaa; box-shadow: 0px 2px 5px #aaa;} .html5gallery-car-0 { position:absolute; display:block; overflow:hidden; left:12px; top:292px; width:480px; height:72px;background-color:transparent;} .html5gallery-car-list-0 { position:absolute; display:block; overflow:hidden; left:4px; width:472px; top:0px; height:72px; } .html5gallery-car-left-0 { position:absolute; overflow:hidden; width:32px; height:32px; left:0px; top:20px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/carousel_left.png') no-repeat 0px 0px;}  .html5gallery-car-right-0 { position:absolute; overflow:hidden; width:32px; height:32px; right:0px; top:20px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/carousel_right.png') no-repeat 0px 0px;} .html5gallery-thumbs-0 { position:relative; display:block; margin-left:84px; width:280px; top:12px; } .html5gallery-car-mask-0 { position:absolute; display:block; text-align:left; overflow:hidden; left:12px; width:448px; top:0px; height:72px;}  .html5gallery-tn-0 { display:block; float:left; margin-left:4px; margin-right:4px; text-align:center; cursor:pointer; width:48px;height:48px;overflow:hidden;} .html5gallery-tn-0 { -moz-box-shadow: 0px 2px 5px #aaa; -webkit-box-shadow: 0px 2px 5px #aaa; box-shadow: 0px 2px 5px #aaa;} .html5gallery-tn-selected-0 { display:block; float:left; margin-left:4px; margin-right:4px;text-align:center; cursor:pointer; width:48px;height:48px;overflow:hidden;} .html5gallery-tn-selected-0 { -moz-box-shadow: 0px 2px 5px #aaa; -webkit-box-shadow: 0px 2px 5px #aaa; box-shadow: 0px 2px 5px #aaa;} .html5gallery-tn-0 {background-color:#fff;} .html5gallery-tn-0 { filter:alpha(opacity=80); opacity:0.8; }  .html5gallery-tn-selected-0 { filter:alpha(opacity=100); opacity:1; }  .html5gallery-tn-img-0 {display:block; overflow:hidden; width:48px;height:48px;} .html5gallery-tn-selected-0 {background-color:#fff;} .html5gallery-tn-title-0 {display:none;}.html5gallery-container-0 div {box-sizing:content-box;}</style>
<style type="text/css" data-creator="html5gallery"> .html5gallery-container-0 { display:block; position:absolute; left:0px; top:0px; width:504px; height:376px;  background-color:;} .html5gallery-box-0 {display:block; position:absolute; text-align:center; left:8px; top:8px; width:488px; height:270px;} .html5gallery-title-text-0  {color:#ffffff; font-size:14px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; white-space:normal; text-align:left; padding:10px 0px 10px 10px;  background:rgb(102, 102, 102) transparent; background: rgba(102, 102, 102, 0.6); filter:'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99666666, endColorstr=#99666666)'; -ms-filter:'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99666666, endColorstr=#99666666)'; } .html5gallery-title-text-0  a {color:#ffffff;} .html5gallery-error-0  {text-align:center; color:#ff0000; font-size:14px; font-family:Arial, sans-serif;} .html5gallery-description-text-0  {color:#ffffff; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; white-space:normal; text-align:left; padding:0px 0px 10px 10px;  background:rgb(102, 102, 102) transparent; background: rgba(102, 102, 102, 0.6); filter:'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99666666, endColorstr=#99666666)'; -ms-filter:'progid:DXImageTransform.Microsoft.gradient(startColorstr=#99666666, endColorstr=#99666666)'; } .html5gallery-description-text-0  a {color:#ffffff;} .html5gallery-fullscreen-title-0 {color:#333333; font:bold 12px Arial,Helvetica,sans-serif; overflow:hidden; white-space:normal; line-height:18px;} .html5gallery-fullscreen-title-0 a {color:#333333;} .html5gallery-fullscreen-description-0 {color:#333333; font:normal 12px Arial,Helvetica,sans-serif; overflow:hidden; white-space:normal; line-height:14px;} .html5gallery-fullscreen-description-0 a {color:#333333;} .html5gallery-viral-0 {display:block; overflow:hidden; position:absolute; text-align:left; top:0px; left:0px; width:488px; height:0px; padding-top:-12px;} .html5gallery-title-0 {display:none; overflow:hidden; position:absolute; left:0px; width:480px; top:0px; height:auto; } .html5gallery-timer-0 {display:block; position:absolute; top:268px; left:0px; width:0px; height:2px; background-color:#ccc; filter:alpha(opacity=60); opacity:0.6; } .html5gallery-elem-0 {display:block; overflow:hidden; position:absolute; top:0px; left:0px; width:480px; height:270px;} .html5gallery-loading-0 {display:block; position:absolute; top:4px; right:4px; width:100%; height:100%; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/loading.gif') no-repeat top right;} .html5gallery-loading-center-0 {display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/loading_center.gif') no-repeat center center;} .html5gallery-title-0 { padding:4px;} .html5gallery-timer-0 { margin:4px;} .html5gallery-elem-0 { overflow:hidden; padding:4px; -moz-box-shadow: 0px 2px 5px #aaa; -webkit-box-shadow: 0px 2px 5px #aaa; box-shadow: 0px 2px 5px #aaa;} .html5gallery-car-0 { position:absolute; display:block; overflow:hidden; left:12px; top:292px; width:480px; height:72px;background-color:transparent;} .html5gallery-car-list-0 { position:absolute; display:block; overflow:hidden; left:4px; width:472px; top:0px; height:72px; } .html5gallery-car-left-0 { position:absolute; overflow:hidden; width:32px; height:32px; left:0px; top:20px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/carousel_left.png') no-repeat 0px 0px;}  .html5gallery-car-right-0 { position:absolute; overflow:hidden; width:32px; height:32px; right:0px; top:20px; background:url('https://html5box.com/html5gallery/html5gallery/skins/light/carousel_right.png') no-repeat 0px 0px;} .html5gallery-thumbs-0 { position:relative; display:block; margin-left:84px; width:280px; top:12px; } .html5gallery-car-mask-0 { position:absolute; display:block; text-align:left; overflow:hidden; left:12px; width:448px; top:0px; height:72px;}  .html5gallery-tn-0 { display:block; float:left; margin-left:4px; margin-right:4px; text-align:center; cursor:pointer; width:48px;height:48px;overflow:hidden;} .html5gallery-tn-0 { -moz-box-shadow: 0px 2px 5px #aaa; -webkit-box-shadow: 0px 2px 5px #aaa; box-shadow: 0px 2px 5px #aaa;} .html5gallery-tn-selected-0 { display:block; float:left; margin-left:4px; margin-right:4px;text-align:center; cursor:pointer; width:48px;height:48px;overflow:hidden;} .html5gallery-tn-selected-0 { -moz-box-shadow: 0px 2px 5px #aaa; -webkit-box-shadow: 0px 2px 5px #aaa; box-shadow: 0px 2px 5px #aaa;} .html5gallery-tn-0 {background-color:#fff;} .html5gallery-tn-0 { filter:alpha(opacity=80); opacity:0.8; }  .html5gallery-tn-selected-0 { filter:alpha(opacity=100); opacity:1; }  .html5gallery-tn-img-0 {display:block; overflow:hidden; width:48px;height:48px;} .html5gallery-tn-selected-0 {background-color:#fff;} .html5gallery-tn-title-0 {display:none;}.html5gallery-container-0 div {box-sizing:content-box;}</style>
<div style="text-align:center;">
<div style="display: block; margin: 0px auto; position: relative; max-width: 100%; width: 605px; height: 433px;" class="html5gallery" data-skin="light" data-responsive="true" data-resizemode="fill" data-html5player="true" data-width="480" data-height="270" data-showsocialmedia="false" data-googleanalyticsaccount="UA-29319282-1">

<a href="http://www.youtube.com/embed/YE7VzlLtp-4" style="display: none;"><img src="https://img.youtube.com/vi/YE7VzlLtp-4/2.jpg" alt="Big Buck Bunny"></a>
<a href="http://www.youtube.com/embed/TLkA0RELQ1g" style="display: none;"><img src="https://img.youtube.com/vi/TLkA0RELQ1g/2.jpg" alt="Elephants Dream"></a>
<a href="https://player.vimeo.com/video/1084537?title=0&amp;byline=0&amp;portrait=0" style="display: none;"><img src="images/Big_Buck_Bunny_3.jpg" alt="Big Buck Bunny - Vimeo Video"></a>
<a href="images/Big_Buck_Bunny_1.m4v" data-webm="images/Big_Buck_Bunny_1.webm" style="display: none;"><img src="images/Big_Buck_Bunny_1.jpg" alt="Big Buck Bunny 1 - <a href='http://www.bigbuckbunny.org' target='_blank'>Copyright Blender Foundation</a>"></a>
<a href="images/Big_Buck_Bunny_2.m4v" data-webm="images/Big_Buck_Bunny_2.webm" style="display: none;"><img src="images/Big_Buck_Bunny_2.jpg" alt="Big Buck Bunny 2 - <a href='http://www.bigbuckbunny.org' target='_blank'>Copyright Blender Foundation</a>"></a>

<div class="html5gallery-container-0" style="width: 605px; height: 433px;">
  <div class="html5gallery-box-0" style="width: 589px; height: 327px;">
    <div class="html5gallery-elem-0" style="width: 581px; height: 327px;">
      <div class="html5gallery-loading-center-0"></div>
        <iframe id="html5gallery-elem-video-0" style="display:block;position:absolute;overflow:hidden;top:4px;left:4px;width:581px;height:327px;" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" width="581" height="327" src="https://www.youtube.com/embed/TLkA0RELQ1g?html5=1&amp;controls=1&amp;showinfo=1&amp;autoplay=0&amp;rel=0&amp;wmode=transparent&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fhtml5box.com&amp;widgetid=2"></iframe>
        <div class="html5gallery-watermark-0" style="display:none;">
          
        </div>
    </div>
    <div class="html5gallery-title-0" style="width: 581px; display: none;">
      <div class="html5gallery-title-text-0">
        Elephants Dream
      </div>
    </div>
    <div class="html5gallery-timer-0" style="width: 0px; top: 325px;"></div>
    <div class="html5gallery-viral-0" style="top: 0px;"></div>
    <div class="html5gallery-toolbox-0" style="display: none;"><div class="html5gallery-toolbox-bg-0"></div><div class="html5gallery-toolbox-buttons-0"><div class="html5gallery-play-0" style="top: 272px; left: 493px; display: none;"></div><div class="html5gallery-pause-0" style="top: 272px; left: 493px; display: none;"></div><div class="html5gallery-left-0" style="top: 140px; display: block;"></div><div class="html5gallery-right-0" style="top: 140px; left: 541px; display: block; background-position: left top;"></div><div class="html5gallery-lightbox-0" style="top: 272px; left: 541px; display: none;"></div></div></div></div><div class="html5gallery-car-0" style="width: 581px; top: 349px; height: 72px;"><div class="html5gallery-car-list-0" style="width: 573px; height: 72px;"><div class="html5gallery-car-mask-0" style="left: 7px; width: 560px; height: 72px;"><div class="html5gallery-thumbs-0" style="margin-left: 140px; width: 280px;"><div id="html5gallery-tn-0-0" class="html5gallery-tn-0" data-index="0" style="width: 48px; height: 48px;"><div class="html5gallery-tn-img-0" style="position: relative; width: 48px; height: 48px;"><div style="display:block; overflow:hidden; position:absolute; width:44px;height:44px; top:2px; left:2px;"><img data-originalwidth="120" data-originalheight="90" class="html5gallery-tn-image-0" style="border:none; padding:0px; margin:0px; max-width:100%; max-height:none; width:59px; height:44px;" src="https://img.youtube.com/vi/YE7VzlLtp-4/2.jpg"></div><div class="html5gallery-tn-img-play-0" style="display:block; overflow:hidden; position:absolute; width:100%;height:100%; top:2px; left:2px;background:url(&quot;https://html5box.com/html5gallery/html5gallery/skins/light/playvideo.png&quot;) no-repeat center center;"></div></div><div class="html5gallery-tn-title-0" style="width: 46px;">Big Buck Bunny</div></div><div id="html5gallery-tn-0-1" class="html5gallery-tn-selected-0" data-index="1" style="width: 48px; height: 48px;"><div class="html5gallery-tn-img-0" style="position: relative; width: 48px; height: 48px;"><div style="display:block; overflow:hidden; position:absolute; width:44px;height:44px; top:2px; left:2px;"><img data-originalwidth="120" data-originalheight="90" class="html5gallery-tn-image-0" style="border:none; padding:0px; margin:0px; max-width:100%; max-height:none; width:59px; height:44px;" src="https://img.youtube.com/vi/TLkA0RELQ1g/2.jpg"></div><div class="html5gallery-tn-img-play-0" style="display:block; overflow:hidden; position:absolute; width:100%;height:100%; top:2px; left:2px;background:url(&quot;https://html5box.com/html5gallery/html5gallery/skins/light/playvideo.png&quot;) no-repeat center center;"></div></div><div class="html5gallery-tn-title-0" style="width: 46px;">Elephants Dream</div></div><div id="html5gallery-tn-0-2" class="html5gallery-tn-0" data-index="2" style="width: 48px; height: 48px;"><div class="html5gallery-tn-img-0" style="position: relative; width: 48px; height: 48px;"><div style="display:block; overflow:hidden; position:absolute; width:44px;height:44px; top:2px; left:2px;"><img data-originalwidth="256" data-originalheight="192" class="html5gallery-tn-image-0" style="border:none; padding:0px; margin:0px; max-width:100%; max-height:none; width:59px; height:44px;" src="images/Big_Buck_Bunny_3.jpg"></div><div class="html5gallery-tn-img-play-0" style="display:block; overflow:hidden; position:absolute; width:100%;height:100%; top:2px; left:2px;background:url(&quot;https://html5box.com/html5gallery/html5gallery/skins/light/playvideo.png&quot;) no-repeat center center;"></div></div><div class="html5gallery-tn-title-0" style="width: 46px;">Big Buck Bunny - Vimeo Video</div></div><div id="html5gallery-tn-0-3" class="html5gallery-tn-0" data-index="3" style="width: 48px; height: 48px;"><div class="html5gallery-tn-img-0" style="position: relative; width: 48px; height: 48px;"><div style="display:block; overflow:hidden; position:absolute; width:44px;height:44px; top:2px; left:2px;"><img data-originalwidth="256" data-originalheight="192" class="html5gallery-tn-image-0" style="border:none; padding:0px; margin:0px; max-width:100%; max-height:none; width:59px; height:44px;" src="images/Big_Buck_Bunny_1.jpg"></div><div class="html5gallery-tn-img-play-0" style="display:block; overflow:hidden; position:absolute; width:100%;height:100%; top:2px; left:2px;background:url(&quot;https://html5box.com/html5gallery/html5gallery/skins/light/playvideo.png&quot;) no-repeat center center;"></div></div><div class="html5gallery-tn-title-0" style="width: 46px;">Big Buck Bunny 1 - <a href="http://www.bigbuckbunny.org" target="_blank">Copyright Blender Foundation</a></div></div><div id="html5gallery-tn-0-4" class="html5gallery-tn-0" data-index="4" style="width: 48px; height: 48px;"><div class="html5gallery-tn-img-0" style="position: relative; width: 48px; height: 48px;"><div style="display:block; overflow:hidden; position:absolute; width:44px;height:44px; top:2px; left:2px;"><img data-originalwidth="256" data-originalheight="192" class="html5gallery-tn-image-0" style="border:none; padding:0px; margin:0px; max-width:100%; max-height:none; width:59px; height:44px;" src="images/Big_Buck_Bunny_2.jpg"></div><div class="html5gallery-tn-img-play-0" style="display:block; overflow:hidden; position:absolute; width:100%;height:100%; top:2px; left:2px;background:url(&quot;https://html5box.com/html5gallery/html5gallery/skins/light/playvideo.png&quot;) no-repeat center center;"></div></div><div class="html5gallery-tn-title-0" style="width: 46px;">Big Buck Bunny 2 - <a href="http://www.bigbuckbunny.org" target="_blank">Copyright Blender Foundation</a></div></div></div></div><div class="html5gallery-car-slider-bar-0"><div class="html5gallery-car-slider-bar-top-0"></div><div class="html5gallery-car-slider-bar-middle-0"></div><div class="html5gallery-car-slider-bar-bottom-0"></div></div><div class="html5gallery-car-left-0" style="background-position: -64px 0px; display: none; top: 20px;"></div><div class="html5gallery-car-right-0" style="background-position: -64px 0px; display: none; top: 20px;"></div><div class="html5gallery-car-slider-0"></div></div></div></div></div>
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
