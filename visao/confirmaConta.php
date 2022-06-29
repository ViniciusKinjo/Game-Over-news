<?php
  require '../modelo/conexao.php';

  if(isset($_SESSION['id']) && !empty($_SESSION['id'])):
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
<script src="script.js"></script>
    <title>Confirmar conta</title>
    <link rel="stylesheet" type="text/css" href="css/estiloCastrado.css">
</head>
<body id="container">
    <div>
    <div id="cadastro">
            <h1>Confirmar email</h1>  
    <form method="post" action="../controle/controle_cadastro.php">
            <lable>Confirme o seu email!</lable><input id="email" type="email" name="email"><br>
            <input type="submit" id="bt" name="bt_confirma" value="Confirmar">
    </form>
    <p>Voltar para a página <a class="linkConta" href="../visao/home.php">principal</a></p>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
<?php
  else: header("Location:../visao/index.php"); endif;
?>