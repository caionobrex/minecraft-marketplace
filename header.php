<?php
$servers = [
	["ID" => 1, "INDEX" => 11, "NAME" => "BedWars", "DESCRIPTION" => "", "IMG" => "./images/bed.png"],
	["ID" => 2, "INDEX" => 15, "NAME" => "LuckyWar", "DESCRIPTION" => "", "IMG" => "./images/sponge.png"],
	["ID" => 3, "INDEX" => 31, "NAME" => "SkyWars", "DESCRIPTION" => "", "IMG" => "./images/grass_block.svg"]
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- My Main CSS -->
	<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<header class="header">
		<div class="header__content container">		
			<span class="header__player-counter">
				<span>1500</span>
				<div>players online</div>
			</span>

			<div class="header__text-box">
				<h1 class="heading-primary">
					<span class="heading-primary--main">SkyWars</span>
					<span class="heading-primary--sub">Venha jogar no melhor sevidor.</span>
				</h1>
			</div>

			<div class="header__search-box">
				<form action="#" class="search-box">
					<input type="search" class="browser-default search-box__input" placeholder="Pesquisar">
					<button type="submit" class="search-box__btn btn-floating">
						<i class="material-icons">search</i>
					</button>
				</form>
			</div>
		</div>
	</header>

	<nav>
		<div class="nav-wrapper container">
			<a href="#" class="sidenav-trigger" data-target="mobile-nav">
				<i class="material-icons">menu</i>
			</a>
			<a href="/" class="brand-logo center">Logo</a>
			<ul class="hide-on-med-and-down">
				<li><a href="#" class="compass-trigger">Loja</a></li>
				<li><a href="/faq.php">FAQ</a></li>
			</ul>

			<ul class="right">
				<li>
					<a href="/cart.php" style="display: flex;">
						<i class="material-icons">shopping_cart</i>
						<span>2</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-nav">
		<li><a href="#" class="compass-trigger">Loja</a></li>
		<li><a href="/faq.php">FAQ</a></li>
	</ul>

	<div class="compass-container">
		<div class="compass card" style="width: 350px;">
			<i class="compass__close-btn material-icons" onclick="closeCompass();">close</i>
			<header class="compass__header">
				<h1 class="compass__title">Selecione o servidor</h1>
			</header>

			<main class="compass__main">
				<?php for ($i = 0; $i < 36; $i++): ?>
					<div class="compass__item">
						<?php foreach ($servers as $server): ?>
							<?php if ($i === $server['INDEX']): ?>
								<a href="<?php echo '/shop.php?serverId=' . $server['ID'] ?>">
									<img src="<?php echo $server['IMG'] ?>" class="compass__icon">
									<div class="compass__dropdown">
										<span class="compass__game-name">
											<?php echo $server['NAME'] ?>
										</span>
										<p class="compass__game-desc">
											Lorem Ipsum is simply dummy text of the
											printing and typesetting industry.
										</p>
									</div>
								</a>					
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				<?php endfor; ?>
			</main>
		</div>
	</div>

	<script type="text/javascript">
		$('.sidenav').sidenav();
		const sideNav = M.Sidenav.getInstance(document.querySelector('.sidenav'));

		$('.compass-trigger').click(function() {
			$('.compass-container').css({ display: 'flex' });
			$('html, body').css({ overflowY: 'hidden' });
			sideNav.close();
		});

		$(document).keyup((event) => {
			if (event.keyCode === 27) closeCompass();
		});

		function closeCompass() {
			$('.compass-container').css({ display: 'none' });
			$('html, body').css({ overflowY: 'auto' });
		}
	</script>
</body>
</html>