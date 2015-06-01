
@include('static.header')
<div class='body'>
	<div class="header">		
		<div class="banner banner-in">
			<div class="container">
				<h6><a href="index">HOME</a>/ <span>POPULAR PLACES</span></h6>
			</div>
		</div>
	</div>
		<!---->
	<div class="container">
			<div class="story-our">
				<h3>POPULAR PLACES</h3>
				<div class="story">
					@foreach($place->slice(0,2) as $popular)
					<div class="col-md-6 story-popular">
						<a href="{{$popular['name']}}"><img class="img-responsive " src="{{$popular['url']}}" alt=""></a>
						<h6>{{$popular['name']}}</h6>
						<p>{{$popular['description']}}</p>
					</div>
					@endforeach
					<div class="clearfix"> </div>	
			</div>
			<div class="our">
					@foreach($place->slice(2,1) as $popular)
					<div class="col-md-5 our-in">
						<a href="{{$popular['name']}}"><img class="img-responsive " src="{{$popular['url']}}" alt=""></a>
					</div>
					<div class="col-md-7 in-our">
						<h3>{{$popular['name']}}</h3>
						<p>{{$popular['description']}}</p>
					</div>
					@endforeach
					<div class="clearfix"> </div>
			</div>
			<div class="story">
					<@foreach($place->slice(3,4) as $popular)
					<div class="col-md-6 story-popular">
						<a href="{{$popular['name']}}"><img class="img-responsive " src="{{$popular['url']}}" alt=""></a>
						<h6>{{$popular['name']}}</h6>
						<p>{{$popular['description']}}</p>
					</div>
					@endforeach
				<div class="clearfix"> </div>					
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

			@include('static.footer')

</body>
