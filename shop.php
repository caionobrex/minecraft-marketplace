<?php
$serverId = array_key_exists('serverId', $_GET) ? $_GET['serverId'] : 1;

$vips = [
	["ID" => 1, "NAME" => "Creeper", "PRICE" => 20, "DISCOUNT" => 0, "DISCOUNTEDPRICE" => 10],
	["ID" => 2, "NAME" => "Enderman", "PRICE" => 20, "DISCOUNT" => 50, "DISCOUNTEDPRICE" => 10],
	["ID" => 3, "NAME" => "Zombie", "PRICE" => 20, "DISCOUNT" => 50, "DISCOUNTEDPRICE" => 10],
	["ID" => 4, "NAME" => "Spider", "PRICE" => 20, "DISCOUNT" => 0, "DISCOUNTEDPRICE" => 10],
	["ID" => 5, "NAME" => "Village", "PRICE" => 20, "DISCOUNT" => 10, "DISCOUNTEDPRICE" => 18]
];

$items = [
	["ID" => 6, "NAME" => "30000 Coins", "PRICE" => 20, "DISCOUNT" => 20, "DISCOUNTEDPRICE" => 18],
	["ID" => 7, "NAME" => "120000 Coins", "PRICE" => 20, "DISCOUNT" => 0, "DISCOUNTEDPRICE" => 10]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'header.php'; ?>

	<main class="main-content">
		<div class="container">
			<div class="row">
				<div class="col s12 m5 l4">
					<div>
						<h5 class="center grey-text text-darken-2">Top Venda</h5>
						<div class="card">
							<div class="card-image">
								<img src="./images/vip2.png">
							</div>
							<div class="card-content">
								<span class="card-title">Vip Creeper</span>
							</div>
						</div>
					</div>

					<div class="compass card">
						<header class="compass__header">
							<h1 class="compass__title">Selecione o servidor</h1>
						</header>

						<main class="compass__main">
							<?php for ($i = 0; $i < 36; $i++): ?>
								<div class="compass__item">
									<?php foreach ($servers as $server): ?>
										<?php if ($i === $server['INDEX']): ?>
											<a
												href="<?php echo '/shop.php?serverId=' . $server['ID'] ?>"
												class="<?php echo $serverId == $server['ID'] ? 'compass__item--selected' : '' ?>"
											>
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
				
				<div class="col s12 m7 l8">
					<section class="products-section">
						<ul class="tabs">
							<li class="tab col s6"><a href="#vips">V I P S</a></li>
							<li class="tab col s6"><a href="#items">I T E M S</a></li>
						</ul>

						<div id="vips">
							<div class="products-section__grid">
								<?php foreach ($vips as $vip): ?>
									<div class="card">
										<div class="card-image">
											<img src="./images/vip2.png">
											<a class="btn-floating halfway-fab" href="/cart.php">
												<i class="material-icons">shopping_cart</i>
											</a>
										</div>
										<div class="card-content">
											<span class="card-title">
												<?php echo $vip['NAME'] ?>
											</span>
											<div class="price-tag">
												<?php if ($vip['DISCOUNT'] === 0): ?>
													<span class="price-tag__price--discounted">
														<?php echo 'R$ ' . number_format($vip['PRICE'], 2, '.', '') ?>
													</span>
												<?php else: ?>
													<span class="price-tag__discount">
														<?php echo $vip['DISCOUNT'] . '% OFF' ?>
													</span>
													<span class="price-tag__price--standard">
														<?php echo 'R$ ' . number_format($vip['PRICE'], 2, '.', '') ?>
													</span> -
													<span class="price-tag__price--discounted">
														<?php echo 'R$ ' . number_format($vip['DISCOUNTEDPRICE'], 2, '.', '') ?>
													</span>
												<?php endif; ?>
											</div>
										</div>
										<div class="card-action">
											<button class="btn-small btn-details">Detalhes</button>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>

						<div id="items">
							<div class="products-section__grid">
								<?php foreach ($items as $item): ?>
									<div class="card">
										<div class="card-image">
											<img src="./images/vip2.png">
											<a class="btn-floating halfway-fab" href="/cart.php">
												<i class="material-icons">shopping_cart</i>
											</a>
										</div>
										<div class="card-content">
											<span class="card-title">
												<?php echo $item['NAME'] ?>
											</span>
											<div class="price-tag">
												<?php if ($item['DISCOUNT'] === 0): ?>
													<span class="price-tag__price--discounted">
														<?php echo 'R$ ' . number_format($item['PRICE'], 2, '.', '') ?>
													</span>
												<?php else: ?>
													<span class="price-tag__discount">
														<?php echo $item['DISCOUNT'] . '% OFF' ?>
													</span>
													<span class="price-tag__price--standard">
														<?php echo 'R$ ' . number_format($item['PRICE'], 2, '.', '') ?>
													</span> -
													<span class="price-tag__price--discounted">
														<?php echo 'R$ ' . number_format($item['DISCOUNTEDPRICE'], 2, '.', '') ?>
													</span>
												<?php endif; ?>
											</div>
										</div>
										<div class="card-action">
											<button class="btn-small btn-details">Detalhes</button>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</main>

	<?php include 'footer.php'; ?>

	<script type="text/javascript">
		$('.tabs').tabs();
	</script>
</body>
</html>