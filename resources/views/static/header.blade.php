<!DOCTYPE>
<html>
<body>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>

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
						<li><a href="contact" id='aboutus'>ABOUT US</a></li>
						<li><a href="contact" id='contact'>CONTACT</a></li>
					</ul>
			
				</div>
				<!--<div class="clearfix"> </div>-->
			</div>
		</div>