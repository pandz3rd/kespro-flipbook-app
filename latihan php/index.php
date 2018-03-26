<!DOCTYPE html>
<html>
<head>
	<title>HOME - PT. MAJU MUNDUR</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="container">
			<a href="index.php"><img src="maju-mundur-logo.png"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="team.php">Team</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="content-body">
				<div class="wrapper">
					<h1>Home</h1>
					<a href="index.php" style="text-decoration: none; color: #aaa;">Home </a>
					<h2>BUAT JUTAAN ORANG DI DUNIA MENEMUKAN BISNIS ANDA DI INTERNET</h2>
					<p>Sebagai jasa pembuatan website profesional, Solusi Digital adalah partner terbaik untuk bisnis Anda dalam menghadapi Era Digital yang serba teknologi. Perluas jangkauan bisnis Anda, jadikan bisnis Anda sebagai bisnis modern yang mudah dijangkau semua orang di Indonesia.</p>
				</div>
			</div>
			<div class="sidebar">
				<div class="siderbar-content">
				<br>
					<?php echo date('l, d-M-y'); ?>
					<br>
					<br>
					<label><b>Links</b></label>
					<?php
						$link = array('<a href="https://www.google.com">Link1</a>','<a href="https://www.facebook.com">Link2</a>','<a href="https://www.twitter.com">Link3</a>','<a href="https://www.instagram.com">Link4</a>');
						echo "<br>";
						echo implode("<br>",$link);
					?>
				<br>
				<br>
				<label><b>Info</b></label><br>
				<span>Jadwal Workshop: 29 Febuari 2019</span>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<ul>
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>
</body>
</html>