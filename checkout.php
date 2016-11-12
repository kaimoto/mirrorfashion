<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-flatly.css">
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top"><!--navbar-static-top-->
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Mirror Fashion"></a>
			<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
				<span class="glyphicon glyphicon-align-justify"></span>
			</button>
		</div>
		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Perguntas frequentes</a></li>
			<li><a href="#">Entre em contato</a></li>
		</ul>
		
	</nav>
	<div class="jumbotron">
		<div class="container">
			<h1>Ótima Escolha!</h1>
			<p>
				Obrigado por comprar na Mirror Fashion!
				Preencha seus dados para efetivar a compra.
			</p>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-lg-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2 class="panel-title">Sua Compra</h2>
					</div>
					<div class="panel-body">
						<img src="img/produtos/foto2-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail img-responsive">
						<dl>
							<dt>Nome</dt>
							<dd><?= $_POST['nome'] ?></dd>
							<dt>Preço</dt>
							<dd id="preco"><?= $_POST['preco'] ?></dd>
							<dt>Cor</dt>
							<dd><?= $_POST['cor'] ?></dd>
							<dt>Tamanho</dt>
							<dd><?= $_POST['tamanho'] ?></dd>
						</dl>

						<div class="form-group">
							<label for="qt">Quantidade</label>
							<input type="number" id="qt" class="form-control" min="0" max="99" value="1">
						</div><!--div quantidade-->
						<div class="form-group">
							<label for="total">Total</label>
							<output for="qt preco" id="total" class="form-control">
								<?= $_POST["preco"] ?>		
							</output>
						</div><!--div mostrando o preço total-->

					</div>
				</div>
			</div><!--col-sm-4-->
			<form class="col-sm-8 col-lg-9">
				<div class="row">
					<fieldset class="col-md-6">

						<legend>Dados Pessoais</legend>


						<div class="form-group">
							<label for="nome">Nome Completo</label>
							<input type="text" class="form-control" id="nome" name="nome" autofocus required>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<!--<input type="email" name="email" id="email" class="form-control" placeholder="email@exemplo.com">-->
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="email" name="email" id="email" class="form-control" placeholder="email@exemplo.com">
							</div>
						</div>

						<div class="form-group">
							<label for="cpf">CPF</label>
							<input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
						</div>

						<div class="checkbox">
							<label>
								<input type="checkbox" value="sim" name="spam" checked> Quero receber spam da Mirror Fashion
							</label>
						</div>

					</fieldset>

					<fieldset class="col-md-6">

						<legend>Cartão de Crédito</legend>


						<div class="form-group">
							<label for="numero-cartao">Número - CVV</label>
							<input type="text" name="numero-cartao" id="numero-cartao" class="form-control" data-mask="9999 9999 9999 - 999">
						</div>

						<div class="form-group">
							<label for="bandeira-cartao">Bandeira</label>
							<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
								<option value="master">Master Card</option>
								<option value="visa">VISA</option>
								<option value="amex">American Express</option>
							</select>
						</div>

						<div class="form-group">
							<label for="validade-cartao">Validade</label>
							<input type="month" name="validade-cartao" id="validade-cartao" class="form-control">
						</div>

					</fieldset>
				</div>

				<button type="submit" class="btn btn-primary btn-lg">
					<span class="glyphicon glyphicon-thumbs-up pull-right"></span>
					Confirmar Pedido</button>
				</form>
			</div>
		</div><!--div row-->
	</div><!--div container-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/inputmask-plugin.js"></script>
	<script type="text/javascript" src="js/total.js"></script>
</body>
</html>