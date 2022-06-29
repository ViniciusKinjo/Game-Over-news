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
        <h2>Game Over</h2>
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
            <div class="col-md-12">
              <h1>Sobre nós</h1>
            </div>
            <div class="col-md-12" id="sobreTexto">
              <p>Esse site foi criado para fins acadêmicos</p>
              <p>Tivemos a idéia de criar um site focado em notícias de jogos eletrônicos de todos os tipos. Para manter os gamers atualizados sobre os seus jogos favoritos!</p>
              
            </div>  
            <div class="col-md-12">
              <h1>Alunos</h1>
            </div>
            <div id="sobreTexto">
              <p>Rafael Oliveira de Araújo RA: 21452978</p>
              <p>Thiago Diniz Cabral RA: 21442918</p>
              <p>Vinicius Hidenori Kinjo RA: 21445884</p>
            </div>
            <div class="col-md-12">
              <h1>Tecnologias utilizadas</h1>
            </div>
            <div id="sobreTexto">
              <p>HTML 5</p>
              <p>CSS/Bootstrap</p>
              <p>PHP</p>
              <p>MySQsL</p>
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