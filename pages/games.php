<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-a">
	<title>Games - Jimmyworks</title>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>

	<body>
		<main>
            <div class="floating-box2">
			<span id="title">GAMES </span> </br>
			</div>
			<div class="parallax" style="background-image: url('/img/unity.png'); background-size: auto; background-color: darkblue;"></div>
			<div class="text-block">
			<ul class="game-list">
				<li><a href="/games/roll-a-ball/index.html" target="_blank"><img src="/games/roll-a-ball/thumbnail.png"/></br>First Game!</a></li>
				<li><a href="/games/zombie-toys/index.html" target="_blank"><img src="/games/zombie-toys/thumbnail.png"/></br>Zombie Toys</a></li>
			</ul>
			</div>
			<div class="parallax" style="background-image: url('/img/fencedin.jpg');"></div>
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