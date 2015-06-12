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
			<div class="products-bottom">
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
			<div class="clearfix"> </div>	
		</div>
		</div>
	</div>

	

	<!-- Start test Scrool-->
	<div ng-app='myApp' ng-controller='DemoController'>
	  <div infinite-scroll='loadMore()' infinite-scroll-distance='2'>
	    <div ng-repeat="item in items">Item number {{$city[0]['name']}}: {{$city[0]['image']}}</div>
	  </div>
	</div>

	<script type="text/javascript">
		var myApp = angular.module('myApp', ['infinite-scroll']);
			myApp.controller('DemoController', function($scope) {
		  $scope.images = ["a", "b", "c"];

		  $scope.loadMore = function() {
		    var last = $scope.images[$scope.images.length - 1];
		    for (var i = 1; i < $city.length; i++) {
		    	$scope.images.push($city[i+last]['name']);	
		    };
		      
		    }
		  };
		});


	</script>
	<!-- End scrool -->
	
	<div class="span7 text-center">
		<br>
		<button type="button" id="showMore" class="btn btn-primary btn-lg">Show More cities</button>
	</div>


	<!--Start scrool Load data-->

	<!--End scrool Load data-->
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
