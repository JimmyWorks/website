<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-a">
	<title>Resume - Jimmyworks</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
	<script type="text/javascript" src="/js/pdfobject.min.js"></script>
</head>

	<body>
		<main>
            <div class="floating-box2">
			<span id="title">RESUME </span> </br>
			</div>
			<div class="parallax" style="background-image: url('/img/morningkeys.jpg');"></div>
			<div id="resume">
				<script> PDFObject.embed("/docs/Resume2018.pdf", "#resume"); </script>
			</div>
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