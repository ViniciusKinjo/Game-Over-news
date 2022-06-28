<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
<script src="script.js"></script>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/estiloCadastro.css">
</head>
<body id="container">
    <div>
        <h1>Bem-vindo ao Game Over</h1>
    <div id="cadastro">
            <h1>Login</h1>  
    <form method="post" action="../controle/controle_login.php">
            <lable>E-mail:</lable><input id="email" type="email" name="email" required><br>
            <lable>Senha</lable> <input id="senha" type="password" name="senha" required><br>

            <input type="submit" name="bt_login" value="Logar">;            
    </form>
    <a class="linkConta" href="../visao/recuperacao.php">Esqueci a senha</a><br>

    <P>Não possui uma conta? então <a class="linkConta" href="Cadastro.php">cadastre-se</a> já!</P>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>