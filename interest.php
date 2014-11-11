<?php
session_start();
if (isset($_SESSION['id'])) {
	header('Location: index.php');
	exit ;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
		<title>Aaruush 2013</title>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	</head>
	<body>

		<!-- Interest Page -->
		<div data-role="page" id="interest" data-theme="c">
			<!-- Header -->
			<div data-role="header" data-theme="c">
				<h5>Interests @Aaruush</h5>
			</div>
			<!-- /header -->

			<!-- Content -->
			<div data-role="content">
				<fieldset data-role="controlgroup">
					<input type="checkbox" id="checkbox-v-2a" value="LnS">
					<label for="checkbox-v-2a">Logic and Science</label>
					<input type="checkbox" id="checkbox-v-2b" value="FnC">
					<label for="checkbox-v-2b">Forensics and Chemistry</label>
					<input type="checkbox" id="checkbox-v-2c" value="CnD">
					<label for="checkbox-v-2c">Coding and Developing</label>
					<input type="checkbox" id="checkbox-v-2d" value="PnD">
					<label for="checkbox-v-2d">Presentation and Debate</label>
					<input type="checkbox" id="checkbox-v-2e" value="DnP">
					<label for="checkbox-v-2e">Designing and Photography</label>
					<input type="checkbox" id="checkbox-v-2f" value="QnG">
					<label for="checkbox-v-2f">Quest and Gaming</label>
					<input type="checkbox" id="checkbox-v-2g" value="MnF">
					<label for="checkbox-v-2g">Management and Finance</label>
					<input type="checkbox" id="checkbox-v-2h" value="Cons">
					<label for="checkbox-v-2h">Construction</label>
					<input type="checkbox" id="checkbox-v-2i" value="Robo">
					<label for="checkbox-v-2i">Robotics</label>
				</fieldset>
				<button type="button" onClick="getSelectedChbox()" data-theme="b">
					Submit
				</button>
				<script type="text/javascript" src="js/addInterest.js"></script>
			</div>
			<!-- /Content -->
		</div>
		<!-- /Page -->
	</body>
</html>