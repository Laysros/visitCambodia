


@include('static.header')

<body>
	<div class="header">		
		<div class="banner banner-in">
			<div class="container">
				<h6><a href="index">HOME</a>/ <span>OUR STORY</span></h6>
			</div>
		</div>
	</div>
	<div class="container">
		<h2>Angkor</h2>
		<div class="col-md-7">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Galleries</a></li>
				<li><a data-toggle="tab" href="#menu1">Map</a></li>
			</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<!-- Start slide -->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="img/1.jpg" alt="Chania" width="460" height="345">
							</div>

							<div class="item">
								<img src="img/2.jpg" alt="Chania" width="460" height="345">
							</div>

							<div class="item">
								<img src="img/3.jpg" alt="Flower" width="460" height="345">
							</div>

							<div class="item">
								<img src="img/4.jpg" alt="Flower" width="460" height="345">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<!-- End slide -->
				</div>
				<div id="menu1" class="tab-pane fade">
					<!-- Start Map -->
					<script
					src="http://maps.googleapis.com/maps/api/js">
				</script>
				<script>
					function initialize() {
						var mapProp = {
							center:new google.maps.LatLng(13.3622,103.8597),
							zoom:10,
							mapTypeId:google.maps.MapTypeId.ROADMAP
						};
						var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
					}
					google.maps.event.addDomListener(window, 'load', initialize);
				</script>
				<div id="googleMap" style="width:100%;height:400px;"></div>
				<!-- End Map -->
			</div>
		</div>
	</div>



	<div class="col-md-5 tag">
		<div class="social-in">
			<div class="col-md-4 date">
				<p>Date<br/> <span>April 15,2014</span></p>
			</div>
			<div class="col-md-4 date">
				<p>Tags<br/><span><a href="#">Website </a> | <a href="#"> Design	</a></span></p>
			</div>
			<div class="col-md-4 date">
				<p>Author<br/><span>Michael Reimer</span></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	Lorem ipsum dolor sit amet, mollis epicuri pri ei, perpetua honestatis ad vix. Ne duo ludus putent, cu causae tamquam voluptua duo. Agam officiis no duo, ut reque decore sea. Cu eripuit accusam vix. Facete blandit detraxit pri cu, sea soluta doming civibus ea.
	Eum eu tale clita iuvaret, cu est saperet forensibus interesset, cum ne case iusto oportere. Id idque indoctum eum, menandri mediocrem has ei. At usu modo quaerendum. Sit ei dicunt tacimates, mea ea enim eirmod suscipiantur, amet dicit ancillae vel in. Ex mea augue eloquentiam, his postea dolorem suavitate 
	case iusto oportere. Id idque indoctum eum, menandri mediocrem has ei. At usu modo quaerendum. Sit ei dicunt tacimates, mea ea enim eirmod suscipiantur, amet dicit ancillae vel in. Ex mea augue eloquentiam, his postea dolorem suavitate 
	case iusto oportere. Id idque indoctum eum, menandri mediocrem has ei. At usu modo quaerendum. Sit ei dicunt tacimates, mea ea enim eirmod suscipiantur, amet dicit ancillae vel in. Ex mea augue eloquentiam, his postea dolorem suavitate 
	case iusto oportere. Id idque indoctum eum, menandri mediocrem has ei. At usu modo quaerendum. Sit ei dicunt tacimates, mea ea enim eirmod suscipiantur, amet dicit ancillae vel in. Ex mea augue eloquentiam, his postea dolorem suavitate 
	case iusto oportere. Id idque indoctum eum, menandri mediocrem has ei. At usu modo quaerendum. Sit ei dicunt tacimates, mea ea enim eirmod suscipiantur, amet dicit ancillae vel in. Ex mea augue eloquentiam, his postea dolorem suavitate ea. Mel hendrerit accommodare concludaturque ex.
</div>

<!-- Related Post-->
<div class="container">
	<hr>
	<h3 >Related Places:</h3>
	<hr>

	<div class="services">		
		<div class="grid-top-top">
			<div class="col-md-6 ">
				<div class="col-md-6 service-grid">
					<a href="detail"><img class="img-responsive "  src="images/app.jpg" alt="" /></a>
				</div>
				<div class="col-md-6 top-grid-right">
					<h4>Lorem ipsum dolor</h4>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,or randomised words which don't look even slightly believable.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 ">
				<div class="col-md-6 service-grid ">
					<a href="detail"><img class="img-responsive grass"  src="images/app1.jpg" alt="" /></a>
				</div>
				<div class="col-md-6  top-grid-right">
					<h4>Sed ut perspiciatis</h4>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,or randomised words which don't look even slightly believable.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>


	<!-- End related -->



	<div class="container">
		<div class="single">
			<div class="single-middle">
				<div class="comments-area">
					<h3>Add New Comment</h3>
					<form>
						<p>
							<span>Name</span>									
							<input type="text" value="">
						</p>
						<p>
							<span>Email</span>									
							<input type="text" value="">
						</p>
						<p>
							<span>Subject</span>									
							<textarea></textarea>
						</p>
						<div class="sub-in">
							<input type="submit" value="Submit Comment">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!---->
	<div class="content-bottom-in">
		<div class="container">
			<ul class="social">
				<li><a href="#"><i> </i></a></li>						
				<li><a href="#"><i class="twitter"> </i></a></li>
				<li><a href="#"><i class="dribble"> </i></a></li>
				<li><a href="#"><i class="gmail"> </i></a></li>
			</ul>
		</div>
	</div>
</div>
	<!---->
	@include('static.footer')

</body>
