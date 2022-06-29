<?php
  require '../modelo/conexao.php';

  if(isset($_SESSION['id']) && !empty($_SESSION['id'])):
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Game Over</h1>
        <p>O site de notícias focada no mundo gamer!</p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php"><img class="logo" src="img/caveira.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categoria
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="acaoEaventura.php">Ação E Aventura</a>
                <a class="dropdown-item" href="fps.php">FPS</a>
                <a class="dropdown-item" href="battle.php">Battle Royale</a>
                <a class="dropdown-item" href="moba.php">Moba</a>
                <a class="dropdown-item" href="esportes.php">Esportes</a>
                <a class="dropdown-item" href="corrida.php">Corrida</a>
                <a class="dropdown-item" href="simulacao.php">Simulação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sobre.php">Sobre</a>
              </li>
          </ul>
          <a class="nav-link" href="confirmaConta.php">Editar conta</a>
          <a class="nav-link" href="../modelo/logout.php">Sair</a>
          <img class="logo" src="img/perfil.png">
        </div>
        
      </nav>
      <section>
      <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6">
              <h1>Simulação</h1>
            </div>
            <div class="col-sm-4" style="margin-bottom: 10px;">
              <div class="card" style="width: 20rem; height: 30rem;">
                <img class="card-img-top" src="img/theSims4.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">The sims 4</h5>
                  <p class="card-text">Sims 411 está disponível! Quer saber mais? Acesse o site oficial do The sims<br><br>27/04/2021</p>
                  <a href="https://www.ea.com/pt-br/games/the-sims/news/sims-411-recap-4-27-2021" class="btn btn-secondary">Visitar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4" style="margin-bottom: 10px;">
              <div class="card" style="width: 20rem; height: 30rem;">
                <img class="card-img-top" src="img/ets2.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Euro Truck Simulator 2</h5>
                  <p class="card-text">Nova Atualização do Euro Truck Simulator está disponível! Quer saber mais? Acesse o site oficial<br><br>28/04/2021</p>
                  <a href="https://eurotrucksimulator2.com/update.php" class="btn btn-secondary">Visitar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4" style="margin-bottom: 10px;">
              <div class="card" style="width: 20rem; height: 30rem;">
                <img class="card-img-top" src="img/ats.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">American Truck Simulator</h5>
                  <p class="card-text">Nova dlc do American Truck Simulator está disponível! Quer saber mais sobre a DLC? Acesse o site da steam!<br><br>30/09/2020</p>
                  <a href="https://store.steampowered.com/app/1415690/American_Truck_Simulator__Freightliner_Cascadia/" class="btn btn-secondary">Visitar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4" style="margin-bottom: 10px;">
              <div class="card" style="width: 20rem; height: 30rem;">
                <img class="card-img-top" src="img/mfs.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">Microsoft Flight Simulator</h5>
                  <p class="card-text">Novo Microsoft Flight Simulator está disponível! Quer saber mais sobre o novo jogo da Microsft? Acesse o site oficial e confira!<br><br>17/08/2020</p>
                  <a href="https://www.xbox.com/pt-BR/games/microsoft-flight-simulator" class="btn btn-secondary">Visitar</a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
      <footer>
        <div>

          <div class="col-auto">
              <p>© Coryright 2021</p>
          </div>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
<?php
  else: header("Location:../visao/index.php"); endif;
?>