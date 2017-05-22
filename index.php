<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Check Your Network</title>
	<link rel="shortcut icon" href="favicon.png" />
	<!-- Online Css -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">
	<!-- Offline Css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Offline -->
	<script src="js/jquery.min.js"></script>
	<style type="text/css">
		body{
		    background:no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		    padding:50px 0px;
		}
		.row{
			margin:0px !important;
		}
		.jumbotron{
			background: none;
		}
		.h2{
			font-size: 65px;
		}
		.h3{
			font-size: 55px;
			/*color: #E5A62C;*/
		}
	</style>
</head>
<body class="container">
	<div class="row">
		<div class="jumbotron">
			<?php
				if(isset($_POST['net'])){
					$phone = $_POST['phone'];
					function checknetwork($phone){
						$airtel = array('0701','0802','0808','0807','0902','0812');
						$mtn = array('0703','0706','0803','0806','0810','0813','0814','0816','0903','0906');
						$etisalat = array('0809','0817','0818','0908','0909');
						$glo = array('0705','0805','0807','0811','0815','0905');
						$ntel = array('0804');
						$starcomms = array('0819');
						$oops = 'Ooooops Sorry, Your line is Out on the space, Please Look for it';
						if ($phone[0] == '+') {
							$phom = substr($phone, 0, 7);
							$msg = $phom;
							if (in_array($phom, $mtn)) {
								$mssg = 'Mtn';
							}elseif (in_array($phom, $airtel)) {
								$mssg = 'Airtel';
							}elseif (in_array($phom, $etisalat)) {
								$mssg = 'Etisalat';
							}elseif (in_array($phom, $glo)) {
								$mssg = 'Glo';
							}elseif (in_array($phom, $ntel)) {
								$mssg = 'Ntel';
							}elseif (in_array($phom, $starcomms)) {
								$mssg = 'Starcomms';
							}
							// return $msg;
						}elseif (substr($phone, 0, 3) == '234'){
							$phom = substr($phone, 0, 6);
							$msg = $phom;
							if (in_array($phom, $mtn)) {
								$mssg = 'Mtn';
							}elseif (in_array($phom, $airtel)) {
								$mssg = 'Airtel';
							}elseif (in_array($phom, $etisalat)) {
								$mssg = 'Etisalat';
							}elseif (in_array($phom, $glo)) {
								$mssg = 'Glo';
							}elseif (in_array($phom, $ntel)) {
								$mssg = 'Ntel';
							}elseif (in_array($phom, $starcomms)) {
								$mssg = 'Starcomms';
							}
							// return $msg;
						}elseif ($phone[0] == '0'){
							$phom = substr($phone, 0, 4);
							if (in_array($phom, $mtn)) {
								$mssg = 'Mtn';
							}elseif (in_array($phom, $airtel)) {
								$mssg = 'Airtel';
							}elseif (in_array($phom, $etisalat)) {
								$mssg = 'Etisalat';
							}elseif (in_array($phom, $glo)) {
								$mssg = 'Glo';
							}elseif (in_array($phom, $ntel)) {
								$mssg = 'Ntel';
							}elseif (in_array($phom, $starcomms)) {
								$mssg = 'Starcomms';
							}
							$msg = $phom;
							// return $msg;
						}elseif ($phone[0] == '8' || $phone[0] == '9' || $phone[0] == '7') {
							$phom = substr($phone, 0, 3);
							$msg = $phom;
							if (in_array($phom, $mtn)) {
								$mssg = 'Mtn';
							}elseif (in_array($phom, $airtel)) {
								$mssg = 'Airtel';
							}elseif (in_array($phom, $etisalat)) {
								$mssg = 'Etisalat';
							}elseif (in_array($phom, $glo)) {
								$mssg = 'Glo';
							}elseif (in_array($phom, $ntel)) {
								$mssg = 'Ntel';
							}elseif (in_array($phom, $starcomms)) {
								$mssg = 'Starcomms';
							}
						}else{
							$oops = 'Ooooops Sorry, Your line is Out on the space, Please Look for it';
						}
						if(isset($mssg)){
							echo '<div class="alert alert-info">';
							echo "<h4>Your actually using <span style='color:yellow;'><b>$mssg</b></span>, Be happy Yours was found, Smile na!!!</h4>";
							echo '</div>';
							echo "<img src='$mssg.png' width='200px' />";
						}else{
							echo '<div class="alert alert-info">';
							echo "<h4><span style='color:yellow;'><b>$oops</b></span>!!!</h4>";
							echo '</div>';
							echo "<img src='search.jpeg' width='200px' />";
						}
					}

					checknetwork($phone);
					// $phom = substr($phone, 0, 5);
				}
			?>
			<h2>Check Which Network A Number Belongs To</h2>
			<form method="POST" action="?">
				<div class="form-group">
					<div class="col-sm-4">
						<input type="text" class="form-control" placeholder="Phone Number" name="phone" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-4">
						<button type="sumbit" name="net" class="btn btn-info">Check</button>
					</div>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>