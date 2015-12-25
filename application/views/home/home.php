<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>NCS Nibble Computer Society </title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="js/jquery.min.js"></script>
		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!---- start-smoth-scrolling---->
		 <!-- Custom Theme files -->
		<link href="css/theme-style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----font-Awesome----->
   		<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
   		<!----font-Awesome----->
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,600,200,700,800,900' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<!----start-container------>
		<!----start-header---->
		<div id="home" class="header scroll">
			<div class="container">
				<!---- start-logo---->
				<div class="logo">
					<a href="#"><img src="images/logo.png" title="Blue agency" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				 <nav class="top-nav">
					<ul class="top-nav" id="headlist">
						<li class="active"><a href="#home" class="scroll">Hello!</a></li>
						<li class="page-scroll"><a href="#about" class="scroll">About</a></li>
						
						<li class="page-scroll"><a href="#port" class="scroll">Protfolio</a></li>
						<li class="page-scroll"><a href="#alumni" class="scroll">Alumni</a></li>
						<li class="page-scroll"><a href="#team" class="scroll">Team</a></li>
						<li class="page-scroll"><a href="#login" class="scroll">Login</a></li>
						<li class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>

					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"> </div>
				<!----//End-top-nav---->
			</div>
		</div>
		<!----//End-header---->
		<!-----start-slider---->
		<div class="slider">
			<script src="js/responsiveslides.min.js"></script>
			  <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 3
			      $("#slider3").responsiveSlides({
			        manualControls: '#slider3-pager',
			      });
			    });
			  </script>
			  	<!-- Slideshow -->
			       <ul class="rslides" id="slider3">
			      <li>
			      	<img src="images/slider-1.jpg" alt="">
			      	<div class="slid-info">
			      		<h1 style="font-weight:700">Nibble Computer Society</h1>
			      		<p style="font-size:1.2em;">Pushing ourselves in technology and innovations.</p>
			      		<a class="slid-btn scroll" href="#about">Read More</a>
			      	</div>
			      </li>
			    </ul>
			    <!-- Slideshow -->
			    <ul id="slider3-pager">
			      <li><a href="#"><span> </span></a></li>
			      <li><a href="#"><span> </span></a></li>
			      <li><a href="#"><span> </span></a></li>
			    </ul>
		   </div>
		<!-----//End-slider---->
		<!----start-about----->
		<div id="about" class="about">
			<div class="container">
				<h2 style="font-weight:700; text-align:center; border-bottom:1px solid #CCCCCC; padding-bottom:15px;">ABOUT</h2>
				<p class="wellcome-note-head"><label>A place delved in technology where our creed is <b>Coding</b>, our culture <b>Designing</b> and our religion <b>Hacking. </b></label><span>Innovation </span>and <span>Initiative</span> are two i's we abide by. </p>
				<p class="wellcome-note-info">We encode our energy, decode our knowledge, put our skills together and create.
The voyage is on;come join us, be the voyagers and we well go a long way.
The desire to learn, the hunger for knowledge and the yearning for more is what we look ahead to.
We count on outcome and rely on effort.
Our faith, which rests in the craving to construct is what makes up NIBBLE.
</p>
			<!----start-about-grids----->
			<div class="about-grids">
				<div class="col-md-3 about-grid">
					<span class="about-icon"> </span>
					<h3><a href="#">Programming <label>Club</label></a></h3>
					<p>
 #include &lt; brain.h &gt;<br>
#include &lt; fun.h &gt<br>
void nibble ( )<br>
{
printf("If you control the code, You control the world");
<br>getch ( );
}</p>
				</div>
				<div class="col-md-3 about-grid">
					<span class="about-icon1"> </span>
					<h3><a href="#">Design <label>Club</label></a></h3>
					<p>Design speaks louder than words.
Design is learning by making isn't sufficient to simply eliinateuser error, user delight is the goal.
 .</p>
				</div>
				<div class="col-md-3 about-grid">
					<span class="about-icon2"> </span>
					<h3><a href="#">Technical <label>Club</label> </a></h3>
					<p>The true delight is in finding out rather than in the knowing.
Debugging is twice as hard as writing the code in the first place therefore,
if you write the code as cleverly as possible you are,by definition not smart enough to debug it. 
</p>
				</div>
				<div class="col-md-3 about-grid">
					<span class="about-icon3"> </span>
					<h3><a href="#">Web <label>Club</label></a></h3>
					<p>&lthtml&gt <br>
 &ltbody&gt<br>
  &ltp&gtwe start fresh but the end is <br>always near&lt/p&gt<br>
&lt/body&gt<br>
&lt/html&gt
</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<!----//End-about-grids----->
		</div>
		<!----//End-about----->
		<!----start-services
		<!--<div id="services" class="services">
			<div class="container">
				<h3>Services<label> </label></h3>
			<!----start-servicves-list
			<div class="services-list text-center">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="#"><span class="service-icon"> </span><label>Mobile</label></a>
					</li>
					<li>
						<a href="#"><span class="service-icon1"> </span><label>Design</label></a>
					</li>
					<li>
						<a href="#"><span class="service-icon2"> </span><label>Social</label></a>
					</li>
					<li>
						<a href="#"><span class="service-icon3"> </span><label>E-commerce</label></a>
					</li>
					<li>
						<a href="#"><span class="service-icon4"> </span><label>Database</label></a>
					</li>
					<li>
						<a href="#"><span class="service-icon5"> </span><label>Communications</label></a>
					</li>
					<li>
						<a href="#"><span class="service-icon6"> </span><label>Technology</label></a>
					</li>
				</ul>
			</div>
			<!----//End-servicves-list
			</div>
		</div>
		<!----//End-services---->
		<!----start-portfolio----->
		<div id="port" class="portfolio portfolio-box">
			<div class="container">
				<h3>Portfolio<label> </label></h3>
			<!----start-portfolio---->
         <div id="port" class="container portfolio-main">
	        	<!---- start-portfolio-script----->
					<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
						$(function () {
							var filterList = {
								init: function () {
								
									// MixItUp plugin
									// http://mixitup.io
									$('#portfoliolist').mixitup({
										targetSelector: '.portfolio',
										filterSelector: '.filter',
										effects: ['fade'],
										easing: 'snap',
										// call the hover effect
										onMixEnd: filterList.hoverEffect()
									});				
								
								},
								hoverEffect: function () {
									// Simple parallax effect
									$('#portfoliolist .portfolio').hover(
										function () {
											$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
											$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
										},
										function () {
											$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
											$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
										}		
									);				
								
								}
					
							};
							// Run the show!
							filterList.init();
						});	
					</script>
					<!----//End-portfolio-script----->
					<ul id="filters" class="clearfix">
						<li><span class="filter active" data-filter="app card icon logo web">All</span> /</li>
						<li><span class="filter" data-filter="app">WEB</span> /</li>
						<li><span class="filter" data-filter="card">GRAPHICS</span> /</li>
						<li><span class="filter" data-filter="icon">VIDEO</span> /</li>
					</ul>
					<div id="portfoliolist">		
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/p1.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
		                 <div class="port-info">
		                	<h4><a href="#">Zealicon</a></h4>
		                	<span>Website</span>
		                </div>
					</div>		
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/p8.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
		                <div class="port-info">
		                	<h4><a href="#">JSS Library </a></h4>
		                	<span>Website</span>
		                </div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/p2.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
		                 <div class="port-info">
		                	<h4><a href="#"> Orientation Programme</a></h4>
		                	<span>Video</span>
		                </div>
					</div>	
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/p5.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
		                 <div class="port-info">
		                	<h4><a href="#"> JSS Infocentre</a></h4>
		                	<span>Website</span>
		                </div>
					</div>		
				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/p3.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
		                 <div class="port-info">
		                	<h4><a href="#">Zealicon Tshirts</a></h4>
		                	<span>Graphic Design</span>
		                </div>
					</div>			
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a data-toggle="modal" data-target=".bs-example-modal-md" href="#" class="b-link-stripe b-animate-go  thickbox">
						     <img class="p-img" src="images/p4.jpg" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/link-ico.png" alt=""/></h2>
						  	</div></a>
		                </div>
		                 <div class="port-info">
		                	<h4><a href="#"> Zealicon Poster</a></h4>
		                	<span>Graphic Design</span>
		                </div>
					</div>
					<div class="clearfix"> </div>	
					<a class="more-ports text-center" href="#"><span> </span></a>																																				
				</div>
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>
         <!----//End-portfolio---->
         <!-----start-testmonials---->
         <div class="testmonials" id="alumni">
         	<div class="container">
	        
	         	<div class="client-sys col-md-12">
	         		<!----start-testmonial-slider---->
	         		<link rel="stylesheet" href="css/testmonial.css">
  					<script src="js/prefixfree.min.js"></script>
	         		<!----//End-testmonial-slider---->
	         		<div class="gallery autoplay items-3">
					    <div id="item-1" class="control-operator"></div>
					    <div id="item-2" class="control-operator"></div>
					    <div id="item-3" class="control-operator"></div>
					    <figure class="item">
                             	<div class="client-pic col-md-4">
	         		<img src="images/client.jpg" title="name" /><h3 style="font-size:1.5em; padding-bottom:.1em;">Akshat Goel</h3><h4 class="testi"><i style="color:#dbdbdb;  ">Software Engineer </i> Adobe</h4>
	         	</div>
					      <h3>WHAT OUR ALUMNI SAY :</h3>
					      <p class="client-says"><span class="left-quit"> &#8220;</span> Coming Sooon.... <span class="right-quit"> &#8221;</span></p>
					    </figure>
                        <figure class="item">
                             	<div class="client-pic col-md-4">
	         		<img src="images/mohit.jpg" title="name" /><h3 style="font-size:1.5em; padding-bottom:.1em;">Mohit Singh</h3><h4 class="testi"><i style="color:#dbdbdb;  ">Senior Software Engineer </i> Eninov</h4>
	         	</div>
					      <h3>WHAT OUR ALUMNI SAY :</h3>
					      <p class="client-says"><span class="left-quit"> &#8220;</span>Coming Soon... <span class="right-quit"> &#8221;</span></p>
					    </figure>
					    <figure class="item">
					      <h3>WHAT OUR ALUMNI SAY :</h3>
					     <p class="client-says"><span class="left-quit"> &#8220;</span> Coming Soon.... <span class="right-quit"> &#8221;</span></p>
					    </figure>
					    <div class="clearfix"> </div>
					    <div class="controls">
					      <a href="#item-1" class="control-button"><span> </span></a>
					      <a href="#item-2" class="control-button"><span> </span></a>
					      <a href="#item-3" class="control-button"><span> </span></a>
					    </div>
					    <div class="clearfix"> </div>
				  </div>
	         	</div>
	         	<div class="clearfix"> </div>
         	 </div>
         </div>
          <!-----//End-testmonials---->
		<!----//End-portfolio----->
		<!-----start-team----->
		<div id="team" class="team">
			<div class="container">
       <h2 >TEAM</h2>
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <img class="img-responsive" src="images/team.jpg">
                </div>
                <div class="col-lg-3"></div>
			</div>
		</div>
		<!-----//End-team----->
		<!-----start-brand-carsuals------>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<h2 class="headline">Our alumni associated with</h2>
		<div class="brand-carsuals">
            <ul id="flexiselDemo3">
			    <li><img class="img-responsive" src="images/logo3.png" /></li>
			    <li><img class="img-responsive"src="images/logo5.png" /></li>
			    <li><img  class="img-responsive" src="images/logo1.png" /></li>
			    <li><img class="img-responsive" src="images/logo2.png" /></li>                                  
                <li><img class="img-responsive" src="images/logo4.png" /></li>                                                 
			</ul>   
            <br>
            <br>
			<script type="text/javascript">
				$(window).load(function() {
				    $("#flexiselDemo3").flexisel({
				        visibleItems: 5,
				        animationSpeed: 1000,
				        autoPlay: true,
				        autoPlaySpeed: 3000,            
				        pauseOnHover: true,
				        enableResponsiveBreakpoints: true,
				        responsiveBreakpoints: { 
				            portrait: { 
				                changePoint:480,
				                visibleItems: 1
				            }, 
				            landscape: { 
				                changePoint:640,
				                visibleItems: 2
				            },
				            tablet: { 
				                changePoint:768,
				                visibleItems: 3
				            }
				        }
				    });
				    
				});
			</script>
		</div>
		<!-----//End-brand-carsuals------>
		<!----start-blog---->
		<?php 
		// var_dump($_SESSION);
		if(isset($_SESSION['in']))
		{$this->load->view('data_entry');
		echo '<a href="welcome">logout</a> ';}
		else{	
		?>
		<div id="blog" class="blog" style="<?php //if(isset($_SESSION['in'])) echo 'display:none'; ?>">
			<div class="container" id="login">
				<h3 id="myid3">ENTER THE TECH-WORLD<label> </label></h3>
				<div class="blog-grids">

					<!---->
					<div class="col-md-4 artical-row2" id="myid">
					
						<!----start-artical-info---->
						<div class="artical-info" id="loginn">
							<div class="post-head post-head1">
								<div class="post-head-left">
									<h4><a href="#" class=>LOGIN</a></h4>
                            </div>
								
								<div class="clearfix"> </div>
							</div>
                           <input type="email" placeholder="Your Username"  class="emailidl"style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: block;
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">
                            
                                                 <input type="password" placeholder="Your Password"  class="passwordl"style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: block;
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">
                            
                            	<select  title="Login As" id="selectn" name="type" style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: none;/*block*/
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">
                                    <option>Alumunai</option>
                                    <option>Student</option>
                                    </select>
                            
							<div class="post-bottom">
								
								<div class="post-bottom-left">
									<a class="artbtn artbtn1 loginUser"  href="javascript:" >LOGIN</a>
								</div>
								     <a class="forgetpass" href="javascript:">  forget password?</a>
								<br>
								<br>
								<span style="color:red" id="loginerr"></span>
								<div class="clearfix"> </div>
							</div>
						</div>
						<!----//End-artical-info---->
						<!----start-artical-info---->
						
						<!----//End-artical-info---->
						<?php } ?>
					</div>
					<!---->
					<div class="col-md-8 artical-row2" id="myid2">
						<!----start-artical-info---->
						<div class="artical-info" id="myid4">
								<div class="post-head post-head1">
								<div class="post-head-left">
									<h4><a href="#" class=>REGISTER</a></h4>
                            </div>
								
								<div class="clearfix"> </div>
							</div>
                                
                                <div class="col-md-6 artical-row2">
                                    <input type="text" class="name" placeholder="Your Name" style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: block;
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">
                                    
     <input type="text" placeholder="Your Branch"  class="branch" style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: block;
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">    
                                    
     <input type="number" placeholder="Contact Number"  class="phoneno"style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: block;
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">                                    
                                    
                                    
                                </div>
                                
                                 <div class="col-md-6 artical-row2">
                                    <input type="email" placeholder="Your E-Mail Address" class="emailid"style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: block;
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">
                                     
                                 <input type="text" placeholder="Your Addmission Number"  class="admissionno"style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: block;
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">                           
                                     
       <input type="password" placeholder="Your Password" class="password" style="font-family: 'Raleway', 'sans-serif';
	margin: 20px 0;
	box-shadow: none;
	border: 1px solid #52555A;
	background: #fff;
	color: #2C3039;
	line-height: 1.8em;
	display: block;
	width: 100%;
	padding: 6px 6px;
	font-size: 14px;
	outline: none;
	-webkit-appearance: none;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
	font-weight: 600;
	border-radius: 0.25em;
	-webkit-border-radius: 0.25em;
	-moz-border-radius: 0.25em;
	-o-border-radius: 0.25em;
	-ms-border-radius: 0.25em;">    
                                     
                                </div>
                                
                                
							<div class="post-bottom">
								
								<div class="post-bottom-left">
								<br>	<a class="artbtn artbtn1 registerUser" href="javascript:">Register</a>
								</div>
								<br><br>   <span id="erreport" style="color:red"></span>
								<div class="clearfix"> </div>
							</div>
						</div>
						<!----//End-artical-info---->
						<!----start-artical-info---->
						
						<!----//End-artical-info---->
					</div>
				</div>
			</div>
		</div>


		<!----//End-blog---->
        <
        
		<!----start-contact---->
		<div id="contact" class="contact">
			<div class="container">
				 <h3>Contact<label> </label></h3>
				<div class="contact-grids">
					<div class="col-md-6 contact-grid-left">
						<form method="post"  action="nibeuser/send_message">
							<input type="text" value="Name "  name="name" class="cname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" value="Email"   name="emailid"class="cemail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<input type="text" value="Subject" name="subject"class="csubject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
							<textarea class="cmsg" name="message" onfocus="if(this.value == 'Your Message here....') this.value='';" onblur="if(this.value == '') this.value='Your Message here....;">Your Message here....</textarea>
							<p class="conditions" id="emailmsg"> <span>*</span></p>
							<span class="submit-btn"><input type="submit"  class="csend" href="javascript :"value="Send"></span>
						</form>
					</div>
					<!----->
					<div class="col-md-6 contact-grid-right">
					        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDphIydAmaJ38WNBaJNVl99Ukgn7pvr

lXM &q=JSS+Academy+Of+Technical+Education, Noida+India+Asia
                           "></iframe>

						<p>Feel free to connect anytime.</p>
						<div class="col-md-4">
							<h5>Address</h5>
							<span>JSS Academy OF Technical Education </span>
							<span>Sector 62,Noida</span>
							<span>Uttar Pradesh</span>
						</div>
						<div class="col-md-4">
							<h5>Email</h5>
							<span><a href="#">Hello@nibble-jssaten.org</a></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-----start-contact-social---->
				<ul class="list-unstyled list-inline contact-social">
					<li><a href="https://www.facebook.com/nibblecomputersociety" target="_blank"><i class="fa fa-facebook"></i></a></li>
				</ul>
				<!-----//End-contact-social---->
		</div>
		</div>
		<!----//End-contact---->
		<!----start-copy-right--->
		<div class="copy-right">
			<div class="container">
				<p>Copyright &copy; Nibble Computer Society 2014</p>
					<script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>

		<!----//End-copy-right--->
		<!----//End-container------>
		<script src="js/home.js"></script>
	</body>
</html>

