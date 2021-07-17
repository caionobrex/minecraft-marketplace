<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'header.php'; ?>

	<main class="main-content container">
		<div class="row">
			<div class="col s12 m7 l8">		
				<ul class="collapsible">
					<?php for ($i = 0; $i < 10; $i++): ?>
						<li class="<?php echo $i === 0 ? 'active' : '' ?>">
							<div class="collapsible-header">
								<?php echo 'Question ' . ($i + 1); ?>
							</div>
							<div class="collapsible-body">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
							</div>
						</li>
					<?php endfor; ?>
				</ul>
			</div>

			<div class="col s12 m5 l4">
				<div class="card">
					<div class="card-content">
						<span class="card-title">F A Q</span>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					</div>
				</div>

				<iframe src="https://discord.com/widget?id=787916728356175873&theme=dark" width="100%" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>

				<div class="twitter-card card">
					<header class="twitter-card__header">
						<span class="twitter-card__title">Twitter</span>
						<a href="https://twitter.com/caionobrex?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @caionobrex</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</header>

					<main class="twitter-card__main">
						<a class="twitter-timeline" href="https://twitter.com/caionobrex?ref_src=twsrc%5Etfw">Tweets by caionobrex</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</main>
				</div>
			</div>
		</div>
	</main>

	<?php include 'footer.php'; ?>

	<script type="text/javascript">
		$('.collapsible').collapsible({ accordion: false });
	</script>
</body>
</html>