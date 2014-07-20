<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>StackSlider: A Fun 3D Image Slider</title>
		<meta name="description" content="StackSlider: A Fun 3D Image Slider" />
		<meta name="keywords" content="" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.support-note .note-ie{display:block;}</style><![endif]-->
	</head>
	<body>
		<div class="container">	

			<!-- Codrops top bar -->
			<div class="codrops-top clearfix">
				<a href="http://tympanus.net/Development/SimpleDropDownEffects/">
					<strong>&laquo; Previous Demo: </strong>Simple Effects for Drop-Down Lists
				</a>
				<span class="right">
					<a href="http://dribbble.com/isaac317">Illustrations by Isaac Montemayor</a>
					<a href="http://tympanus.net/codrops/?p=12566">
						<strong>Back to the Codrops Article</strong>
					</a>
				</span>
			</div><!--/ Codrops top bar -->
			
			<header class="clearfix">
			
				<h1>StackSlider<span>A fun 3D image slider</span></h1>
				<p>Best viewed in WebKit browsers!</p>
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers</span>
				</div>
				
			</header>
	<?php
	 $images = array(array("linkUrl"=>"http://drbl.in/fgQV", "imageUrl"=>"images/1.jpg", "title"=>"Graverobber"),
	 				array("linkUrl"=>"http://drbl.in/fpRz", "imageUrl"=>"images/2.jpg", "title"=>"Hideous Snake Queen"),
	 				array("linkUrl"=>"http://drbl.in/fGVs", "imageUrl"=>"images/3.jpg", "title"=>"Queen of Hearts"),
	 				array("linkUrl"=>"http://drbl.in/fgvZ", "imageUrl"=>"images/4.jpg", "title"=>"Dead Pirate vs Kraken"),
	 				array("linkUrl"=>"http://drbl.in/fyfM", "imageUrl"=>"images/5.jpg", "title"=>"Mountain Lion"),
	 				array("linkUrl"=>"http://drbl.in/fCmJ", "imageUrl"=>"images/6.jpg", "title"=>"Flying Skull"),
	 				array("linkUrl"=>"http://drbl.in/fsMv", "imageUrl"=>"images/7.jpg", "title"=>"The Fly"),
	 				array("linkUrl"=>"http://drbl.in/fGOf", "imageUrl"=>"images/8.jpg", "title"=>"Failsnake"),
	 				array("linkUrl"=>"http://drbl.in/fypr", "imageUrl"=>"images/9.jpg", "title"=>"Cultist"),
	 				array("linkUrl"=>"http://drbl.in/fEmG", "imageUrl"=>"images/10.jpg", "title"=>"Crusader"),
	 				array("linkUrl"=>"http://drbl.in/ffiw", "imageUrl"=>"images/11.jpg", "title"=>"Crocodile"),
	 				array("linkUrl"=>"http://drbl.in/fqWx", "imageUrl"=>"images/12.jpg", "title"=>"Captain"),
	 				
						);
	?>
			<section class="main">
<ul id="st-stack" class="st-stack-raw">
	<?php
	 foreach ($$images as $key => $value) {
		 echo '<li><div class="st-item"><a href="'.$value["linkUrl"].'"><img src="'.$value["imageUrl"].'"/></a></div><div class="st-title"><h2>'.$value["title"].'</h2><h3>by Isaac Montemayor</h3></div></li>';
	 }
	?>
	
</ul>
				<!-- <ul id="st-stack" class="st-stack-raw">
					<li><div class="st-item"><a href="http://drbl.in/fgQV"><img src="images/1.jpg"/></a></div><div class="st-title"><h2>Graverobber</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fpRz"><img src="images/2.jpg"/></a></div><div class="st-title"><h2>Hideous Snake Queen</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fGVs"><img width="500" src="images/3.jpg"/></a></div><div class="st-title"><h2>Queen of Hearts</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fgvZ"><img src="images/4.jpg"/></a></div><div class="st-title"><h2>Dead Pirate vs Kraken</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fyfM"><img width="700"  src="images/5.jpg"/></a></div><div class="st-title"><h2>Mountain Lion</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fCmJ"><img src="images/6.jpg"/></a></div><div class="st-title"><h2>Flying Skull</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fsMv"><img src="images/7.jpg"/></a></div><div class="st-title"><h2>The Fly &amp; Bureaucratic Elephant</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fGOf"><img width="400"  src="images/8.jpg"/></a></div><div class="st-title"><h2>Failsnake</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fypr"><img src="images/9.jpg"/></a></div><div class="st-title"><h2>Cultist</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fEmG"><img src="images/10.jpg"/></a></div><div class="st-title"><h2>Crusader &amp; Viking</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/ffiw"><img src="images/11.jpg"/></a></div><div class="st-title"><h2>Crocodile</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fqWx"><img src="images/12.jpg"/></a></div><div class="st-title"><h2>Captain Banana</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fkuv"><img src="images/13.jpg"/></a></div><div class="st-title"><h2>Werewolf</h2><h3>by Isaac Montemayor</h3></div></li>
					<li><div class="st-item"><a href="http://drbl.in/fIli"><img src="images/14.jpg"/></a></div><div class="st-title"><h2>Vegetables</h2><h3>by Isaac Montemayor</h3></div></li>
				</ul> -->
				<p>Tip: to see a continuous flow, keep your mouse pressed on the navigation arrows.</p>
			</section>

		</div><!-- /container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.stackslider.js"></script>
		<script type="text/javascript">
			
			$( function() {
				
				$( '#st-stack' ).stackslider();

			});

		</script>
	</body>
</html>