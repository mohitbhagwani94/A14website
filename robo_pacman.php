<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
		<title>Aaruush 2014</title>
		<link rel="shortcut icon" href="img/iPad.png"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	</head>
	<body>
		<div data-role="page">
		<div data-role="popup" id="menu" data-theme="d">
				<ul data-role="listview" data-inset="true" style="min-width:210px;">
					<li data-role="divider" data-theme="e">
						Menu
					</li>
					<li>
						<a href="index.php" data-transition="slide">Home</a>
					</li>
					<li>
						<a href="domains.php" data-transition="slide">Domains</a>
					</li>
					<li>
						<a href="workshops.php" data-transition="slide">Workshops</a>
					</li>
					<li>
						<a href="highlights.php" data-transition="slide">Highlights</a>
					</li>
					<li>
						<a href="contact_us.php" data-transition="slide" data-ajax="false">Contact Us</a>
					</li>

					<li>
						<a href="credits.php" data-transition="slide" >Credits</a> 
					</li>
				</ul>
			</div>
			<div data-role="header" data-theme="c">
				<a data-role="button" data-inline="true" data-rel="back" data-transition="slide" data-icon="back" data-iconpos="left"> Back </a>
				<h1>Aaruush '14</h1>
				<a href="#menu" class="ui-btn-right" data-icon="grid" data-iconpos="notext" data-rel="popup" data-transition="slideup"></a>
				<!--<a href="#menu" class="ui-btn-right" data-icon="grid" data-iconpos="notext" data-rel="dialog" data-transition="pop"></a>-->
			</div><!-- /header -->
			<div data-role="content">
				<h1 style="font-variant:small-caps" align="center"> The Pacman Saga </h1>
				<div data-role="collapsible-set">
					<div data-role="collapsible" data-collapsed="false">
						<h3> Introduction </h3>
						<p align="justify">
							"Pacman has lost his way in a very wicked, craftily designed maze invaded by the presence of the ghouly ghosts.
Help him make his way to the reactive core so he can successfully harness his energy and help him find the fruits that provide him immunity against the invaders.
This variation of the game revolves around pacbot's quest to find the gadgets that will help to shield himself from the ghost bots and obstacles."
						</p>
					</div>
					<div data-role="collapsible" data-collapsed="true">
						<h3> Details </h3>
						<div align="justify">
							<h3>Round 1</h3>

							The PacBot is allowed to go through an arena designed with obstacles like sand pits, oil pit, marbles, speed breakers and ramps to throw off the bot.<br>
Finishing the round by going around the path will win the robot a gadget which will facilitate ease of the second round. 


							<h3>Round 2</h3>
							
							The robot receives his gadget after the first round, i.e., a pin. The track is designed with ramps balloons along the way.<br>
The goal of the PacBot is to prick as many balloons as he can in the stipulated time. Different coloured balloons carry varying points. Balloons carrying higher points are meticulously guarded by 
obstacles.

							<h3>Round 3</h3>

							In this round, the robots are given the needed and additionally, a balloon strapped to their backs.<br>
All the finalist robots are allowed to compete with each other in the same arena. <Br>
The idea is to prick the enemy robot without being pricked by them first.


							</div>

					</div>
					<div data-role="collapsible" data-collapsed="true">
						<h3> Co-ordinator Details </h3>
						<p>
							<b>Email: thepacmansaga@gmail.com</b>
							
							
						</p>
					</div>
				</div>
			</div><!-- /content -->

			<div data-role="footer" data-theme="c">
				<center><img src="img/webarch.png" /></center>
				<!--<h1>&lt;&lt;&nbsp;WebArch&nbsp;&gt;&gt;</h1>-->
			</div><!-- /Footer -->
		</div><!-- /page -->
	</body>
</html>