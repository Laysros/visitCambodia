@include('static.header')
<body>
	<div class='body'>
	<div class="banner">
		<div class="container">	
			<h1 style="background-color: rgba(0, 0, 0, 0.5);">Angkor : Amazing Heritage of the world</h1>
			<p>Angkor is a region of Cambodia that served as the seat of the Khmer Empire</p>
			<!--<a href="#" class="here"> START HERE<i> </i></a>-->
		</div>
	</div>
	<!---->
	<div class="content">
		<div class="container">
			<div class="services">
				<h3 >WHERE TO GO</h3>
				<div class="grid-top-top">
					@foreach($place as $home)
					<div class="col-md-6 ">
						<div class="col-md-6 service-grid">
						 	<a href="/{{$home['name']}}" ><img class="img-responsive "  src="{{$home['url']}}" alt="" /></a>
						 </div>
						 <div class="col-md-6 top-grid-right">
							 <h4>{{$home['name']}}</h4>
							 <p>{{$home['description']}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					@endforeach
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
		
</body>
@include('static.footer')