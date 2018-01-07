<!-- Footer Of Web -->
<div class="container-fluid text-center add-wb">
	<div class="content-footer text-center col-sm-6">
		<div class="add-str">
			<h4 class="ltsp-add">OUR STORE</h4>
			<H6>Address 1: 25T2 Hoàng Đạo Thuý, Cầu Giấy, Hà Nội</H6>
			<h6>Address 2: Đ4, Cát Thuế, Vân Côn, Hoài Đức, Hà Nội</h6>
			<h6>Phone: 01652-694-897</h6>
			<h6>Email: XuxuLipstick8397@gmail.com</h6>
		</div>
		<div class="oph-str">
			<H4 class="ltsp-add">OPENING HOURS</H4>
			<h6>All Days Of The Week</h6>
			<h6>8.am - 10.pm</h6>
		</div>
		
	</div>
	<div class="subsc col-sm-6">
			<h4 class="ltsp-add">SUBSCRIBE</h4>
			<a href="https://www.facebook.com/xuxulipstick68.vn/?ref=bookmarks"><i class="fa fa-facebook-square" style="color: #fff; font-size: 30px"></i></a>
			<h6 style="margin: 0;">XuxuLipstick - Son tươi cao cấp không chì</h6>
		</div>
</div>
<!-- End Footer -->

<!-- Add Google Maps -->
<div id="map"></div>
<div class="text-center"><br><p>© 2018 XUXU LIPSTICK STORE</p><br></div>
<script src="js/map.js" type="text/javascript"></script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3duY8e5uj0IaOw2waZvaGHepNqYS6hBM&callback=initMap">
</script>

<footer class="container-fluid text-center">
	<div id="goTop">
		<span class="glyphicon glyphicon-chevron-up" style="color: #fff; top:-10px; right: 8px"></span>
	</div>
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) $('#goTop').fadeIn();
		else $('#goTop').fadeOut();
		});
	$('#goTop').click(function () {
	$('body,html').animate({scrollTop: 0}, 'slow');
	});
	});
</script>