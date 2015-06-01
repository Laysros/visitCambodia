@include('static.header')

<body>
	<div class="header">		
		<div class="banner banner-in">
			<div class="container">
				<h6><a href="index">HOME</a>/ <span>Cities</span></h6>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="work">		
			<h3>Cities</h3>
		</div>

		<div class="products-bottom">
			<!-- Start loop -->
			@foreach($city->slice(0,6) as $province)
			<div class="col-md-4 work-grid">
				<div class="view view-tenth">
					<a href="city+{{$province['name']}}">
						<div class="inner_content clearfix">
							<div class="product_image">
								<img src="{{$province['image']}}" class="img-responsive of-my" alt=""/>
								<div class="mask" >
									<h4>{{$province['name']}}</h4>
									<p>{{$province['description']}}</p>
								</div>
							</div>
						</div>
					</a> 
				</div>
			</div>			 
			@endforeach
			<!-- End loop -->	  


			<div class='body'>

			</div>

			<div class="clearfix"> </div>	
		</div>
	</div>


	<div class="span7 text-center">
		<br>
		<button type="button" id="showMore" class="btn btn-primary btn-lg">Show More cities</button>
	</div>
	<script>
		$('#showMore').on('click', function(e){
			e.preventDefault();
			$.ajax({
				url: 'include.city1',
				type: 'POST',
				success:function(data){
				//alert(data);
				$('.body').html(data);
				$(this).find('showMore[type="button"]').attr('disabled','disabled');
			},
			error: function(error){
				return false;
			}
		});
			
		});
	</script>

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
</body>
@include('static.footer')
