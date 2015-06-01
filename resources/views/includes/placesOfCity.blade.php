

@include('static.header')
<body>
	<div class="header">		
		<div class="banner banner-in">
			<div class="container">
				@foreach($place->slice(0,1) as $info)
				<h6><a href="index">HOME</a>/ <a href="city">City</a>/<span>{{$info['city']}}</span></h6>
				@endforeach				
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="single">
			@foreach($place->slice(0,4) as $info)
			<a href="{{$info['name']}}">
				<h3>{{$info['name']}}</h3>
				<br>
				<div class="col-md-7 need">
					<img class="img-responsive" src="images/si.jpg" alt="">
				</div>
			</a>
			<div class="single-middle">
				<div class="col-md-5 tag">
					<div class="social-in">
						<div class="col-md-4 date">
							<p>Date <span>{{$info['post_date']}}</span></p>
						</div>
						<div class="col-md-4 date">
							<p>Tags<span><a href="#">History </a> | <a href="#"> Culture	</a></span></p>
						</div>
						<div class="col-md-4 date">
							<p>Views<span>{{$info['count_view']}}</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<p class="tag-in">AA
						<span>{{$info['description']}}</span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			@endforeach
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

