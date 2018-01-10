<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-a">
	<title>Contact - Jimmyworks</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

	<body>
		<main>
            <div class="floating-box2">
			<span id="title">CONTACT </span> </br>
			</div>
			<div class="parallax" style="background-image: url('/img/coffeenote.jpg');"></div>
			<div class="text-block" id="text-format">
			Coming Soon!
			</div>
			<div class="parallax" style="background-image: url('/img/parkedbike.jpg');"></div>
		</main>
		<header>
			<?php
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/php/navbar.php";
				include_once($path);
		    ?>
		</header>
		<footer>
			<?php
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/php/footer.php";
				include_once($path);
		    ?>
		</footer>
	</body>
</html>