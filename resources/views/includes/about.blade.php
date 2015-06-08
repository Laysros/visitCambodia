@include('static.header')

	

	<!DOCTYPE html>
<html>
<head>
	<title>AboutUs</title>
	
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


	<style type="text/css">

	.about h3 {
    font-size: 2.5em;
    margin: 0 0 1.2em 0;
  }
  .about span {
    top: 50%;
  }
  .about p {
    font-size: 16px;
    width: 44%;
  }
	

	.team{
    background:#f5f5f5;
    margin-top: -70px;
  }
  .team-grids {
    padding: 1em 0 6em 0;
  }
  .team-grids-info{
    position:relative;
  }
  .team-grids-info img{
    width:100%;
    padding: 0% 0%;
  }
.team-grids-text{
  text-align: center;
  color: black;
  border: 3px solid #e4e4e4;
  margin-top: 2em;
  padding: 1em 0;
}
.team-grids-text h3 {
  margin: 10px 0;
  font-size: 23px;
  font-family: 'Raleway', sans-serif;
  font-weight: 500;
  letter-spacing: 2px;
}
.team-grids-text h5 {
  font-size: 14px;
  margin: 10px 0;
  font-weight: 600;
  line-height: 1.1;
  font-family: monospace;
  letter-spacing: 2px;
}
.icons{
  display:none;
  position:absolute;
  margin:0;
  top: 0;
  left: 5%;
  background: rgba(0, 0, 0, 0.5);
  width: 90%;
  height: 66%;
  padding: 25% 33%;
  border-radius: 2px;
}
.icons ul{
  padding:0;
  margin: 0;
}
.icons ul li{
	display:inline;
}
.icons ul li a{
	display: block;
	padding: 0px 0px;
	color: white;
	font-size: 17px;
  /*background: url(icons-sprite.png) no-repeat ;*/
}
.icons ul li a:hover{
	display: block;
	padding: 15% 50%;
	color:#66CCFF;
  /*background: url(./images/icons-sprite.png) no-repeat  ;
  transition:.5s all;*/
}
/*.icons ul li a.fb{
  background: url(./images/icons-sprite.png) no-repeat -61px -16px;
}
.icons ul li a.fb:hover{
  background: url(./images/icons-sprite.png) no-repeat -61px -79px;
}
.icons ul li a.in{
  background: url(./images/icons-sprite.png) no-repeat -119px -16px;
}
.icons ul li a.in:hover{
  background: url(./images/icons-sprite.png) no-repeat -119px -79px;
}
*/.team-grids-info:hover div.icons{
  display:block;
  }
.team-grids-info:hover .team-grids-text{
  border-color:#000;
}

	</style>

</head>
<body>
	<div class="header">		
		<div class="banner banner-in">
			<div class="container">
				<h6><a href="index">HOME</a>/ <span>Contact Us</span></h6>
			</div>
		</div>
	</div>





	<div class="team" id="team">
	    <div class="container">
	      <div class="about">
	        <h3>OUR TEAM MEMBERS</h3>
	        <span></span>
	        <p>We are appropriate to develope this website and work in group.</p>
	      </div>
	      <div class="team-grids">      
		        <div class="col-md-3 col-sm-6 col-xs-12 team-grids-info">
		          <img src="images/samphas.jpg" class="img-thumbnail" alt=""/>
		          <div class="team-grids-text">
		            <h3>HENG Samphas</h3>
		            <h5>TEAM Leader</h5>
		          </div>
		          <div class="icons">
		            <ul>
		              <li><a href="https://www.facebook.com/somphas.heng?fref=ts">Facebook</a></li><br>
		              <li><a href="#">Twitter</a></li><br>
		              <li><a href="#">Google+</a></li><br>
		            </ul>
		          </div>
		        </div>  
	        <div class="col-md-3 col-sm-6 col-xs-12 team-grids-info">
	          <img src="images/leangsros.jpg" class="img-thumbnail" alt=""/>
	          <div class="team-grids-text">
	            <h3>LAY Leangsros</h3>
	            <h5>TEAM Member</h5>
	          </div>
	          <div class="icons">
	            <ul>
	              <li><a href="https://www.facebook.com/layleangsros?fref=ts">Facebook</a></li><br>
	              <li><a href="#">Twitter</a></li><br>
	              <li><a href="#">Google+</a></li><br>
	            </ul>
	          </div>
	        </div>
	        <div class="col-md-3 col-sm-6 col-xs-12 team-grids-info">
	          <img src="images/movsun.jpg" class="img-thumbnail" alt=""/>
	          <div class="team-grids-text">
	            <h3>KUY Movsun</h3>
	            <h5>TEAM Member</h5>
	          </div>
	          <div class="icons">
	            <ul>
	              <li><a href="https://www.facebook.com/Cloudssss?fref=ts">Facebook</a></li><br>
	              <li><a href="#">Twitter</a></li><br>
	              <li><a href="#">Google+</a></li><br>
	            </ul>
	          </div>
	        </div>
	        <div class="col-md-3 col-sm-6 col-xs-12 team-grids-info">
	          <img src="images/samedi.jpg" class="img-thumbnail" alt=""/>
	          <div class="team-grids-text">
	            <h3>NHEP Samedi</h3>
	            <h5>TEAM Member</h5>
	          </div>
	          <div class="icons">
	            <ul>
	              <li><a href="https://www.facebook.com/nhep.samedi">Facebook</a></li><br>
	              <li><a href="#">Twitter</a></li><br>
	              <li><a href="#">Google+</a></li><br>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </div>
  </div>

  	<div style="padding:50px">
  		

  	</div>

</body>
</html>


@include('static.footer')