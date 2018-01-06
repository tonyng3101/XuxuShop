<!-- Footer Of Web -->
<div class="container-fluid text-center add-wb"></div>
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