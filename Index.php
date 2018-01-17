<?php
	include_once 'header.php';
?>
	<title>Portfolio Janneke</title>
	<script src="js/jquery.min.js"> </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- start-smooth-scrolling-->
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
			<section class="main-container">
	<div class="main-wrapper">

	</div>
</section>
 	<!-- start-smooth-scrolling-->
</head>
<body>

<!--headerbg starts-->
 <div id="top-top" class="headerbg">
 
	 <!--header starts-->
		<div class="header">
		
		 <!--container starts-->
				<div class="container">
				   
				  <!--Navigation starts-->
					<div class="nav">
						<ul>
							<li><a class="scroll" href="#about">ABOUT</a></li>
							<li><a class="scroll" href="#skills">SKILLS</a></li>
							<li><a class="scroll" href="#port">PORTFOLIO</a></li>
							<li><a class="scroll" href="#POP">POP</a></li>
							<li><a class="scroll" href="#contact">CONTACT</a></li>
						</ul>
					</div>
				  <!--Navigation ends-->
				  
					<div class="clear"></div>
				</div>


		 <!--container ends-->
		 
		</div>
	 <!--header ends-->
	 
	 
	 <!--Banner starts-->
		<div class="banner">
			<div class="container">
				<div class="banner-info">
					<div class="bannerhead">
						<h2> <span>Janneke Wolbers</span></h2>
						<h3>Junior Webdeveloper</h3>
				     
						<a class="downarrow scroll" href="#about"><span> </span></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	  <!--Banner ends-->
 </div>
 <!--Headerbg ends-->
 
 <!--Content starts-->
<div class="content">
 
	 <!--About starts-->
	<div id="about" class="about">
		<div class="container">
			<div class="header-section text-center">
				<h2><span> </span>About<span> </span></h2>
			</div>
				<span><p>Mijn naam is Janneke Wolbers, ben getrouwd en moeder van 3 kinderen. Mijn hobby's zijn lezen, ben PA van een Auteur,
				 computeren en gamen. <br>Daar naast ben ik graag bezig met de honden.</p></span>
					 
			<div class="years">	 
				<h4><b>2002</b></h4>
				<span><h4>Stage lopen</h4></span>
				<p><i>Bij hotel de Giraffe, in de keuken en achter de bar gestaan</i></p>
			</div> 
				
			<div class="years">	 		
				<h4><b>2002</b></h4>
				<span><h4>Stage lopen</h4></span>
				<p><i>In de keuken gestaan bij de Bik Bar</i></p>
			</div> 
					
			<div class="years">	 	
				<h4><b>2013</b></h4>
				<span><h4>Werk voor uitkering</h4></span>
				<div class="labs">
					<p><i>Gewerkt bij De Waar 2de handswinkel als winkelmedewerker inclusief magazijn beheer</i></p>
				</div>
			</div>
				<a class="arrow scroll" href="#skills"><span> </span></a>
			<div class="clear"></div>
		</div>
	</div>
	 <!--About Ends-->
	 
	<!--SKILLS Starts-->
	<div id="skills" class="skills">
	    <div class="container">
			<div class="skill-section text-center">
				<h2><span> </span>Skills<span> </span></h2>
			</div>
			
			<div class="skill">
				<div class="skillbar" data-percent="65%">
					<div class="count-bar color-1">
						<div class="title">HTML(5) -</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="skillbar" data-percent="65%">
					<div class="count-bar color-2">
						<div class="title">CSS(3) -</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="skillbar" data-percent="40%">
					<div class="count-bar color-5">
						<div class="title">Javascript -</div>
						<div class="count"></div>
					</div>
				</div>

					<div class="skillbar" data-percent="60%">
					<div class="count-bar color-5">
						<div class="title">PHP -</div>
						<div class="count"></div>
					</div>
					</div>
				<div class="skillbar" data-percent="50%">
					<div class="count-bar color-5">
						<div class="title">Python -</div>
						<div class="count"></div>
					</div>
					</div>
				</div>
			</div>
			
		<a class="down scroll" href="#port"><span> </span></a>
		<div class="clear"></div>
	    </div>
	
	</div>
	 <!--SKILLS Ends-->
	 
	<!--PORTFOLIO Starts-->
	<div id="port" class="Portfolio">
		<div class="Portfolio-section text-center">
			      <h2><span> </span>Portfolio<span> </span></h2>
		</div>
			<div class="container">
				<div class="portfolio-grids">
					<div class="portfolio-grid col-md-6">
						<a href="#"><img src="images/Website1.png"></a>
						<p>Website gemaakt voor Auteur David Vanriper</p>
					</div>
					<div class="portfolio-grid col-md-6">
						<a target="_blank" href="https://authorlmcarr.com"><img src="images/Website2.png"></a>
						<p>Website gemaakt voor Auteur LM Carr</p>
					</div>
				<!--<div class="portfolio-grid col-md-4">
						<a href="#"><img src="images/monitr3.png"></a>
						<p></p>
						<a class="rightarrow" href="#"><span> </span></a>
					</div> -->
					<div class="clear"> </div>
				</div>
				<a class="portdown scroll" href="#pop"><span> </span></a>
				  <div class="clear"> </div>
			</div>

    </div>
  <!--PORTFOLIO Ends-->
  
  <!--POP starts-->
	<div id="pop" class="pop">
		<div class="container">
			<div class="pop1-section text-center">
				<h2><span> </span>Persoonlijk Ontwikkelings Plan<span> </span></h2>
			</div>
				<span><p></p></span>
				
			<div class="goal">
				<div class="goalbar" data-percent="70%">
					<div class="count-bar">
						<div class="title">Prioriteit ontwikkeldoel</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="goalbar" data-percent="50%">
					<div class="count-bar">
						<div class="title">Huidige Niveau</div>
						<div class="count"></div>
					</div>
				</div>
				<div class="goalbar" data-percent="90%">
					<div class="count-bar">
						<div class="title">Gewenste Niveau</div>
						<div class="count"></div>
					</div>
				</div>
			
			</div>
					 
			<div class="action">	 
				<h4><b>Gerichte Acties</b></h4>
				<p><i>Wat ik wil gaan doen is me richten op HTML (5), CSS (3) en Javascript uitbreiden tot ik het genoeg vindt om andere onderdelen te leren</i></p>
			</div> 
				
			<div class="action">	 		
				<h4><b>Gewenste Resultaat </b></h4>
				<p><i>Mijn resultaat dat ik wil bereiken is een Front-End Webdeveloper worden</i></p>
			</div> 
					
			<div class="action">	 	
				<h4><b>Benodigde Ondersteuning</b></h4>
					<p><i>Extra ondersteunig nodig met Javascript en graag hulp met de extra onderdelen die een Front-End Developer moet weten</i></p>
			</div>
				<a class="bolt scroll" href="#contact"><span> </span></a>
			<div class="clear"></div>
		</div>
	</div>
	 <!--POP Ends-->
  
  
  <!--FOOTER/CONTACT Starts-->
	<div  id="contact" class="footer">
		<div class="container">
	  
			<div class="contact-section text-center">
				<h2><span> </span>CONTACT<span> </span></h2>
				<h1>Ik hoor graag van U.</h1>
			</div>
		 
			<div class="col-md-12">
				<div class="footer-left">
					<div class="social-icons"><center>
						<a target="_blank" href="https://twitter.com/blackwidow_bull"><img src="images/twt.png"></a>
						<a target="_blank" href="https://facebook.com/janneke.wolbers3"><img src="images/fb.png"></a>
						<p class="lead">Als u vragen heeft of informatie wil, kunt u mailen of bellen
						Wilt u contact opnemen met mij?<br>
						<a href="mailto:jannekewolbers@hotmail.com">Klik hier om mij te mailen</a>
						<p>© Copyright Janneke Wolbers</p></center>
					</div>
				</div>
			</div>
			
		</div>
		<a class="up scroll" href="#top-top"><span> </span></a>
	  
	</div>
</div>

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="lib/jquery.appear/jquery.appear.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>

 
   <?php

include_once 'footer.php';

?>