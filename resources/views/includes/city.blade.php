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
			<div class="work">		
				<h3>Cities</h3>
			</div>
			
			<div class="products-bottom">
			  <div class="col-md-4 work-grid">
					<div class="view view-tenth">
					      <a href="placesOfCity">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/w1.jpg" class="img-responsive of-my" alt=""/>
								<div class="mask" >
			                        <h4>exerci tation ullamcorper suscipit</h4>
			                        <p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
					  </div>  
					  <div class="col-md-4 work-grid">
					<div class="view view-tenth">
					      <a href="placesOfCity">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/w2.jpg" class="img-responsive of-my" alt=""/>
								<div class="mask" >
			                        <h4>exerci tation ullamcorper suscipit</h4>
			                        <p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
					  </div>  
					  <div class="col-md-4 work-grid">
					<div class="view view-tenth">
					      <a href="placesOfCity">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/w3.jpg" class="img-responsive of-my" alt=""/>
								<div class="mask" >
			                        <h4>exerci tation ullamcorper suscipit</h4>
			                        <p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
					  </div>  
					  
	
			  <div class="col-md-4 work-grid">
					<div class="view view-tenth">
					      <a href="placesOfCity">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/w4.jpg" class="img-responsive of-my" alt=""/>
								<div class="mask" >
			                        <h4>exerci tation ullamcorper suscipit</h4>
			                        <p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
					  </div>  
					  <div class="col-md-4 work-grid">
					<div class="view view-tenth">
					      <a href="placesOfCity">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/w1.jpg" class="img-responsive of-my" alt=""/>
								<div class="mask" >
			                        <h4>exerci tation ullamcorper suscipit</h4>
			                        <p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
					  </div>  
					  <div class="col-md-4 work-grid">
					<div class="view view-tenth">
					      <a href="placesOfCity">
						   <div class="inner_content clearfix">
							<div class="product_image">
								<img src="images/w2.jpg" class="img-responsive of-my" alt=""/>
								<div class="mask" >
			                        <h4>exerci tation ullamcorper suscipit</h4>
			                        <p>A wonderful serenity has taken possession of my entire soul exerci tation ullamcorper suscipit</p>
			                    </div>
			                  	</div>
			                 </div>
				            </a> 
				       </div>
					  </div>  
					  
		
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
		
		<!---->
		
			@include('static.footer')

</body>

</html>
			