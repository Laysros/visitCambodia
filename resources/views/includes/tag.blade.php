

@include('static.header')
<body>
	<div class="header">		
		<div class="banner banner-in">
			<div class="container">
				@foreach($place['places']->slice(0,1) as $info)
				<h6><a href="index">HOME</a>/ <a href="">tag:</a><span>{{$info['tag']}}</span></h6>
				@endforeach				
			</div>
		</div>
	</div>
	
	<!-- <div class="container">
		<div class="single">
		@foreach($place['places']->slice(0,4) as $info)
			<div class="single-middle">
				<div class="col-md-7 need">
					<a href="{{$info['name']}}">
						<h3>{{$info['name']}}</h3>
						<br>
						<img class="img-responsive" src="{{$info['url']}}" alt="">
					</a>
				</div>
				<div class="col-md-5 tag">
					<div class="social-in">
						<div class="col-md-4 date">
							<p>Date <span>{{$info['post_date']}}</span></p>
						</div>
						<div class="col-md-4 date">
							<p>Tags<br/><span>
								@foreach($place['tags'] as $tag)
								@if($tag['name']==$info['name'])
								<a href="tag_{{$tag['tag']}}">{{$tag['tag']}}</a>&nbsp;
								@endif
								@endforeach
							</span></p>
						</div>
						<div class="col-md-4 date">
							<p>Views<span>{{$info['count_view']}}</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<p class="tag-in">
						<span>{{$info['description']}}</span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			@endforeach
		</div>
	</div> -->

	<!-- Show places -->
	<div class="container">
		<div class="single">
			@foreach($place['places']->slice(0,4) as $info)
			<div class="single-middle">
				<div class="col-md-7 need">
					<a href="{{$info['name']}}">
						<h3>{{$info['name']}}</h3>
						<br>
						<img class="img-responsive" src="{{$info['url']}}" alt="">
					</a>
				</div>
				<div class="col-md-5 tag" style="padding-top:80px">
					<div class="social-in">
						<div class="col-md-4 date">
							<p>Date <span>{{$info['post_date']}}</span></p>
						</div>
						<div class="col-md-4 date">
							<p>Tags<br/><span>
							@foreach($place['tags'] as $tag)
								@if($tag['name']==$info['name'])
								<a href="tag_{{$tag['tag']}}">{{$tag['tag']}}</a>&nbsp;
								@endif
							@endforeach
							</span></p>
						</div>
						<div class="col-md-4 date">
							<p>Views<span>{{$info['count_view']}}</span></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<p class="tag-in">
						<span>{{$info['description']}}</span></p>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			@endforeach
		</div>
	</div>
	<!-- End show places -->









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

