
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/estiloCastrado.css">
</head>
<body id="container">
    <div id="cadastro">
        <h2>Cadastro</h2>
    <form method="post" action="../controle/controle_cadastro.php">
            
            <lable>Username</lable> <input id="username" name="nome" type="text" required><br>
            <lable>E-mail:</lable> <input id="email" name="email" type="email" required><br>
            <lable>Senha</lable> <input id="senha" name="senha" type="password" pattern=".{6,)" title="Digite 6 ou mais caracteres" required><br>

            <input type="submit" name="bt_cadastro" value="Cadastro">
    </form>
    
    <P>Já possui uma conta? então faça o <a class="linkConta" href="index.php">login</a></P>
    </div>
    
    <script src="script.js"></script>
</body>
</html>