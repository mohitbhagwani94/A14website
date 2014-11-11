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
		<title>Aaruush 2013</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<!--<link rel="stylesheet" href="css/jquery.mobile-1.3.2.min.css" -->
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
		<link rel="apple-touch-icon" href="img/128/a13_128.png" />
		<link rel="apple-touch-startup-image" href="img/iPad.png" />
	</head>
	<body>
		<div id="fb-root"></div>
		<script>
			var url = null;
			function ishuJAX(sid, sname, semail, sbday) {
				//console.log(sid);
				var xmlhttp;
				if (window.XMLHttpRequest) {
					//console.log(sname);
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						console.log("Response successful");
						window.location.assign("http://itdatacenter.x10.mx/interest.php")
					}
				}
				url = "doInsert.php?sid=" + sid + "&sname=" + sname + "&semail=" + semail + "&sbday=" + sbday;
				xmlhttp.open("GET", url, true);
				xmlhttp.send();
			}

			var i = 0;
			window.fbAsyncInit = function() {
				FB.init({
					appId : '417136185070846',
					channelUrl : 'http://itdatacenter.x10.mx/channel.html',
					status : true,
					cookie : true,
					xfbml : true
				});
				FB.Event.subscribe('auth.authResponseChange', function(response) {
					if (response.status === 'connected' && i == 0) {
						testAPI();
						i++;
					} else if (response.status === 'not_authorized' && i == 0) {
						FB.login();
					}
				});
			};
			( function(d) {
					var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
					if (d.getElementById(id)) {
						return;
					}
					js = d.createElement('script');
					js.id = id;
					js.async = true;
					js.src = "//connect.facebook.net/en_US/all.js";
					ref.parentNode.insertBefore(js, ref);
				}(document));
			var x = 0;
			function testAPI() {
				FB.login(function(response) {
					if (response.authResponse) {
						console.log('Welcome!  Fetching your information.... ');
						FB.api('/me', function(response) {
							var isNOTSET =  '<?php echo $isNOTSET ;?>';
							console.log("output :: " + isNOTSET);
							if (isNOTSET == "true") {
								console.log("Chala");
								isNOTSET = "false";
								if(x == 0){
									console.log("value of before X :: "+x);
									x++;
									console.log("value of after X :: "+x);
									ishuJAX(response.id, response.name, response.email, response.birthday);									
								}								
							}
							else{
								console.log("nahi chala");
							}
							console.log('Good to see you, ' + response.name + '.');
							console.log('Your email id, ' + response.email);
							console.log('your birthday is, ' + response.birthday);
							console.log('your id is,' + response.id);
							//window.location.assign("http://itdatacenter.x10.mx/interest.php")
							//console.log('Access Token :: ' + response.authResponse.accessToken);
							//status=false;
						});
					} else {
						console.log('User cancelled login or did not fully authorize.');
					}
				}, {
					scope : 'email,user_birthday,publish_actions'
				});
			}
		</script>
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
						<a href="contact_us.php" data-transition="slide" data-ajax="false">Contact Us</a>
					</li>
				</ul>
			</div>
			<div data-role="header" data-theme="c">
				<fb:login-button autologoutlink="true" width="200" max-rows="1" class="ui-btn-left" style="margin-top: 0.35em;margin-left: 0.25em;"></fb:login-button>
				<h1>Aaruush '13</h1>
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
							<a href="workshops.php" data-transition="slide"><img src="img/128/notes.png" id="myImg"/> <h3>Workshops</h3>
							<p>
								Learn & Leap
							</p> </a><a href="workshops.php" data-icon="info" data-transition="slide"></a>
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
							<a href="contact_us.php" data-ajax="false"> <img src="img/128/phone.png" /> <h3>Contact Us</h3>
							<p>
								Further Details
							</p> </a><a href="contact_us.php" data-icon="info" data-ajax="false"></a>
						</li>
					</ul>
					<br>
					<ul data-role="listview" data-inset="true">
						<li>
							<a onClick="window.open('http://www.aaruush.net')"> <img src="img/128/browser.png" /> <h2>Desktop Site</h2>
							<p>
								Bigger View
							</p> </a><a onClick="window.open('http://www.aaruush.net')" data-icon="info"></a>
						</li>
					</ul>

				</div><!-- /article -->
			</div><!-- /content -->
			<div data-role="footer" data-theme="c">
				<h1>&lt;&lt;&nbsp;WebArch&nbsp;&gt;&gt;</h1>
			</div><!-- /Footer -->
		</div><!-- /page -->
	</body>
</html>
