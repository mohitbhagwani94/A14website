<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
		<title>Aaruush 2014</title
		<link rel="shortcut icon" href="img/iPad.png"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script src="js/myLoc.js"></script>
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
				<a data-role="button" data-inline="true" data-transition="slide" data-theme="c" href="index.php" data-icon="home" data-iconpos="left" data-ajax="false"> Home </a>
				<h1><a><img src="img/iPad.png" width="30px" height="25px" /></a>Aaruush '14</h1>
				<a href="#menu" class="ui-btn-right" data-icon="grid" data-iconpos="notext" data-rel="popup" data-transition="slideup"></a>
				<!--<a href="#menu" class="ui-btn-right" data-icon="grid" data-iconpos="notext" data-rel="dialog" data-transition="pop"></a>-->
			</div><!-- /header -->
			<div data-role="content" align="center">
				<div id="map-canvas" style="border-color:#000000"></div>
			</div>
			<div data-role="footer" data-theme="c">
				<center><img src="img/webarch.png" /></center>
			</div><!-- /Footer -->

		</div><!-- /page -->

	</body>
</html>