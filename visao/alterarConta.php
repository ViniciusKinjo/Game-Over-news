<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
<script src="script.js"></script>
    <title>Alterar Conta</title>
    <link rel="stylesheet" type="text/css" href="css/estiloCastrado.css">
</head>
<body id="container">
    <?php
        include_once("../modelo/cadastro.php");
        session_start();
        $id = unserialize($_SESSION['id'])->getId();
        $nome = unserialize($_SESSION['id'])->getNome();
        $email = unserialize($_SESSION['id'])->getEmail();
    ?>

    <div>
    <div id="cadastro">
    <form method="post" action="../controle/controle_cadastro.php">
        <label for="nome">Nome</label><input type="text" name="nome" value="<?php echo $nome ?>">
        <label for="email">Email</label><input type="email" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="bt_salvar" value="Salvar">
        
    </form>
    <p>Voltar para a página <a class="linkConta" href="home.php">principal</a></p>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
