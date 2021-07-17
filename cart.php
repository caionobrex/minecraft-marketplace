<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'header.php'; ?>

	<main class="container">
		<div class="cart">
			<header class="cart__header">
				<span class="cart__title">Carrinho</span>
				
				<div class="cart__input-box hide-on-small-only hide">
					<input type="text" placeholder="Nickname" class="cart__input browser-default">
				</div>

				<form action="/cart.php" method="GET" class="cart__input-box hide-on-small-only">
					<input type="hidden" name="action" value="apply_coupon">
					<input type="text" name="coupon" placeholder="Cupon de desconto" class="cart__input browser-default">
					<button type="submit" style="border: none; background-color: transparent; cursor: pointer;" class="blue-text">aplicar</button>
					<p style="position: absolute; margin: 0.3rem 0;" class="red-text hide">Cupom invalido</p>
				</form>

				<span class="cart__price">R$ 40.00</span>
			</header>

			<form action="#" class="cart__input-box hide-on-med-and-up">
				<input type="text" placeholder="Cupon de desconto" class="cart__input browser-default">
				<button type="submit" style="border: none; background-color: transparent; cursor: pointer;" class="blue-text">aplicar</button>
				<p style="position: absolute; margin: 0.3rem 0;" class="red-text hide">Cupom invalido</p>
			</form>

			<main class="cart__main">
				<table class="table">
					<thead>
						<tr>
							<th>Produto</th>
							<th class="center">Nome</th>
							<th class="center">Preço</th>
							<th class="center">Quantidade</th>
							<th class="center">SubTotal</th>
							<th class="center"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<img src="./images/vip2.png" height="60" class="circle red accent-2">
							</td>
							<td class="center">Creeper</td>
							<td class="center">R$ 15.00</td>
							<td class="center">1</td>
							<td class="center">R$ 15.00</td>
							<td class="center">
								<a href="#">
									<i class="material-icons red-text text-accent-2">delete</i>
								</a>
							</td>
						</tr>
						<tr>
							<td>
								<img src="./images/vip2.png" height="60" class="circle red accent-2">
							</td>
							<td class="center">Enderman</td>
							<td class="center">R$ 25.00</td>
							<td class="center">1</td>
							<td class="center">R$ 25.00</td>
							<td class="center">
								<a href="#">
									<i class="material-icons red-text text-accent-2">delete</i>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</main>

			<footer class="cart__footer">
				<a href="/shop.php?serverId=3" class="btn-small">
					<i class="material-icons left">arrow_back</i> Voltar
				</a>
				<a href="/shop.php" class="btn-small disabled">
					<i class="material-icons right">arrow_forward</i> Finalizar
				</a>
			</footer>
		</div>
	</main>

	<?php include 'footer.php'; ?>
</body>
</html>