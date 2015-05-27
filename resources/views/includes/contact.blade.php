@include('static.header')
			
<body>
			<div class='body'>
			<div class="header">		
				<div class="banner banner-in">
					<div class="container">
						<h6><a href="index">HOME</a>/ <span>OUR STORY</span></h6>
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

						<div class=" col-md-3 contact-right">
						     	<h5>Company Information</h5>
								    	<p>500 Lorem Ipsum Dolor Sit,</p>
								   		<p>22-56-2-9 Sit Amet, Lorem,</p>
								   		<p>USA</p>
						   		<p>Phone:(00) 222 666 444</p>
						   		<p>Fax: (000) 000 00 00 0</p>
						 	 	<p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
						</div>
							  <div class="clearfix"></div>
					</div>
						
					    <div class="map">
						 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.7402135949774!2d104.898371!3d11.570472000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517388680e15%3A0x63057e6682968f5!2sSalar+Techno!5e0!3m2!1sen!2skh!4v1430830392013"></iframe>
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
		
		<!---->
		
			@include('static.footer')

</body>
</html>
			