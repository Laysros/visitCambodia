<!DOCTYPE>
<html>
<body>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!--theme-style-->
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	

<meta name="keywords" content="We offer information about Cambodia on tourism, culture, history and services. We give you the info of the places and the day should go" />

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script src="js/angular.min.js"></script>

<script src="js/ng-infinite-scroll.min.js"></script>




<!--header-->
	<div class="header">
		<div class="container">	
			<div class="logo">
				<a href="index.php"><img src="{{ asset('images/log.png') }}" alt=""></a>
			</div>
				<div class="top-nav">
					<span class="menu"><img src="{{ asset('images/menu.png') }}" alt="" > </span>
					<ul>
						<li><a href="index" id='home'>HOME</a></li>
						<li><a href="popular" id='famous_place'>FAMOUSE PLACES</a></li>
						<li><a href="city" id='city'>CITIES</a></li>
						<li><a href="about" id='about'>ABOUT US</a></li>
						<li><a href="contact" id='contact'>CONTACT</a></li>
					</ul>
					<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				<!--<div class="clearfix"> </div>-->
			</div>
		</div>