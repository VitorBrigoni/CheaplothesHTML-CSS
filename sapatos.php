<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
       body, html{
        width:100%;
        height: 100%;
      }
        h1{
            color: lightgreen;
        }
        .logo{
            width:80px;
            height:80px;
        }
        #ativo{
          color:lightgreen;
        }
        #ativo::after{
          content:'';
          display: block;
          height:3px;
          width:100%;
          background-color: lightgreen;
          position: absolute;
          left: 0%;
          transition: .5s;
          opacity: 1;
          transform: translate(0, 1.7em);
        }
        li{
          position: relative;
          font-size: 20px;
          padding:20px;
        }
        .li::after{
          content:'';
          display: block;
          height:3px;
          width:100%;
          background-color: lightgreen;
          position: absolute;
          left: 0%;
          transition: .5s;
          opacity: 0;
        }
        .nav-link:hover{
          color:lightgreen;
        }
        .li:hover::after{
          transform: translate(0, 1.7em);
          width: 100%;
          background-color: lightgreen;
          left: 0%;
          opacity: 1;
        }
        .col{
          margin: 8px;
          margin-bottom: 20px;
        }
        .btn{
          background-color:green;
          border-color: green;
          color:white;
          font-weight: bold;
        }
        .btn:hover{
          transition: .5s;
          background-color:lightgreen;
          border-color: lightgreen;
          color:white;
        }
        .carrinho{
          margin-left:15px;
        }
    </style>
    <title>Cheaplothes Sapatos</title>

  </head>
  <body>
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content justify-content-lg-start">
        <a class="navbar-brand"><h1>CHEAPLOTHES</h1></a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="principal.php" class="nav-link px-2 link-secondary li">Home</a></li>
          <li><a href="camisetas.php" class="nav-link px-2 link-secondary li">Camisetas</a></li>
          <li><a href="moletons.php"  class="nav-link px-2 link-dark li">Moletons</a></li>
          <li><a href="bermudas.php" class="nav-link px-2 link-dark li">Bermudas</a></li>
          <li><a href="sapatos.php" id='ativo' class="nav-link px-2 link-dark">Sapatos</a></li>
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
            <li style='font-size: 15px; padding: 0px;'><hr class="dropdown-divider"></li>
            <li style='font-size: 15px; padding: 3px;'><a class="dropdown-item" href="index.php">Sair</a></li>
          </ul>
        </div>
        <div class='carrinho'>
          <a href='carrinho.php'><img src="carrinho.png" alt="mdo" width="32" height="32" class=""></a>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
        <div class="row">
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="sapatoExemplo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">R$ 599,99</h5>
            <p class="card-text">Tênis Nike Blazer Low X Masculino</p>
            <a href="#" class="btn btn-primary">Ampliar</a>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="sapatoExemplo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">R$ 599,99</h5>
            <p class="card-text">Tênis Nike Blazer Low X Masculino</p>
            <a href="#" class="btn btn-primary">Ampliar</a>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="sapatoExemplo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">R$ 599,99</h5>
            <p class="card-text">Tênis Nike Blazer Low X Masculino</p>
            <a href="#" class="btn btn-primary">Ampliar</a>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="sapatoExemplo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">R$ 599,99</h5>
            <p class="card-text">Tênis Nike Blazer Low X Masculino</p>
            <a href="#" class="btn btn-primary">Ampliar</a>
          </div>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="sapatoExemplo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">R$ 599,99</h5>
            <p class="card-text">Tênis Nike Blazer Low X Masculino</p>
            <a href="#" class="btn btn-primary">Ampliar</a>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="sapatoExemplo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">R$ 599,99</h5>
            <p class="card-text">Tênis Nike Blazer Low X Masculino</p>
            <a href="#" class="btn btn-primary">Ampliar</a>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="sapatoExemplo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">R$ 599,99</h5>
            <p class="card-text">Tênis Nike Blazer Low X Masculino</p>
            <a href="#" class="btn btn-primary">Ampliar</a>
          </div>
          </div>
          </div>
          <div class="col">
          <div class="card" style="width: 18rem;">
          <img src="sapatoExemplo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">R$ 599,99</h5>
            <p class="card-text">Tênis Nike Blazer Low X Masculino</p>
            <a href="#" class="btn btn-primary">Ampliar</a>
          </div>
          </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>