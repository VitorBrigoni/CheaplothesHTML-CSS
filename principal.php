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
		body,
		html {
			width: 100%;
			height: 100%;
		}

		.site {
			color: lightgreen;
			font-size: 36px;
		}

		.logo {
			width: 80px;
			height: 80px;
		}

		#ativo {
			color: lightgreen;
		}

		#ativo::after {
			content: '';
			display: block;
			height: 3px;
			width: 100%;
			background-color: lightgreen;
			position: absolute;
			left: 0%;
			transition: .5s;
			opacity: 1;
			transform: translate(0, 1.7em);
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

		.home {
			background: rgb(60, 186, 81);
			background: linear-gradient(180deg, rgba(60, 186, 81, 1) 0%, rgba(15, 224, 25, 1) 100%);
			height: 90%;
			width: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin-top: -1%;
		}
		.carrinho{
			margin-left: 6px;
			margin-right: 6px;
			border-right: solid lightgrey 1px;
			padding-right: 5px;
			border-left: solid lightgrey 1px;
			padding-left: 5px;
		}
		.nomeSite {
			color: white;
			font-weight: bold;
			font-size: 78px;
			font-family: 'Mochiy Pop P One', sans-serif;
			width: 50%;
			padding-bottom: 50px;
		}

		.escrita {
			color: white;
			font-family: 'Mochiy Pop P One', sans-serif;
			width: 50%;
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
					<li><a href="principal.php" id='ativo' class="nav-link px-2 link-secondary">Home </a></li>
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
	<div class='home'>
		<div class='row text-center nomeSite'>Seja bem-vindo a CHEAPLOTHES</div>
		<div class='row text-center escrita'>
			Somos uma empresa especializada no fornecimento de camisetas,
			moletons, bermudas e sapatos para a indústria da moda.
			Atuamos desde 1995 com foco centrado no mercado corporativo da Serra Gaúcha.
			Contamos com uma equipe altamente qualificada para atender
			com profissionalismo e competência as mais variadas demandas dos nossos clientes, entregando segurança e confiabilidade em cada peça vendida.
		</div>
	</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>