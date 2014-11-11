<?php
session_start();
$isNOTSET = NULL;
if (!isset($_SESSION['id'])) {
	$_SESSION['id'] = "set";
	$isNOTSET = "true";
} else {
	$isNOTSET = "false";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
		<title>Aaruush 2014</title>
		<link rel="shortcut icon" href="img/iPad.png"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<!--<link rel="stylesheet" href="css/jquery.mobile-1.3.2.min.css" />-->
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
		<link rel="apple-touch-icon" href="img/128/a13_128.png" />
		<link rel="apple-touch-startup-image" href="img/iPad.png" />
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
				<fb:login-button autologoutlink="true" width="200" max-rows="1" class="ui-btn-left" style="margin-top: 0.35em;margin-left: 0.25em;"></fb:login-button>
				<h1><a><img src="img/iPad.png" width="30px" height="25px" /></a>Aaruush '14</h1>
				<a href="#menu" class="ui-btn-right" data-icon="grid" data-iconpos="notext" data-rel="popup" data-transition="slideup"></a>
			</div><!-- /header -->
			<div data-role="content">
				<div class="article">
					<ul data-role="listview" data-inset="true">
						<li>
							<a href="about_us.php" data-transition="slide"> <img src="img/128/graph.png" /> <h3>About Us</h3>
							<p>
								Glimpse of Past
							</p> </a><a href="about_us.php" data-icon="info" data-transition="slide"></a>
						</li>
					</ul>
					<ul data-role="listview" data-inset="true">
						<li>
						
							<a href="domains.php" data-transition="slide"> <img src="img/128/ipod.png" /> <h3>Domains</h3>
						
							<p>
								Highlights
							</p> </a><a href="domains.php" data-icon="info" data-transition="slide"></a>
						</li>
					</ul>
					<ul data-role="listview" data-inset="true">
						<li>
							<a href="workshops.php" data-transition="slide"><img src="img/128/workshops.png" id="myImg"/> <h3>Workshops</h3>
							<p>
								Learn & Leap
							</p> </a><a href="workshops.php" data-icon="info" data-transition="slide"></a>
						</li>
					</ul>
					<ul data-role="listview" data-inset="true">
						<li>
							<a href="highlights.php" data-transition="slide"> <img src="img/128/high.png" /> <h2>Highlights</h2>
							<p>
								Attractions
							</p> </a><a href="highlights.php" data-transition="slide" data-icon="info"></a>
						</li>
					</ul>
					<ul data-role="listview" data-inset="true">
						<li>
							<a href="geolocate.php" data-ajax="false"> <img src="img/128/map.png" /> <h3>GeoLocate</h3>
							<p>
								Where are You?
							</p> </a><a href="geolocate.php" data-icon="info" data-ajax="false"></a>
						</li>
					</ul>
					<ul data-role="listview" data-inset="true">
						<li>
							<a href="contact_us.php" data-transition="slide" data-ajax="false"> <img src="img/128/phone.png" /> <h3>Contact Us</h3>
							<p>
								Further Details
							</p> </a><a href="contact_us.php" data-transition="slide" data-icon="info" ></a>
						</li>
					</ul>
					<ul data-role="listview" data-inset="true">
						<li>
							<a href="credits.php" data-transition="slide"> <img src="img/128/browser.png" /> <h2> Credits</h2>
							<p>
								Technical team
							</p> </a><a href="credits.php" data-transition="slide" data-icon="info"></a>
						</li>
					</ul>

				</div><!-- /article -->
			</div><!-- /content -->
			
			<div data-role="footer" data-theme="c">
				<center><img src="img/webarch.png" /></center>
				<!--<h1>&lt;&lt;&nbsp;WebArch&nbsp;&gt;&gt;</h1>-->
			</div><!-- /Footer -->
		</div><!-- /page -->
	</body>
</html>
