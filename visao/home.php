
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
    <meta nome="viewport" content="width-device-width, initial-scale=1, shrink-to-fit-no">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Página Inicial</title>
    

</head>
<body>
    <div class="cabecalho">
      <header>
        <h1>Game Over</h1>
        <p>O site de notícias focada no mundo gamer</p>
      </header>
    </div>
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
                <a class="dropdown-item" href="acaoEaventura.php">Ação e Aventura</a>
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
          <p class="nav-item" id="nomeUsuario"> </p>
          <img class="logo" src="img/perfil.png">
        </div>
      </nav>
      <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Principais notícias</h1>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <div class="card" style="width: 20rem; height: 30rem;">
              <img class="card-img-top" src="img/valorant.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Valorant</h5>
                <p class="card-text">Ato III do Episídio 2 no Valorant! Quer saber mais sobre as mudanças? Acesse o site oficial do Valorant! <br><br>27/04/2021</p>
                <a href="https://playvalorant.com/pt-br/news/" class="btn btn-secondary">Visitar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <div class="card" style="width: 20rem; height: 30rem;">
              <img class="card-img-top" src="img/lol.png" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">League of Legends</h5>
                <p class="card-text">Patch 11.9 de League of Legends! Quer saber mais sobre as mudanças? Acesse o site oficial de League of Legends<br><br>27/04/2021</p>
                <a href="https://br.leagueoflegends.com/pt-br/news/game-updates/notas-da-atualizacao-11-9/" class="btn btn-secondary">Visitar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <div class="card" style="width: 20rem; height: 30rem;">
              <img class="card-img-top" src="img/fifa.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Fifa 21</h5>
                <p class="card-text">Nova atualização do "Fifa 21" está disponível! Quer saber mais sobre as mudanças? Acesse o site oficial da EA<br><br>05/04/2021</p>
                <a href="https://www.ea.com/pt-br/games/fifa/fifa-21/news/pitch-notes-online-gameplay-responsiveness-apr-2021" class="btn btn-secondary">Visitar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <div class="card" style="width: 20rem; height: 30rem;">
              <img class="card-img-top" src="img/fortnite.jpg" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fortnite</h5>
                <p class="card-text">Nova atualização do "Fortnite" deixa ele com download menor e com melhor Desempenho! Quer saber mais sobre as mudanças? Acesse o site oficial do "Fortine"<br><br>29/04/2021</p>
                <a href="https://www.epicgames.com/fortnite/pt-BR/news/fortnite-performance-mode-boosts-pc-fps" class="btn btn-secondary">Visitar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <div class="card" style="width: 20rem; height: 30rem;">
              <img class="card-img-top" src="img/gta.jpg" alt="...">
              <div class="card-body">
                <h5 class="card-title">GTA V</h5>
                <p class="card-text">Trailer de GTA V para o Playstation 5! Com previsão de lançamento no segundo semestre de 2021! Confira no site da rockstargames agora!<br><br>11/05/2020</p>
                <a href="https://www.rockstargames.com/br/videos/12142" class="btn btn-secondary">Visitar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <div class="card" style="width: 20rem; height: 30rem;">
              <img class="card-img-top" src="img/starwars.jpg" alt="...">
              <div class="card-body">
                <h5 class="card-title">Star Wars</h5>
                <p class="card-text">Atualização de otimização para a nova geração! Quer saber mais sobre as mudanças? Acesse o site oficial<br><br>12/01/2020</p>
                <a href="https://www.ea.com/pt-br/games/starwars/jedi-fallen-order/news/next-gen-optimization-update" class="btn btn-secondary">Visitar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <div class="card" style="width: 20rem; height: 30rem;">
              <img class="card-img-top" src="img/forza.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Forza Horizon 4</h5>
                <p class="card-text">Nova atualização do Forza Horizon 4, com novos carros! Quer saiber mais? Acesse o site oficial do Forza Horizon 4!<br><br>05/04/2021</p>
                <a href="https://forzamotorsport.net/en-us/news/fh4-series-34" class="btn btn-secondary">Visitar</a>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin-bottom: 10px;">
            <div class="card" style="width: 20rem; height: 30rem;">
              <img class="card-img-top" src="img/theSims4.jpg" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">The sims 4</h5>
                <p class="card-text">Sims 411 está disponível! Quer saber mais? Acesse o site oficial do The sims<br><br>27/04/2021</p>
                <a href="https://www.ea.com/pt-br/games/the-sims/news/sims-411-recap-4-27-2021" class="btn btn-secondary">Visitar</a>
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
<script src="javascript/script.js"></script>
</body>
</html>

<?php
  else: header("Location:../visao/index.php"); endif;
?>