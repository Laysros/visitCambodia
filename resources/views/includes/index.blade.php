@include('static.header')
<body>
	<div class='body'>
	<div class="banner">
		<div class="container">	
			<h1>Lorem Ipsum is simply dummy text</h1>
			<p>excepteur sint occaecat cupidatat non proident</p>
			<!--<a href="#" class="here"> START HERE<i> </i></a>-->
		</div>
	</div>
	<!---->
	<div class="content">
		<div class="container">
			<div class="services">
				<h3 >WHERE TO GO</h3>
				<div class="grid-top-top">
					<div class="col-md-6 ">
						<div class="col-md-6 service-grid">
						 	<a href="detail" ><img class="img-responsive "  src="{{ asset('images/app.jpg') }}" alt="" /></a>
						 </div>
						 <div class="col-md-6 top-grid-right">
							 <h4>Lorem ipsum dolor</h4>
							 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,or randomised words which don't look even slightly believable.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 ">
						<div class="col-md-6 service-grid ">
						 	<a href="detail" ><img class="img-responsive grass"  src="{{ asset('images/app1.jpg') }}" alt="" /></a>
						 </div>
						 <div class="col-md-6  top-grid-right">
							 <h4>Sed ut perspiciatis</h4>
							 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>

			</div>
			
		</div>

		<!---->
		<!-- container -->
		<div class="container">
			<div class="middle-top">
			<h3>Recent Tour</h3>
				<div class="brand">
					<div class="col-md-3 fashion"> 
						<a class="detail"><img class="img-responsive" src="{{ asset('images/pi.jpg') }}" alt="">
						<p>Brand Project<i> </i></p></a>
					</div>
					<div class="col-md-3 fashion"> 
						<a class="detail"><img class="img-responsive" src="{{ asset('images/pi1.jpg') }}" alt="">
						<p>Brand Project<i> </i></p></a>
					</div>
					<div class="col-md-3 fashion"> 
						<a class="detail"><img class="img-responsive" src="{{ asset('images/pi2.jpg') }}" alt="">
						<p>Brand Project<i> </i></p></a>
						
					</div>
					<div class="col-md-3 fashion"> 
						<a class="detail"><img class="img-responsive" src="{{ asset('images/pi3.jpg') }}" alt="">
						<p>Brand Project<i> </i></p></a>
					</div>
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
		
		<!---->
		@include('static.footer')
</body>