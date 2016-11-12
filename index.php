<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Mirror Fashion</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width:939px)">
</head>
<body>
	<?php include("cabecalho.php"); ?>

	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>
			<form>
				<input type="search">
				<input type="image" src="img/busca.png">
			</form>
		</section>

		<section class="menu-departamentos">
			<h2>Departamentos</h2>

			<nav>
				<ul>
					<li>
						<a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapats</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>

		<img src="img/destaque-home.png" alt="Promoção: Big City Nights">
	</div>


	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>

			<ol>
				<!-- Primeiro Produto-->
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption>Fuzz Cardigan por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption>Casaco Verde por R$149,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura5.png">
							<figcaption>Regata Azul por R$79,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura10.png">
							<figcaption>Blusa Rosa por R$99,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura14.png">
							<figcaption>Blusa Azul Escuro por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption>Camisa Caveira Azul por R$69,00</figcaption>
						</figure>
					</a>
				</li>
			</ol>
			<button type="button">Mostrar mais</button>
		</section>
		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
			<!-- Primeiro Produto-->
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.png">
							<figcaption>Fuzz Cardigan por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption>Casaco Verde por R$149,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura5.png">
							<figcaption>Regata Azul por R$79,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura10.png">
							<figcaption>Blusa Rosa por R$99,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura14.png">
							<figcaption>Blusa Azul Escuro por R$129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption>Camisa Caveira Azul por R$69,00</figcaption>
						</figure>
					</a>
				</li>
			</ol>
			<button type="button">Mostrar mais</button>
		</section>
	</div>

	<?php include("rodape.php"); ?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
</body>
</html>