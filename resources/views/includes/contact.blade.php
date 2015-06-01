@include('static.header')

<body>
		<div class="header">		
			<div class="banner banner-in">
				<div class="container">
					<h6><a href="index">HOME</a>/ <span>Contact Us</span></h6>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="contact">
				<div class="contact-in">
					<h3>CONTACT</h3>


					<div class=" col-md-9 contact-left">
						<form >
							<div>
								<span>Name</span>
								<input name="userName" type="text" class="textbox">
							</div>
							<div>
								<span>E-Mail</span>
								<input name="userEmail" type="text" class="textbox">
							</div>
							<div>
								<span>Subject</span>
								<textarea name="userMsg"> </textarea>
							</div>
							<div>
								<span><input type="submit" value="Submit"></span>
							</div>
						</form>
					</div>
					@foreach($aboutUs as $about)	
					<div class=" col-md-3 contact-right">
						<h5>Company Information</h5>
						<p>{{$about['name']}}</p>
						<p>{{$about['addresss']}}</p>
						<p>Email: <a href="{{$about['email']}}">{{$about['email']}}</a></p>
						<p>{{$about['description']}}</p>
					</div>
					<div class="clearfix"></div>

					<div class="map">
						<iframe src="{{$about['map']}}"></iframe>
					</div>
					@endforeach
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