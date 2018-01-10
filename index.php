<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-a">
	<!--TODO-->
	<meta name="description" content="Showcasing content and games developed by Jimmy H. Nguyen" />
    <meta name="keywords" content="software developer, software engineer, Unity, games, Jimmy Nguyen, Jimmyworks" />
	<meta name="author" content="Jimmy Hoang Nguyen" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Homepage - Jimmyworks</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

	<body>
		<main>
            <div class="floating-box">
			<span id="title">JIMMY H. NGUYEN </span> </br>
			<span id="sub-title">&lt Software Developer &amp Engineer &gt </span>
			</div>
			<div class="parallax" style="background-image: url('/img/letter.jpg');"></div>
			<div class="text-block" id="text-format">
			Welcome to Jimmyworks!
			</div>
			<div class="parallax" style="background-image: url('/img/bluebikeracer.jpg');"></div>
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