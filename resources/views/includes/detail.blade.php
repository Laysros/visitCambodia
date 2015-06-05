
@include('static.header')
<script
	src="http://maps.googleapis.com/maps/api/js">
</script>
<script type="text/javascript">
	$(document).ready(function(){ 
		$("#myTab a").click(function(e){
			e.preventDefault();
			$(this).tab('show');
		});
	});
</script>
<body>
	<div class="header">
		<div class="banner banner-in">
			<div class="container">
				<h6><a href="index">HOME</a>/ <span>Detail</span></h6>
			</div>
		</div>
	</div>
		
		@foreach($place['places']->slice(0,1) as $info)
		<div class="container">			
				<h2>{{$info['name']}}</h2>
			
			<div class="col-md-7 tag">
				<ul class="nav nav-tabs" id="myTab">
				<li class="active"><a href="#sectionA">Galleries</a></li>
					<li><a href="#sectionB">Map</a></li>
				</ul>
				<div class="tab-content">
					<div id="sectionA" class="tab-pane fade in active">
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
									<img src="{{$info['url']}}" alt="Chania" width="460" height="345">
								</div>
								@foreach($place['places'] as $info)
								<div class="item">
									<img src="{{$info['url']}}" alt="Chania" width="460" height="345">
								</div>
								@endforeach
								
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
					<div id="sectionB" class="tab-pane fade">
						<!-- Start Map -->
						<div class="map" >
							<iframe style="width:100%; height:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.7402135949774!2d104.898371!3d11.570472000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517388680e15%3A0x63057e6682968f5!2sSalar+Techno!5e0!3m2!1sen!2skh!4v1430830392013"></iframe>
						</div>	
					
						<!-- End Map -->
					</div>
				</div>
			</div>
			<div class="col-md-5 tag">
				<div class="social-in">
					<div class="col-md-4 date">
						<p>Date<br/> <span>{{$info['post_date']}}</span></p>
					</div>
					<div class="col-md-4 date">
						<p>Tags<br/><span>
						@foreach($place['tags'] as $tag)
						<a href="tag_{{$tag['name']}}">{{$tag['name']}}</a>&nbsp;
						@endforeach
						</span></p>
					</div>
					<div class="col-md-4 date">
						<p>Views<br/><span>{{$info['count_view']}}</span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- Desciption -->
			{{$info['description']}}
		</div>
		@endforeach
		

<!-- Shere St -->
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
	<!-- Shere end-->



	<div class="container">
		<hr>
		<h3 >Related Places:</h3>
		<hr>
		<div class="services">
			<div class="grid-top-top">
				@foreach($place['related']->slice(0,2) as $info)
				<div class="col-md-6 ">
					<div class="col-md-6 service-grid">
						<a href="detail"><img class="img-responsive " src="images/app.jpg" alt="" /></a>
					</div>
					<div class="col-md-6 top-grid-right">
						<h4>{{$info['name']}}</h4>
						<p>{{$info['description']}}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
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
		
</body>
@include('static.footer')
