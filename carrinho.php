<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Cheaplothes Carrinho</title>
	<style>
		* {
			box-sizing: border-box;
		}

		html,
		body {
			width: 100%;
			height: 100%;
			margin: 0;
			background-color: white;
			font-family: 'Roboto', sans-serif;
		}

		.shopping-cart {
			width: 750px;
			margin: 80px auto;
			background: #FFFFFF;
			box-shadow: 2px 7px 47px 4px rgba(0, 0, 0, 0.10);
			border-radius: 10px;
			display: flex;
			flex-direction: column;
			padding: 30px;
			;
		}

		.title {
			height: 60px;
			border-bottom: 1px solid #E1E8EE;
			padding: 20px 30px;
			color: #5E6977;
			font-size: 18px;
			font-weight: 400;
		}

		.item {
			padding: 20px 30px;
			height: 120px;
			display: flex;
		}

		.item:not(:first-child) {
			border-top: 1px solid #E1E8EE;
			border-bottom: 1px solid #E1E8EE;
		}

		.buttons {
			position: relative;
			padding-top: 30px;
			margin-right: 60px;
		}

		.pagar {
			position: relative;
			padding-top: 15px;
			margin-left: 60px;
			width: 50%;
		}


		.delete-btn {
			display: inline-block;
			Cursor: pointer;
		}

		.delete-btn {
			width: 18px;
			height: 17px;
		}

		.image {
			width: 30%;
			height: 100%;
		}

		.description {
			padding-top: 10px;
			margin-right: 60px;
			width: 115px;
		}

		.description span {
			display: block;
			font-size: 14px;
			color: #43484D;
			font-weight: 400;
		}

		.description span:first-child {
			margin-bottom: 5px;
		}

		.description span:last-child {
			font-weight: 300;
			margin-top: 8px;
			color: #86939E;
		}

		.quantity {
			padding-top: 20px;
			margin-right: 60px;
		}

		.total-price {
			display: flex;
			align-items: center;
		}

		.total-price-final {
			display: flex;
			align-items: center;
			width: 50%;
		}

		.quantity input {
			-webkit-appearance: none;
			border: none;
			text-align: center;
			width: 32px;
			font-size: 16px;
			color: #43484D;
			font-weight: 300;
		}

		.plus-btn img {
			margin-top: 2px;
		}

		button:focus,
		input:focus {
			outline: 0;
		}

		.numeroProd {
			padding: 5px;
		}

		.titulo {
			color: lightgreen;
			font-weight: bold;
			font-size: 26px;
		}

		.buttao {
			background-color: green;
			border-color: green;
			color: white;
			font-weight: bold;
			width: 100px;
			float: right;
		}

		.buttao:hover {
			transition: .5s;
			background-color: lightgreen;
			border-color: lightgreen;
			color: white;
		}

		.finalizar {
			font-family: "Roboto", sans-serif;
			text-transform: uppercase;
			outline: 0;
			background: #4CAF50;
			width: 100%;
			border: 0;
			padding: 15px;
			color: white;
			font-size: 14px;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
		}

		a {
			color: white;
			text-decoration: none;
		}

		a:hover {
			color: white;
			text-decoration: none;
		}

		.finalizar:hover,
		.finalizar:active,
		.finalizar:focus {
			background: #43A047;
			color: white;
		}
	</style>
</head>

<body>
	<div class='shopping-cart'>
		<header>
			<span class='titulo'>Carrinho Cheaplothes</span>
			<a href="principal.php" class="btn btn-primary buttao">Voltar</a>
		</header>
		<div class='title'>
			Meus Pedidos
		</div>
		<span class='numeroProd'>Produto 1</span>
		<div class='item'>
			<div class='buttons'>
				<img class='delete-btn' src='delete.png' alt=''>
			</div>
			<div class='image'>
				<img src='sapatoExemplo.jpg' width='50%' height='100%' alt='' />
			</div>
			<div class='description'>
				<span>Sapato Nike</span>
				<span>Tamanho: 40</span>
				<span>Branca</span>
			</div>
			<div class='quantity'>
				<input value='1'>
			</div>
			<div class='total-price'>$149,99</div>
		</div>
		<span class='numeroProd'>Produto 2</span>
		<div class='item'>
			<div class='buttons'>
				<img class='delete-btn' src='delete.png' alt=''>
			</div>
			<div class='image'>
				<img src='camisetaExemplo.jpg' width='50%' height='100%' alt='' />
			</div>
			<div class='description'>
				<span>Camiseta Time</span>
				<span>Tamanho: 40</span>
				<span>Branca</span>
			</div>
			<div class='quantity'>
				<input value='1'>
			</div>
			<div class='total-price'>$149,99</div>
		</div>
		<span class='numeroProd'>Produto 3</span>
		<div class='item'>
			<div class='buttons'>
				<img class='delete-btn' src='delete.png' alt=''>
			</div>
			<div class='image'>
				<img src='camisetaExemplo.jpg' width='50%' height='100%' alt='' />
			</div>
			<div class='description'>
				<span>Camiseta Time</span>
				<span>Tamanho: 40</span>
				<span>Branca</span>
			</div>
			<div class='quantity'>
				<input value='1'>
			</div>
			<div class='total-price'>$149,99</div>
		</div>
		<span class='numeroProd'>Produto 4</span>
		<div class='item'>
			<div class='buttons'>
				<img class='delete-btn' src='delete.png' alt=''>
			</div>
			<div class='image'>
				<img src='camisetaExemplo.jpg' width='50%' height='100%' alt='' />
			</div>
			<div class='description'>
				<span>Camiseta Time</span>
				<span>Tamanho: 40</span>
				<span>Branca</span>
			</div>
			<div class='quantity'>
				<input value='1'>
			</div>
			<div class='total-price'>$149,99</div>
		</div>
		<span class='numeroProd'>Produto 5</span>
		<div class='item'>
			<div class='buttons'>
				<img class='delete-btn' src='delete.png' alt=''>
			</div>
			<div class='image'>
				<img src='camisetaExemplo.jpg' width='50%' height='100%' alt='' />
			</div>
			<div class='description'>
				<span>Camiseta Time</span>
				<span>Tamanho: 40</span>
				<span>Branca</span>
			</div>
			<div class='quantity'>
				<input value='1'>
			</div>
			<div class='total-price'>$149,99</div>
		</div>
		<span class='numeroProd'>Total a Pagar:</span>

		<div class='item'>
			<div class='total-price-final'>Valor: $2599,99</div>
			<div class='pagar'>
				<a href="principal.php"><button class='finalizar'>Finalizar Compra</button></a>
				<!-- Pegar a data e enviar também -->
			</div>
		</div>
	</div>
</body>

</html>