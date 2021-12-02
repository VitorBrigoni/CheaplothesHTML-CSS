<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<style>
		@import url(https://fonts.googleapis.com/css?family=Lato:400,300);

		body,
		html {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 35%;
			left: 35%;
			transform: translate(-35%, -35%);
			font-family: "lato";
			color: #333;
		}

		.site {
			color: lightgreen;
			font-size: 36px;
		}

		.logo {
			width: 80px;
			height: 80px;
		}

		li {
			position: relative;
			font-size: 20px;
			padding: 20px;
		}

		.li::after {
			content: '';
			display: block;
			height: 3px;
			width: 100%;
			background-color: lightgreen;
			position: absolute;
			left: 0%;
			transition: .5s;
			opacity: 0;
		}

		.nav-link:hover {
			color: lightgreen;
		}

		.li:hover::after {
			transform: translate(0, 1.7em);
			width: 100%;
			background-color: lightgreen;
			left: 0%;
			opacity: 1;
		}

		.carrinho{
			margin-left: 6px;
			margin-right: 6px;
			border-right: solid lightgrey 1px;
			padding-right: 5px;
			border-left: solid lightgrey 1px;
			padding-left: 5px;
		}

		.ampliado {
			width: 80%;
			margin: 80px auto;
			background: #FFFFFF;
			box-shadow: 2px 7px 47px 4px rgba(0, 0, 0, 0.10);
			border-radius: 10px;
			padding: 30px;
		}


		input[type=radio] {
			display: none;
		}

		input[type=radio]:checked+label span {
			transform: scale(1.25);
		}

		input[type=radio]:checked+label .red {
			border: 2px solid #711313;
		}

		input[type=radio]:checked+label .yellow {
			border: 2px solid #816102;
		}

		input[type=radio]:checked+label .green {
			border: 2px solid #0e4e1d;
		}

		input[type=radio]:checked+label .blue {
			border: 2px solid #103f62;
		}

		input[type=radio]:checked+label .pink {
			border: 2px solid #851554;
		}

		input[type=radio]:checked+label .pp {
			border: 2px solid green;
			background: lightgreen;
			color: white;
		}

		input[type=radio]:checked+label .p {
			border: 2px solid green;
			background: lightgreen;
			color: white;
		}

		input[type=radio]:checked+label .m {
			border: 2px solid green;
			background: lightgreen;
			color: white;
		}

		input[type=radio]:checked+label .g {
			border: 2px solid green;
			background: lightgreen;
			color: white;
		}

		input[type=radio]:checked+label .gg {
			border: 2px solid green;
			background: lightgreen;
			color: white;
		}

		label {
			display: inline-block;
			width: 35px;
			height: 35px;
			margin-right: 20px;
			cursor: pointer;
		}

		label:hover span {
			transform: scale(1.25);
		}

		label span {
			display: block;
			width: 100%;
			height: 100%;
			transition: transform 0.2s ease-in-out;
		}

		label span.red {
			background: #DB2828;
			height: 100%;
		}

		p {
			text-align: center;
			color: white;
			display: flex;
			justify-content: center;
			line-height: 2;
		}

		label span.yellow {
			background: #FBBD08;
		}

		label span.green {
			background: #21BA45;
		}

		label span.blue {
			background: #2185D0;
		}

		label span.pink {
			background: #E03997;
		}

		label span.pp {
			background: lightgreen;
			color: white;
		}

		label span.p {
			background: lightgreen;
			color: white;
		}

		label span.m {
			background: lightgreen;
			color: white;
		}

		label span.g {
			background: lightgreen;
			color: white;
		}

		label span.gg {
			background: lightgreen;
			color: white;
		}

		h1 {
			margin-bottom: 10px;
		}

		h2,
		label {
			margin-bottom: 25px;
			color: lightgreen;
		}

		button {
			font-family: "Roboto", sans-serif;
			text-transform: uppercase;
			outline: 0;
			background: #4CAF50;
			width: 100%;
			border: 0;
			padding: 15px;
			color: #FFFFFF;
			font-size: 14px;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
		}

		button:hover {
			background: #43A047;
			color: white;
			transition: 0.5s;
			font-weight: bold;
		}

		a {
			color: white;
			text-decoration: none;
		}

		a:hover {
			color: white;
			text-decoration: none;
		}
		@media only screen and (max-width: 991px) {
			.carrinho { 
				margin-left: 0px;
				margin-right: 0px;
				border-right: solid lightgrey 0px;
				padding-right: 0px;
				border-left: solid lightgrey 0px;
				padding-left: 0px;
			}
			.nomeSite{
				font-size:50px;
			}
		}
		@media only screen and (max-width: 1399px) {
			#ativo::after{
				transform: translate(0, 1.2em);
			}
		}
		@media only screen and (max-width: 653px) {
			.nomeSite{
				font-size:36px;
			}
		}
		@media only screen and (max-width: 505px) {
			.nomeSite{
				font-size:26px;
			}
		}
	</style>
	<title>Cheaplothes Principal</title>

</head>

<body>
	<header class="p-3 mb-3 border-bottom">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content justify-content-lg-start">
				<a class="navbar-brand">
					<h1 class='site'>CHEAPLOTHES</h1>
				</a>
				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<li><a href="principal.php" class="nav-link px-2 link-secondary li">Home </a></li>
					<li><a href="camisetas.php" class="nav-link px-2 link-secondary li"> Camisetas </a></li>
					<li><a href="moletons.php" class="nav-link px-2 link-dark li">Moletons</a></li>
					<li><a href="bermudas.php" class="nav-link px-2 link-dark li">Bermudas</a></li>
					<li><a href="sapatos.php" class="nav-link px-2 link-dark li">Sapatos</a></li>
				</ul>

				<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
					<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
				</form>

				<div class="dropdown text-end">
					<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="user.png" alt="mdo" width="32" height="32" class="rounded-circle">
					</a>
					<ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
						<li style='font-size: 15px; padding: 3px;'>>Usuário</li>
						<li style='font-size: 15px; padding: 0px;'>
							<hr class="dropdown-divider">
						</li>
						<li style='font-size: 15px; padding: 3px;'><a class="dropdown-item" href="index.php">Sair</a></li>
					</ul>
				</div>
				<div class='col-12 col-lg-auto carrinho'>
					<a href='carrinho.php'><img src="carrinho.png" alt="mdo" width="32" height="32" class=""></a>
				</div>
				<div class='col-12 col-lg-auto cardController'>
					<a href='cardController.php'><img src="cardController.png" alt="mdo" width="32" height="32" class=""></a>
				</div>
			</div>
		</div>
	</header>

	<body>
		<div class='container'>
			<div class='row ampliado'>
				<img class='col' src='camisetaExemplo.jpg' alt='img'>
				<div class='col'>
					<h1>Camisa Nike Corinthians I 2021/22 Jogador Masculino</h1>
					<h2>$78,99</h2>
					<input type="radio" name="color" id="red" value="red" />
					<label for="red"><span class="red rounded-circle"></span></label>

					<input type="radio" name="color" id="green" value="green" />
					<label for="green"><span class="green rounded-circle"></span></label>

					<input type="radio" name="color" id="yellow" value="yellow" />
					<label for="yellow"><span class="yellow rounded-circle"></span></label>

					<input type="radio" name="color" id="blue" value="blue" />
					<label for="blue"><span class="blue rounded-circle"></span></label>

					<input type="radio" name="color" id="pink" value="pink" />
					<label for="pink"><span class="pink rounded-circle"></span></label><br>


					
					<input type="radio" name="size" id="pp" value="pp" />
					<label for="pp"><span class="pp rounded-circle">
							<p>PP</p>
						</span></label>

					<input type="radio" name="size" id="p" value="p" />
					<label for="p"><span class="p rounded-circle">
							<p>P</p>
						</span></label>

					<input type="radio" name="size" id="m" value="m" />
					<label for="m"><span class="m rounded-circle">
							<p>M</p>
						</span></label>

					<input type="radio" name="size" id="g" value="g" />
					<label for="g"><span class="g rounded-circle">
							<p>G</p>
						</span></label>

					<input type="radio" name="size" id="gg" value="gg" />
					<label for="gg"><span class="gg rounded-circle">
							<p>GG</p>
						</span></label><br>
					<a href='carrinho.php' class=''><button>Adicionar ao Carrinho</button></a>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>

</html>