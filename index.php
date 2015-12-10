<!doctype html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>dazzIT - Christian Swan</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/main.css">
	<?php
		if(file_exists('ga.php'))
			require 'ga.php';
	?>
</head>
<body>
<div class="page-wrap">
	<section class="name-section">
		<div class="container">
			<h2 class="full-name">Christian Swan</h2>
		</div>
	</section>
	<section class="logo-section">
		<div class="container">
			<div class="logo-head">
				dazz<span class="logo-head-red">IT</span>
				<span class="logo-slogan">professional programming</span>
			</div>
		</div>
	</section>
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="three columns">&nbsp;</div>
				<div class="six columns">
					<a href="https://github.com/Dazzel" class="icon icon-github" target="_blank"></a>
					<a href="https://plus.google.com/+ChristianSwan_de/about" class="icon icon-google" target="_blank"></a>
					<a href="https://twitter.com/dazzit_de" class="icon icon-twitter" target="_blank"></a>
					<a href="mailto:&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#100;&#097;&#122;&#122;&#105;&#116;&#046;&#100;&#101;"
					   class="icon icon-email" target="_blank"></a>
				</div>
				<div class="three columns">&nbsp;</div>
			</div>
		</div>
	</section>
</div>
<footer class="footer-section">
	Copyright <?php echo date('Y'); ?> &copy; by Christian Swan. All Rights Reserved
</footer>
</body>
</html>
