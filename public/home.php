<?php
	include("database.php");
?>
<!DOCTYPE>
	<html>
		<head>
			<title>MemoriesMade</title>
			<link href="style\styles.css" type="text/css" rel="stylesheet"/>
		</head>
		<body>
			<div id="header">
				<div id="header_cont">
				<div id="header_logo"><a href="index.html"><img src="images\logo_here.png" alt="logo here please"></a></div> 						
				</div>
			</div>
			
			<div id="nav">
				<div id="nav_cont">
					<ul id="navigations">
						<li>
							<form>
                                <input type="text" class="search" placeholder="Search event..." required>
                                <input type="button" class="button" value="Search">
							</form>
						</li>
						<li class="styled"><a href="#contact_us">CONTACT US</a></li>
						<li class="styled"><a href="#team">BROWSE EVENT</a></li>
						<li class="styled"><a href="#create_event">CREATE EVENT</a></li>
						<li class="styled"><a href="home.html">HOME</a></li>
					</ul>
				</div>
			</div>
			
			<div id="slider">
				<div id="slider_cont">
					<img class="slides" src="images\slider_img\wedding_events.jpg" style="width:100%" alt="http://www.freepik.com Designed by v.ivash / Freepik">
					<img class="slides" src="images\slider_img\birthday_events.jpg" style="width:100%" alt="http://www.freepik.com Designed by Pressfoto / Freepik">
					<img class="slides" src="images\slider_img\music_events.jpg" style="width:100%" alt="http://www.freepik.com Designed by Bedneyimages / Freepik">
					
					<button class="but_prev" onclick="plusDivs(-1)">&#10094;</button>
					<button class="but_next" onclick="plusDivs(1)">&#10095;</button>
				</div>
				<div id="float_imagebg">
				</div>
				
				<div id="image_cont">
					<div id="float_img">
						<div id="image"><img src="images\front_img.png"></div>
						
					</div>
				</div>
			</div>
			
			<script>
				let slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n){
				  showDivs(slideIndex += n);
				}

				function showDivs(n){
					let i;
					let x = document.getElementsByClassName("slides");
					if (n > x.length){
						slideIndex = 1
					}if (n < 1){
						slideIndex = x.length
					}
					for(i = 0; i < x.length; i++){
					 x[i].style.display = "none";  
					}
					x[slideIndex-1].style.display = "block";  
				}
			</script>
			
			<div id="create_event">
				<div class="head"><p>CREATE EVENT</p></div><center><div class="icons">
				<img src="images\icons\create.png" alt="https://www.flaticon.com/authors/gregor-cresnar" title="Gregor Cresnar">
			</div>
			</div>
			
			<div id="team">
				<p class="head">MEET THE TEAM!</p>
				<center><img src="images\team\noona1.png">
				<img src="images\team\noona2.png">
				<img src="images\team\noona3.png">
				<img src="images\team\noona4.png"></center>
			</div>
			
			<div id="contact_us">
				<div class="footer_con">
					<p class="stylef">About us</p><hr>
					<ul class="stylep_con">
						<li><a href="#">What is MemoriesMade?</a></li>
						<li><a href="#">Developers</a></li>
					</ul>
				</div>
				<div class="footer_con">
					<p class="stylef">Use MemoriesMade</p><hr>
					<ul class="stylep_con">
						<li><a href="#">How it works?</a></li>
						<li><a href="#">MemoriesMade User Reviews</a></li>
					</ul>
				</div>
				<div class="footer_con">
					<p class="stylef">Contact Us</p><hr>
					<ul class="stylep_con">
						<li><a href="#">282-1267</a></li>
						<li><a href="#">E-mail</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Instagram</li>
						<li><a href="#">Twitter</a></li>
					</ul>
				</div>
			</div>
			
			<div id="copyright">
				<center><p>&#x24B8;MemoriesMade 2017</p></center>
			</div>
		</body>
	</html>