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


        
		.cria {
			width: 80%;
			margin: 80px auto;
			background: #FFFFFF;
			box-shadow: 2px 7px 47px 4px rgba(0, 0, 0, 0.10);
			border-radius: 10px;
			padding: 30px;
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
            margin-top:20px;
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
        textarea {
            padding: 10px;
            max-width: 100%;
            line-height: 1.5;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-shadow: 1px 1px 1px #999;
            font-size: .8rem;
            letter-spacing: 1px;
            margin-bottom:20px;
        }
        .multiselect {
            width: 65%;
            margin-top:20px;
        }

        .selectBox {
            position: relative;
        }

        .selectBox select {
            width: 100%;
            font-weight: bold;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #checkboxesColor {
            display: none;
            border: 1px #dadada solid;
        }

        #checkboxesColor label {
            display: block;
        }
        #checkboxesSize {
            display: none;
            border: 1px #dadada solid;
        }

        #checkboxesSize label {
            display: block;
        }

        input[type='file'] {
            display: none
        }

        .arquivoSelec {
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
            margin-bottom:10px;
            text-align: center;
        }
        .arquivoSelec:hover{
            background: #43A047;
			color: white;
			transition: 0.5s;
        }

        .options{
            font-family: "Roboto", sans-serif;
			text-transform: uppercase;
			outline: 0;
			background: #4CAF50;
			border: 0;
			padding: 5px;
			color: #FFFFFF;
			font-size: 14px;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
            margin-top:5px;
        }
        .options:hover{
            background: #43A047;
			color: white;
			transition: 0.5s;
			font-weight: bold;
        }
        #imgPreview{
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5px;
            max-height: 75%;
            max-width: 100%;
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
			<div class='row cria'>
                <div class='col text-center'>
                        <label class='arquivoSelec' for='selecao-arquivo'>Selecionar um arquivo &#187;</label><br>
                        <input id='selecao-arquivo' onchange="previewFile()" type='file'>
                        <img id='imgPreview' src="" class='' alt="">
                </div>
				<div class='col'>
                <textarea id="nomeProd" name="nomeProd" rows="5" cols="33" placeholder='Informe o nome do produto!'></textarea><br>
                <input type='number' placeholder='Informe o preço!' ><br>
                <form>
                    <div class="multiselect">
                        <div class="selectBox" onclick="showCheckboxesColor()">
                        <select>
                            <option>Selecione as cores disponíveis</option>
                        </select>
                        <div class="overSelect"></div>
                        </div>
                        <div id="checkboxesColor">
                            <label class='options' for="red">
                                <input type="checkbox" id="red" />Vermelho</label>
                            <label class='options' for="yellow">
                                <input type="checkbox" id="yellow" />Amarelo</label>
                            <label class='options' for="blue">
                                <input type="checkbox" id="blue" />Azul</label>
                            <label class='options' for="green">
                                <input type="checkbox" id="green" />Verde</label>
                            <label class='options' for="pink">
                                <input type="checkbox" id="pink" />Rosa</label>
                        </div>
                    </div>
                    <div class="multiselect">
                        <div class="selectBox" onclick="showCheckboxesSize()">
                        <select>
                            <option>Selecione os tamanhos disponíveis</option>
                        </select>
                        <div class="overSelect"></div>
                        </div>
                        <div id="checkboxesSize">
                            <label class='options' for="pp">
                                <input type="checkbox" id="pp" />PP</label>
                            <label class='options' for="p">
                                <input type="checkbox" id="p" />P</label>
                            <label class='options' for="m">
                                <input type="checkbox" id="m" />M</label>
                            <label class='options' for="g">
                                <input type="checkbox" id="g" />G</label>
                            <label class='options' for="gg">
                                <input type="checkbox" id="gg" />GG</label>
                        </div>
                    </div>
                </form>
					<a href='principal.php' class=''><button>Adicionar novo Card</button></a>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            var expanded = false;

             function showCheckboxesColor() {
             var checkboxes = document.getElementById("checkboxesColor");
             if (!expanded) {
                 checkboxes.style.display = "block";
                 expanded = true;
             } else {
                 checkboxes.style.display = "none";
                 expanded = false;
             }
             }
             function showCheckboxesSize() {
             var checkboxes = document.getElementById("checkboxesSize");
             if (!expanded) {
                 checkboxes.style.display = "block";
                 expanded = true;
             } else {
                 checkboxes.style.display = "none";
                 expanded = false;
             }
             }
            function previewFile() {
                var preview = document.getElementById('imgPreview');
                var file    = document.querySelector('input[type=file]').files[0];
                var reader  = new FileReader();

                reader.onloadend = function () {
                    preview.src = reader.result;
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.src = "";
                }
            }
        </script>
    </body>

</html>